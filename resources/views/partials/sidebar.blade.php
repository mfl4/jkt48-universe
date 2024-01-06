<nav class="h-screen  w-1/5 bg-red-700 text-white-100 z-50" data-aos="fade-right" data-aos-delay="25">
    <div class="p-4">
        <section class="flex items-center gap-2" data-aos="fade-right" data-aos-delay="50">
            <img class="mx-auto w-12" src="{{ asset('images/jkt48.svg') }}" alt="JKT48 Universe">
            <h1 class="text-3xl font-black text-white ">JKT48 Universe</h1>
        </section>
        <hr class="my-4" data-aos="fade-right" data-aos-delay="100">
        <ul class="my-2">
            <li class="mb-2" data-aos="fade-right" data-aos-delay="150">
                <a href="{{ route('dashboard') }}"
                    class="font-bold text-lg p-2 block rounded transition-all duration-150 hover:text-white hover:bg-red-600 @if (request()->is('dashboard')) bg-white text-red-700 @else text-white @endif"><i
                        class="fa-solid fa-bars-progress"></i> Dashboard</a>
            </li>
            <li class="mb-2 "data-aos="fade-right" data-aos-delay="200">
                <a href="{{ route('members.index') }}"
                    class="font-bold text-lg p-2 block rounded transition-all duration-150 hover:text-white hover:bg-red-600 @if (request()->is('dashboard/members*')) bg-white text-red-700 @else text-white @endif"><i
                        class="fa-solid fa-star"></i> Member
                    Management</a>
            </li>
        </ul>
        <hr class="my-4" data-aos="fade-right" data-aos-delay="250">
        <ul class="my-2">
            <li class="mb-2" data-aos="fade-right" data-aos-delay="300">
                <a href="{{ route('home') }}"
                    class="text-white font-bold text-lg p-2 block rounded transition-all duration-150 hover:text-white hover:bg-red-600"><i
                        class="fa-solid fa-house"></i> Back
                    to Home</a>
            </li>
            <li class="p-2 text-white font-bold text-lg mb-2  rounded transition-all duration-150 hover:text-white hover:bg-red-600"
                data-aos="fade-right" data-aos-delay="350">
                <form action="{{ route('signout') }}" method="POST">
                    @csrf
                    <button type="submit"><i class="fa-solid fa-right-from-bracket"></i>
                        Sign Out</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
