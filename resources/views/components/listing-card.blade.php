@props(['item'])

<x-card class="w-max shadow">
    <div class="flex flex-col items-center justify-between w-80 h-full">
        <div class="img w-full h-[230px]">
            <a href="/listings/{{ $item->id }}">
                <img class="hidden w-full h-full object-cover md:block"
                    src="{{ $item->logo ? asset('storage/' . $item->logo) : asset('images/no-image.png') }}"
                    alt="" />
            </a>
        </div>
        <div class="w-full h-[240px] flex flex-col justify-between px-4 py-2 bg-gray-50 border-t-2 border-gray-300">
            <h3 class="text-2xl">
                <a href="/listings/{{ $item->id }}">{{ Str::limit($item->title, 50) }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">
                {{ Str::limit($item->company, 20) }}
            </div>

            <div class="text-lg mt-4">
                <x-listing-tags class="mb-2" :tags-csv="$item->tags" />
                <i class="fa-solid fa-location-dot"></i>
                {{ $item->location }}
            </div>
        </div>
    </div>
</x-card>
