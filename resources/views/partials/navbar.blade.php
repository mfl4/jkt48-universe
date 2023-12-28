<nav class="sticky top-0 bg-red-700 text-white z-50 p-3 flex justify-between items-center rounded-b-lg"
    data-aos="zoom-in-down">
    <section>
        <ul class="flex gap-5">
            <li>
                <a href="/"
                    class="rounded p-2 transition-all duration-300 hover:bg-red-800 {{ request()->is('/') ? ' font-extrabold bg-red-950' : '' }}">Home</a>
            </li>
            <li>
                <a href="/members"
                    class="rounded p-2 transition-all duration-300 hover:bg-red-800 {{ request()->is('members') ? ' font-extrabold bg-red-950' : '' }}">Members</a>
            </li>
            <li>
                <a href="/dashboard"
                    class="rounded p-2 transition-all duration-300 hover:bg-red-800 {{ request()->is('dashboard') ? ' font-extrabold bg-red-950' : '' }}">Dashboard</a>
            </li>
        </ul>
    </section>
    <section class="flex items-center gap-2">
        <img class="mx-auto w-8" src="https://jkt48.com/images/logo.svg" alt="JKT48 Universe">
        <h1 class="text-3xl font-black text-white ">JKT48 Universe</h1>
    </section>

    <section>
        <ul>
            <li>
                <a href="/signin"
                    class="hover:bg-red-900 hover:text-white hover:font-bold rounded font-semibold bg-white text-red-700 p-2 transition-all duration-300 {{ request()->is('signin') ? ' font-extrabold' : '' }}">Sign
                    In</a>
            </li>
        </ul>
    </section>

</nav>
