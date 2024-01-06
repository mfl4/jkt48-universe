@extends('layouts.main')

@section('content')
    <section class="flex justify-between items-center">
        <a href="{{ route('members') }}" class="font-black text-white bg-red-700 p-3 m-2 rounded text-center">Back
            to Members</a>
        <section>
            @if ($member->id <= 1)
                <span class="text-red-700 font-black p-3 m-2 rounded">No Previous Member</span>
            @else
                <a href="{{ route('member', $member->id - 1) }}"
                    class="font-black text-white bg-red-700 p-3 m-2 rounded text-center">Previous Member</a>
            @endif

            @if ($member->id >= $member->count())
                <span class="text-red-700 font-black p-3 m-2 rounded">No Next Member</span>
            @else
                <a href="{{ route('member', $member->id + 1) }}"
                    class="font-black text-white bg-red-700 p-3 m-2 rounded text-center">Next Member</a>
            @endif
        </section>
    </section>
    <h1 class="border-b border-red-700 p-4 text-2xl font-black tracking-tight text-red-700" data-aos="fade-down-left">
        {{ $member->name }}</h1>
    <h1 class="text-9xl bg-font opacity-80 text-center items-center -rotate-12 absolute right-52 bottom-52 animate-pulse"
        data-aos="zoom-in-left">
        {{ $member->name }}
    </h1>
    @if ($member->photo)
        <img class="absolute right-52 bottom-0 z-50 w-1/4" src="{{ asset('storage/' . $member->photo) }}"
            alt="{{ $member->name }}" data-aos="zoom-in-right">
    @else
        <img class="absolute right-52 bottom-0 z-50 w-1/4"
            src="https://jkt48.com/profile/{{ strtolower(str_replace(' ', '_', $member->name)) }}.jpg"
            alt="{{ $member->name }}" data-aos="zoom-in-right">
    @endif
    <section>
        <h1>Nickname: {{ $member->nickname }}</h1>
        <blockquote>"{{ $member->jikoshoukai }}"</blockquote>
        <h1>Generation: {{ $member->generation }}</h1>
        <h1>Status: {{ $member->status }}</h1>
        <h1>Birthday: {{ $member->birthday }}</h1>
    </section>
@endsection
