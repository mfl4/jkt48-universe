@extends('layouts.dashboard')
@section('content')
    <h1 class="font-black bg-red-700 text-white p-3 rounded">Welcome to Dashboard, {{ auth()->user()->name }}</h1>
    <hr class="my-4">

    <h2>Users : {{ $users }}</h2>
    <h2>Members : {{ $members }}</h2>
@endsection
