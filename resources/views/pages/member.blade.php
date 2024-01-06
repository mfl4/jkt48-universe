@extends('layouts.main')

@section('content')
    <section class="flex justify-between items-center">
        <a href="{{ route('members') }}" class="font-black text-white bg-red-700 p-3 m-2 rounded text-center"
            data-aos="fade-left" data-aos-delay="50">Back
            to Members</a>
        <section>
            @if ($member->id <= 1)
                <span class="text-red-700 font-black p-3 m-2 rounded" data-aos="fade-right" data-aos-delay="100">No Previous
                    Member</span>
            @else
                <a href="{{ route('member', $member->id - 1) }}"
                    class="font-black text-white bg-red-700 p-3 m-2 rounded text-center" data-aos="fade-right"
                    data-aos-delay="100">Previous Member</a>
            @endif

            @if ($member->id >= $member->count())
                <span class="text-red-700 font-black p-3 m-2 rounded" data-aos="fade-right" data-aos-delay="50">No Next
                    Member</span>
            @else
                <a href="{{ route('member', $member->id + 1) }}"
                    class="font-black text-white bg-red-700 p-3 m-2 rounded text-center" data-aos="fade-right"
                    data-aos-delay="50">Next Member</a>
            @endif
        </section>
    </section>

    <section class="flex justify-around items-center h-max my-10">
        <section class="flex justify-center items-center" data-aos="zoom-in-right" data-aos-delay="50">
            @if ($member->photo)
                <img class="z-50 w-30 rounded border-x-4 border-red-700 shadow-2xl shadow-red-700"
                    src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" data-aos="zoom-in-right">
            @else
                <img class="z-50 w-30 rounded border-x-4 border-red-700 shadow-2xl shadow-red-700"
                    src="https://jkt48.com/profile/{{ strtolower(str_replace(' ', '_', $member->name)) }}.jpg"
                    alt="{{ $member->name }}" data-aos="zoom-in-right">
            @endif
        </section>
        <section class="p-2 text-red-700 text-4xl flex flex-col justify-center gap-4">
            <h1 class="px-3 py-2 border-y border-red-700 bg-red-50 rounded font-black" data-aos="fade-left"
                data-aos-delay="50">{{ $member->name }}</h1>
            <h1 class="px-3 py-2 border-y border-red-700 bg-red-50 rounded font-bold" data-aos="fade-left"
                data-aos-delay="100">{{ $member->nickname }}</h1>
            <h1 class="px-3 py-2 border-y border-red-700 bg-red-50 rounded font-bold" data-aos="fade-left"
                data-aos-delay="150">Generation {{ $member->generation }}
            </h1>
            <h1 class="px-3 py-2 rounded font-bold @if ($member->status == 'Member') bg-green-50 text-green-700 ring-green-600/20 border-y border-green-700 @elseif ($member->status == 'Trainee') bg-yellow-50 text-yellow-700 ring-yellow-600/20 border-y border-yellow-700 @else bg-red-50 text-red-700 ring-red-600/20 border-y border-red-700 @endif"
                data-aos="fade-left" data-aos-delay="200">
                {{ $member->status }}</h1>
            <h1 class="px-3 py-2 border-y border-red-700 bg-red-50 rounded font-bold" data-aos="fade-left"
                data-aos-delay="250">{{ $member->birthday }}</h1>
        </section>
    </section>
    <blockquote class="border-l-4 text-5xl text-wrap text-red-700 border-red-700 p-2 bg-font" data-aos="zoom-in-left"
        data-aos-delay="150">
        "{{ $member->jikoshoukai }}"
    </blockquote>
@endsection
