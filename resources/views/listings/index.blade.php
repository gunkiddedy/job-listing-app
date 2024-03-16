{{-- @extends('layout') --}}

{{-- @section('content') --}}
<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="inline-grid lg:grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 gap-8 mx-4">
        @unless (count($listings) == 0)
            @foreach ($listings as $item)
                {{-- custom component --}}
                <x-listing-card :item="$item" />
            @endforeach
        @endunless
    </div>

    <div class="mt-6 p-4">
        {{ $listings->links() }}
    </div>
</x-layout>
{{-- @endsection --}}
