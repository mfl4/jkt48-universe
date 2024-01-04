@extends('layouts.main')

@section('content')
    <section class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h1 class="border-b border-red-700 p-4 text-2xl font-black tracking-tight text-red-700" data-aos="fade-down-left">
            {{ $member->name }}</h1>
        <h1 class="text-9xl bg-font opacity-80 text-center items-center -rotate-12 absolute right-52 bottom-52 animate-pulse"
            data-aos="zoom-in-left">
            {{ $member->name }}
        </h1>
        <img class="absolute right-52 bottom-0 z-50 w-1/3" src="{{ asset('images/fre.png') }} " alt="fre"
            data-aos="zoom-in-right">
        <section>
            <img src="{{ $member->photo }}" alt="fre" class="w-1/3" data-aos="zoom-in-right">
            <h1>Name: {{ $member->name }}</h1>
            <h1>Nickname: {{ $member->nickname }}</h1>
            <blockquote>"{{ $member->jikoshoukai }}"</blockquote>
            <h1>Generation: {{ $member->generation }}</h1>
            <h1>Status: {{ $member->status }}</h1>
            <h1>Birthdate: {{ $member->date_of_birth }}</h1>
            <h1>Zodiac: {{ $member->zodiac }}</h1>
            <h1>Blood Type: {{ $member->blood_type }}</h1>
            <h1>Height: {{ $member->height }}</h1>
        </section>
    </section>
@endsection
