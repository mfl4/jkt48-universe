@extends('layouts.main')

@section('content')
    <h1>Member Page</h1>
    <h1 class="text-9xl bg-font opacity-80 text-center items-center -rotate-12 absolute right-52 bottom-52 animate-pulse"
        data-aos="zoom-in-left">
        Freya<br>Jayawardana
    </h1>
    <img class="absolute right-52 bottom-0 z-50 w-1/3" src="{{ asset('fre.png') }} " alt="fre" data-aos="zoom-in-right">
@endsection
