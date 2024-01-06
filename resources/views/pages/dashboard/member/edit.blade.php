@extends('layouts.dashboard')

@section('content')
    <h1 class="font-black bg-red-700 text-white p-3 rounded">Edit {{ $member->name }}'s Profile</h1>
    <hr class="my-4 border border-red-700">

    <form class="space-y-6 w-3/4" action="{{ route('members.update', $member) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <section>
            <label for="photo" class="block text-sm font-medium leading-2 text-red-700">Photo</label>
            <input type="hidden" name="oldPhoto" value="{{ $member->photo }}">
            @if ($member->photo)
                <img src="{{ asset('storage/' . $member->photo) }}"
                    class="photo-preview w-72 border border-red-700 rounded absolute right-6">
            @else
                <img src="https://jkt48.com/profile/{{ strtolower(str_replace(' ', '_', $member->name)) }}.jpg"
                    class="photo-preview w-72 border border-red-700 rounded absolute right-6">
            @endif
            <input id="photo" name="photo" type="file" autocomplete="photo"
                value="{{ old('photo', $member->photo) }}" onchange="previewPhoto()"
                class="mt-1 block w-full rounded-md border-0 py-4 px-3 text-red-90-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            @error('photo')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </section>

        <section>
            <label for="name" class="block text-sm font-medium leading-2 text-red-700">Name</label>
            <input id="name" name="name" type="text" autocomplete="name" value="{{ old('name', $member->name) }}"
                required
                class="mt-1 block w-full rounded-md border-0 py-1.5 px-3 text-red-700 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </section>

        <section>
            <label for="nickname" class="block text-sm font-medium leading-2 text-red-700">Nickname</label>
            <input id="nickname" name="nickname" type="text" autocomplete="nickname"
                value="{{ old('nickname', $member->nickname) }}" required
                class="mt-1 block w-full rounded-md border-0 py-1.5 px-3 text-red-700 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            @error('nickname')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </section>

        <section>
            <label for="jikoshoukai" class="block text-sm font-medium leading-2 text-red-700">Jikoshoukai</label>
            <input id="jikoshoukai" name="jikoshoukai" type="text" autocomplete="jikoshoukai"
                value="{{ old('jikoshoukai', $member->jikoshoukai) }}" required
                class="mt-1 block w-full rounded-md border-0 py-1.5 px-3 text-red-700 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            @error('jikoshoukai')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </section>

        <section>
            <label for="generation" class="block text-sm font-medium leading-2 text-red-700">Generation</label>
            <input id="generation" name="generation" type="number" autocomplete="generation"
                value="{{ old('generation', $member->generation) }}" required
                class="mt-1 block w-full rounded-md border-0 py-1.5 px-3 text-red-700 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            @error('generation')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </section>

        <section>
            <label for="status" class="block text-sm font-medium leading-2 text-red-700">Status</label>
            <select name="status" id="status"
                class="mt-1 block w-full rounded-md border-0 py-1.5 px-3 text-red-700 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                @foreach (['Member', 'Trainee', 'Inactive'] as $status)
                    <option value="{{ $status }}">{{ $status }}</option>
                @endforeach
            </select>
            @error('status')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </section>

        <section>
            <label for="birthday" class="block text-sm font-medium leading-2 text-red-700">Birthday</label>
            <input id="birthday" name="birthday" type="date" autocomplete="birthday"
                value="{{ old('birthday', $member->birthday) }}" required
                class="mt-1 block w-full rounded-md border-0 py-1.5 px-3 text-red-700 shadow-sm ring-1 ring-inset ring-red-300 placeholder:text-red-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
            @error('birthday')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </section>

        <section class="flex gap-2">
            <button type="submit"
                class="flex w-full justify-center items-center gap-2 rounded-md border border-red-600 px-3 py-1.5 text-sm font-semibold leading-2 text-red-600 shadow-lg hover:bg-red-600 hover:text-white hover:font-extrabold  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 transition-all duration-150"><i
                    class="fa-solid fa-check"></i> Update
                Member</button>
            <a href="{{ route('members.index') }}"
                class="flex w-full justify-center items-center gap-2 rounded-md border border-red-600 px-3 py-1.5 text-sm font-semibold leading-2 text-red-600 shadow-lg hover:bg-red-600 hover:text-white hover:font-extrabold  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 transition-all duration-150"><i
                    class="fa-solid fa-xmark"></i> Cancel</a>
        </section>
    </form>

    <script>
        const previewPhoto = () => {
            const photo = document.querySelector('#photo');
            const photoPreview = document.querySelector('.photo-preview');

            photoPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(photo.files[0]);

            oFReader.onload = function(oFREvent) {
                photoPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
