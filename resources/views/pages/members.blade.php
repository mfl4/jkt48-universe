@extends('layouts.main')

@section('content')
    <h1 class="border-b border-red-700 p-4 text-2xl font-black tracking-tight text-red-700" data-aos="fade-down-left"
        data-aos-mirror="true" data-aos-once="false">
        All
        Members</h1>

    <section class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($members as $member)
            <section class="relative" data-aos="fade-down-right" data-aos-delay="{{ $member->generation }}0"
                data-aos-duration="500" data-aos-mirror="true" data-aos-once="false">
                <section
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-300 border border-red-300 lg:aspect-none hover:opacity-75 lg:h-80">
                    @if ($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    @else
                        <img src="https://jkt48.com/profile/{{ strtolower(str_replace(' ', '_', $member->name)) }}.jpg"
                            alt="{{ $member->name }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    @endif
                </section>
                <section class="mt-2 flex justify-between items-center border border-l-8 border-red-300 rounded-r-lg p-4">
                    <section class="space-y-2">
                        <h2 class="text-lg font-bold text-red-700 ">
                            <a href="{{ route('member', $member->id) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $member->name }}
                            </a>
                        </h2>
                        <section class="flex space-x-2">
                            <a
                                class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Gen
                                {{ $member->generation }}</a>
                            <a
                                class="animate-bounce inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset @if ($member->status == 'Member') bg-green-50 text-green-700 ring-green-600/20 @elseif ($member->status == 'Trainee') bg-yellow-50 text-yellow-700 ring-yellow-600/20 @else bg-red-50 text-red-700 ring-red-600/20 @endif">{{ $member->status }}</a>

                        </section>
                    </section>
                    <section class="hover:text-red-700 text-2xl z-50 ">
                        <i class="fa-regular fa-heart"></i>
                    </section>
                </section>
            </section>
        @endforeach
    </section>
@endsection
