{{-- @extends('layout') --}}

{{-- @section('content') --}}

<x-layout>
    {{-- @include('partials._search') --}}
    <x-card class="flex justify-between items-center mt-4 mx-4 p-2">
        <a href="/" class="inline-block text-black bg-gray-300 rounded-lg px-4 py-2 shadow-sm">
            <i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <div class="edit-delete flex items-center space-x-3">
            <a href="/listings/{{ $listing->id }}/edit" class="bg-gray-300 rounded-lg px-4 py-2 shadow-sm">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>
            <form method="POST" action="/listings/{{ $listing->id }}">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 rounded-lg px-4 py-2 shadow-sm text-white">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </div>
    </x-card>
    <div class="mx-4">
        {{-- custom component --}}
        <x-card class="bg-gray-50 p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <div class="img mr-6 my-6 w-1/2 shadow-md">
                    <img class="w-full object-cover"
                        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                        alt="" />
                </div>

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>

                {{-- custom component --}}
                <x-listing-tags :tags-csv="$listing->tags" />

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $listing->description }}
                        </p>

                        <div class="btns flex items-center justify-center space-x-4">
                            <a href="mailto:{{ $listing->email }}"
                                class="block bg-laravel text-white py-2 px-4 rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-envelope"></i>
                                Contact Employer</a>

                            <a href="{{ $listing->website }}" target="_blank"
                                class="block bg-black text-white py-2 px-4 rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-globe"></i> Visit
                                Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
{{-- @endsection --}}
