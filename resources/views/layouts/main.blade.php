@extends('layouts.app')
@section('layout')
    @include('partials.navbar')
    <main class="mx-auto max-w-2xl px-4 py-4 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
        @yield('content')
    </main>
    @include('partials.footer')
@endsection
