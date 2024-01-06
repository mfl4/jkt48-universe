@extends('layouts.main')

@section('content')
    <div class="relative isolate px-6 pt-14 lg:px-8" data-aos="fade-up" data-aos-delay="50">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff3288] to-[#ff0000] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-20 sm:py-48 lg:py-20" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-red-900 sm:text-6xl" data-aos="fade-up"
                    data-aos-delay="150">JKT48 UNIVERSE</h1>
                <p class="mt-6 text-lg leading-8 text-red-600" data-aos="fade-up" data-aos-delay="200">Let's get to know
                    JKT48 and its members in depth. Let your
                    heart choose your oshi</p>
                <div class="mt-10 flex items-center justify-center gap-x-6" data-aos="fade-up" data-aos-delay="250">
                    <a href="{{ route('members') }}"
                        class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Let's
                        Explore JKT48 Members</a>
                    <a href="https://jkt48.com/" target="_blank" class="text-sm font-semibold leading-6 text-red-900">Learn
                        more on the
                        official
                        website<span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true" data-aos="fade-up" data-aos-delay="300">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff3288] to-[#ff0000] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
@endsection
