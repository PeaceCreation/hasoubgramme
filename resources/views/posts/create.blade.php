<x-app-layout>
        <div class="card p-10">
            <h1 class="text-3xl mb-10">
                {{ ('Create a new post') }}
            </h1>
            <div class="flex flex-col justify-center items w-full">
                @if($errors->any())

                <div class="w-full bg-red 50 text-red-700 p-5 rounded-xl">
                        @foreach ( $errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                        @endforeach
                </div>
                @endif
            </div>

        {{-- Forms --}}
        <form action="/p/create" method="POST" enctype="multipart/form-data" class="block">
            @method('POST')
            @csrf
            <label for="file_input" class="block text-sm font-medium text-gray-700">Choose an image</label>
            <input type="file" name="image" id="file_input" class="mt-2 block w-full text-sm text-gray-500" required>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG, or GIF</p>

            <label for="description" class="block text-sm font-medium text-gray-700 mt-4">Description</label>
            <textarea name="description" id="description" cols="50" rows="5" class="mt-2 border border-gray-200 rounded-xl" placeholder="Write a description" required></textarea>

            <x-primary-button class="mt-4 lg:block">
                {{ __('Create Post') }}
            </x-primary-button>
        </form>

        </div>
</x-app-layout>
