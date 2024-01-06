<nav class="sticky top-0 bg-red-700 text-white z-50 p-3 flex justify-between items-center shadow-2xl shadow-red-700"
    data-aos="fade-down">
    <section>
        <ul class="flex gap-5">
            <li>
                <a href="{{ Route('home') }}"
                    class="rounded p-2 transition-all duration-300 hover:text-white hover:bg-red-600 hover:font-bold
                    {{ request()->is('/') ? 'text-red-700 font-extrabold rounded bg-white' : 'text-white' }}"><i
                        class="fa-solid fa-house"></i> Home</a>
            </li>
            <li>
                <a href="{{ Route('members') }}"
                    class="rounded p-2 transition-all duration-300 hover:text-white hover:bg-red-600 hover:font-bold
                    {{ request()->is('members*') ? 'text-red-700 font-extrabold rounded bg-white' : 'text-white' }}"><i
                        class="fa-solid fa-star"></i> Members</a>
            </li>
        </ul>
    </section>
    <section class="flex items-center gap-2">
        <img class="mx-auto w-8" src="{{ asset('images/jkt48.svg') }}" alt="JKT48 Universe">
        <h1 class="text-3xl font-black text-white ">JKT48 Universe</h1>
    </section>

    <section>
        <ul class="cursor-pointer flex gap-5">
            @auth
                <li>
                    <a class="rounded font-semibold bg-white text-red-700 p-2 transition-all duration-300"
                        onclick="handleDropdown()" id="dropdown-toggle"><i class="fa-solid fa-circle-user"></i>
                        Welcome, {{ auth()->user()->username }}
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="absolute rounded mt-2 p-4 border-red-700 border text-red-700 bg-white hidden"
                        id="dropdown-menu">
                        @can('isAdmin')
                            <li><a class="rounded px-4 py-3 transition-all duration-300 hover:text-white hover:bg-red-600"
                                    href="{{ Route('dashboard') }}"><i class="fa-solid fa-bars-progress"></i> Dashboard</a></li>
                            <hr class="my-2 border-red-700">
                        @endcan
                        <li class="rounded px-4 py-3 transition-all duration-300 hover:text-white hover:bg-red-600">
                            <form action="{{ route('signout') }}" method="POST">
                                @csrf
                                <button type="submit"><i class="fa-solid fa-right-from-bracket"></i>
                                    Sign Out</button>
                            </form>
                        </li>
                    </ul>
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
<script>
    const handleDropdown = () => {
        const dropdownToggle = document.querySelector('#dropdown-toggle');
        const dropdownMenu = document.querySelector('#dropdown-menu');

        if (dropdownMenu.classList.contains('hidden')) {
            dropdownMenu.classList.remove('hidden');
            dropdownToggle.classList.remove('text-red-700');
            dropdownToggle.classList.remove('bg-white');
            dropdownToggle.classList.add('bg-red-900');
            dropdownToggle.classList.add('text-white');

        } else {
            dropdownMenu.classList.add('hidden');
            dropdownToggle.classList.remove('bg-red-900');
            dropdownToggle.classList.remove('text-white');
            dropdownToggle.classList.add('bg-white');
            dropdownToggle.classList.add('text-red-700');
        }

    }
</script>
