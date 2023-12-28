@extends('layouts.app')
@section('layout')
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
@endsection
