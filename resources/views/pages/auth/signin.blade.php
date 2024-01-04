@extends('layouts.app')
@section('layout')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-600 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session()->get('success') }}</span>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-600 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session()->get('error') }}</span>
            </div>
        @endif

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto w-1/5" src="{{ asset('images/jkt48.svg') }}" alt="JKT48 Universe">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-red-900">SIGN IN
            </h2>
        </div>

        <main class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('signin') }}" method="POST">
                @csrf
                <section>
                    <label for="email" class="block text-sm font-medium leading-6 text-red-900">Email
                        address</label>
                    <section class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}"
                            autofocus required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-red-90-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                    </section>
                </section>

                <section>
                    <section class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-red-900">Password</label>
                        {{-- <div class="text-sm">
                            <a href="#" class="font-semibold text-red-600 hover:text-red-500">Forgot
                                password?</a>
                        </div> --}}
                    </section>
                    <section class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-red-900 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                    </section>
                </section>

                <section>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md border border-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-red-600 shadow-lg hover:bg-red-600 hover:text-white hover:font-extrabold  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 transition-all duration-150">Sign
                        in</button>
                </section>
            </form>

            <p class="mt-10
                        text-center text-sm text-red-500">
                Haven't signed up yet?
                <a href="{{ route('signup') }}" class="font-semibold leading-6 text-red-600 hover:text-red-500">Here</a>
            </p>
        </main>
    </div>
@endsection
