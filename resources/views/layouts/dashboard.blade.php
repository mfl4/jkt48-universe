@extends('layouts.app')
@section('layout')
    <div class="flex">
        @include('partials.sidebar')
        <section class="w-full p-5" data-aos="fade-left" data-aos-delay="50">
            @yield('content')
        </section>
    </div>
@endsection
