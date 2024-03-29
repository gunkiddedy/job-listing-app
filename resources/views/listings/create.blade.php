<x-layout>
    {{-- custom component --}}
    <x-card class="bg-gray-50 border border-gray-200 p-10 rounded max-w-xl mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Gig
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                    placeholder="Example: ZickLearn LTD" />
                <p class="text-red-500 text-xs error" value="{{ old('company') }}">
                    @error('company')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />
                <p class="text-red-500 text-xs error">
                    @error('title')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />
                <p class="text-red-500 text-xs error">
                    @error('location')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" placeholder="Example: example@gmail.com" />
                <p class="text-red-500 text-xs error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{ old('website') }}" placeholder="Example: https://www.upwork.com" />
                <p class="text-red-500 text-xs error">
                    @error('website')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    value="{{ old('tags') }}" placeholder="Example: Laravel, Backend, Postgres, etc" />
                <p class="text-red-500 text-xs error">
                    @error('tags')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" accept="image/png, image/jpeg" class="border border-gray-200 rounded p-2 w-full"
                    name="logo" />

                <p class="text-red-500 text-xs error">
                    @error('logo')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="5"
                    placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>
                <p class="text-red-500 text-xs error">
                    @error('description')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Gig
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
