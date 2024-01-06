@extends('layouts.dashboard')
@section('content')
    <h1 class="font-black bg-red-700 text-white p-3 rounded">Welcome to Dashboard, {{ auth()->user()->name }}</h1>
    <hr class="my-4 border border-red-700">

    <section class="grid grid-cols-2 gap-4">
        <a href="{{ route('dashboard') }}"
            class="font-black text-3xl flex flex-col justify-center items-center gap-6 text-center h-96 p-4 border border-indigo-700 text-white bg-indigo-700 rounded hover:bg-white hover:text-indigo-700">
            <i class="fas fa-users text-6xl"></i>
            <h1>Total Users</h1>
            <h1 class="text-9xl">{{ $users }}</h1>
        </a>

        <a href="/dashboard/members"
            class="font-black text-3xl flex flex-col justify-center items-center gap-6 text-center h-96 p-4 border border-blue-700 text-white bg-blue-700 rounded hover:bg-white hover:text-blue-700">
            <i class="fas fa-star text-6xl"></i>
            <h1>Total Members</h1>
            <h1 class="text-9xl">{{ $members }}</h1>
        </a>


    </section>
@endsection
