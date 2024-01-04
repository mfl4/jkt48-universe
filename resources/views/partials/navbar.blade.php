<nav class="sticky top-0 bg-red-700 text-white z-50 p-3 flex justify-between items-center shadow-2xl shadow-red-700"
    data-aos="fade-down">
    <section>
        <ul class="flex gap-5">
            <li>
                <a href="{{ Route('home') }}"
                    class="rounded  p-2 transition-all duration-300 hover:bg-white hover:text-red-600 hover:font-bold {{ request()->is('/') ? 'text-red-700 font-extrabold rounded bg-white' : 'text-white' }}">Home</a>
            </li>
            <li>
                <a href="{{ Route('members') }}"
                    class="rounded  p-2 transition-all duration-300 hover:bg-white hover:text-red-600 hover:font-bold {{ request()->is('members*') ? 'text-red-700 font-extrabold rounded bg-white' : 'text-white' }}">Members</a>
            </li>
            <li>
                <a href="{{ Route('dashboard') }}"
                    class="rounded  p-2 transition-all duration-300 hover:bg-white hover:text-red-600 hover:font-bold {{ request()->is('dashboard*') ? 'text-red-700 font-extrabold rounded bg-white' : 'text-white' }}">Dashboard</a>
            </li>
        </ul>
    </section>
    <section class="flex items-center gap-2">
        <img class="mx-auto w-8" src="{{ asset('images/jkt48.svg') }}" alt="JKT48 Universe">
        <h1 class="text-3xl font-black text-white ">JKT48 Universe</h1>
    </section>

    <section>
        <ul>
            @auth
                <li>
                    <a class="rounded font-semibold bg-white text-red-700 p-2 transition-all duration-300" href="/"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->name }}
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ Route('signin') }}"
                        class="rounded font-semibold bg-white text-red-700 p-2 transition-all duration-300 hover:bg-red-900 hover:text-white hover:font-bold {{ request()->is('signin') ? ' font-extrabold' : '' }}">Sign
                        In</a>
                </li>
            @endauth
        </ul>
    </section>

</nav>
