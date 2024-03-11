@props(['item'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 object-contain mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $item->id }}">{{ $item->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">
                {{ $item->company }}
            </div>

            <x-listing-tags :tags-csv="$item->tags" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{ $item->location }}
            </div>
        </div>
    </div>
</x-card>
