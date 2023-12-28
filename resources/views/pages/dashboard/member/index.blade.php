@extends('layouts.dashboard')

@section('content')
    <h1 class="font-black bg-red-500 text-white p-3 rounded">Member Management</h1>
    <hr class="my-4">

    <section class="mb-5">
        <a href="/dashboard/members/create"
            class="p-2 border border-emerald-500 bg-white text-emerald-500 rounded hover:text-white hover:bg-emerald-500"><i
                class="fas fa-plus"></i> Add Member</a>
        <table class="table-auto border border-red-500 w-full mt-3">
            <thead class="bg-red-500 text-white">
                <tr>
                    <th class="p-3 font-extrabold">No</th>
                    <th class="p-3 font-extrabold">Name</th>
                    <th class="p-3 font-extrabold">Generation</th>
                    <th class="p-3 font-extrabold">Status</th>
                    <th class="p-3 font-extrabold">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white text-red-500">
                @foreach ($members as $member)
                    <tr class="border border-red-500">
                        <td class="p-2 text-center font-semibold">{{ $loop->iteration }}</td>
                        <td class="p-2 text-center font-semibold">{{ $member->name }}</td>
                        <td class="p-2 text-center font-semibold">{{ $member->generation }}</td>
                        <td class="p-2 text-center font-semibold">{{ $member->status }}</td>
                        <td class="p-2 text-center font-semibold">
                            <a href="/dashboard/members/{{ $member->id }}"
                                class="p-2 border border-cyan-500 bg-white text-cyan-500 rounded hover:text-white hover:bg-cyan-500"><i
                                    class="fas fa-eye"></i></a>
                            <a href="/dashboard/members/{{ $member->id }}/edit"
                                class="p-2 border border-orange-500 bg-white text-orange-500 rounded hover:text-white hover:bg-orange-500"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/members/{{ $member->id }}" method="post" class="inline">
                                @method('delete')
                                @csrf
                                <button
                                    class="p-2 py-1.5 border border-red-500 bg-white text-red-500 rounded hover:text-white hover:bg-red-500"><i
                                        class="fas fa-trash"></i></button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    {{ $members->links() }}
@endsection
