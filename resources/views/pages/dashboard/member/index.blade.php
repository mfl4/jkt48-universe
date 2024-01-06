@extends('layouts.dashboard')

@section('content')
    <h1 class="font-black bg-red-700 text-white p-3 rounded">Member Management</h1>
    <hr class="my-4 border border-red-700">

    <section class="mb-5">
        <a href="/dashboard/members/create"
            class="p-2 border border-emerald-700 bg-white text-emerald-700 rounded hover:text-white hover:bg-emerald-700"><i
                class="fas fa-plus"></i> Add Member</a>
        <table class="table-auto border border-red-700 w-full mt-3">
            <thead class="bg-red-700 text-white">
                <tr>
                    <th class="p-3 font-extrabold">No</th>
                    <th class="p-3 font-extrabold">Name</th>
                    <th class="p-3 font-extrabold">Generation</th>
                    <th class="p-3 font-extrabold">Status</th>
                    <th class="p-3 font-extrabold">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white text-red-700">
                @foreach ($members as $member)
                    <tr class="border border-red-700">
                        <td class="p-2 text-center font-semibold">{{ $loop->iteration }}</td>
                        <td class="p-2 text-center font-semibold">{{ $member->name }}</td>
                        <td class="p-2 text-center font-semibold">{{ $member->generation }}</td>
                        <td class="p-2 text-center font-semibold">{{ $member->status }}</td>
                        <td class="p-2 text-center font-semibold">
                            <a href="{{ route('members.show', $member->id) }}"
                                class="p-2 border border-cyan-700 bg-white text-cyan-700 rounded hover:text-white hover:bg-cyan-700"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('members.edit', $member->id) }}"
                                class="p-2 border border-orange-700 bg-white text-orange-700 rounded hover:text-white hover:bg-orange-700"><i
                                    class="fas fa-edit"></i></a>
                            <form action="{{ route('members.destroy', $member->id) }}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button
                                    class="p-2 py-1.5 border border-red-700 bg-white text-red-700 rounded hover:text-white hover:bg-red-700"><i
                                        class="fas fa-trash"></i></button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    {{ $members->links() }}
@endsection
