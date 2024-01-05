@extends('layouts.app')
@section('layout')
    <section class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <section class="sm:mx-auto sm:w-full sm:max-w-sm" data-aos="fade-down" data-aos-delay="50">
            <img class="mx-auto w-1/5" src="{{ asset('images/jkt48.svg') }}" alt="JKT48 Universe">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-red-900">SIGN UP
            </h2>
        </section>

        <section class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm" data-aos="fade-up" data-aos-delay="50">
            <form class="space-y-6" action="{{ route('signup') }}" method="POST">
                @csrf
                <section>
                    <label for="name" class="block text-sm font-medium leading-6 text-red-900">Name</label>
                    <section class="mt-2">
                        <input id="name" name="name" type="name" autocomplete="name" value="{{ old('name') }}"
                            autofocus required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-red-90-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                    </section>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </section>

                <section>
                    <label for="username" class="block text-sm font-medium leading-6 text-red-900">Username</label>
                    <section class="mt-2">
                        <input id="username" name="username" type="username" autocomplete="username"
                            value="{{ old('username') }}" required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-red-90-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                    </section>
                    @error('username')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </section>

                <section>
                    <label for="email" class="block text-sm font-medium leading-6 text-red-900">Email
                        address</label>
                    <section class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}"
                            required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-red-90-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                    </section>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </section>

                <section>
                    <label for="password" class="block text-sm font-medium leading-6 text-red-900">Password</label>
                    <section class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-red-900 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6 @error('password')
                            bg-red-600
                            @enderror">
                    </section>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </section>

                <section>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md border border-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-red-600 shadow-lg hover:bg-red-600 hover:text-white hover:font-extrabold  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 transition-all duration-150">Sign
                        up</button>
                </section>
            </form>

            <p class="mt-10
                        text-center text-sm text-red-500">
                Already have an account?
                <a href="{{ route('signin') }}"
                    class="font-semibold leading-6 text-red-600 hover:text-red-500 animate-pulse">Here</a>
            </p>
        </section>
    </section>
@endsection
