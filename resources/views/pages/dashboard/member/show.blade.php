@extends('layouts.dashboard')

@section('content')
    <h1 class="font-black bg-red-700 text-white p-3 rounded">{{ $member->name }}'s Profile</h1>
    <hr class="my-4 border border-red-700">

    <a href="{{ route('members.edit', $member->id) }}"
        class="p-2 border border-orange-700 bg-white text-orange-700 rounded hover:text-white hover:bg-orange-700"><i
            class="fas fa-edit"></i> Edit</a>
    <form action="/dashboard/members/{{ $member->id }}" method="post" class="inline">
        @method('delete')
        @csrf
        <button class="p-2 py-1.5 border border-red-700 bg-white text-red-700 rounded hover:text-white hover:bg-red-700"><i
                class="fas fa-trash"></i> Delete</button>
    </form>
    <a href="{{ route('members.index') }}"
        class="ms-4 p-2 border border-red-300 bg-white text-red-300 rounded hover:text-white hover:bg-red-300"><i
            class="fas fa-arrow-left"></i> Back</a>
    <section class="mt-3 flex flex-col justify-center items-center gap-2">
        @if ($member->photo)
            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                class="h-80 border border-red-700 rounded">
        @else
            <img src="https://jkt48.com/profile/{{ strtolower(str_replace(' ', '_', $member->name)) }}.jpg"
                class="h-80 border border-red-700 rounded" alt="{{ $member->name }}">
        @endif
        <table class="table-auto
                    border border-red-700 w-11/12">
            <tr>
                <th class="p-3 font-extrabold bg-red-700 text-white border-b border-white">Name</th>
                <td class="p-3 font-bold border border-red-700 text-red-700">{{ $member->name }}</td>
            </tr>
            <tr>
                <th class="p-3 font-extrabold bg-red-700 text-white border-b border-white">Nickname</th>
                <td class="p-3 font-bold border border-red-700 text-red-700">{{ $member->nickname }}</td>
            </tr>
            <tr>
                <th class="p-3 font-extrabold bg-red-700 text-white border-b border-white">Jikoshoukai</th>
                <td class="p-3 font-bold border border-red-700 text-red-700">{{ $member->jikoshoukai }}</td>
            </tr>
            <tr>
                <th class="p-3 font-extrabold bg-red-700 text-white border-b border-white">Generation</th>
                <td class="p-3 font-bold border border-red-700 text-red-700">{{ $member->generation }}</td>
            </tr>
            <tr>
                <th class="p-3 font-extrabold bg-red-700 text-white border-b border-white">Status</th>
                <td class="p-3 font-bold border border-red-700 text-red-700">{{ $member->status }}</td>
            </tr>
            <tr>
                <th class="p-3 font-extrabold bg-red-700 text-white border-b border-white">Birthday</th>
                <td class="p-3 font-bold border border-red-700 text-red-700">{{ $member->birthday }}</td>
            </tr>
        </table>
    </section>
@endsection
