@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Add Experience</h2>

            <form action="{{ route('experiences.store') }}" method="POST">
                @csrf

                <div class="space-y-6">
                    <!-- Company -->
                    <div>
                        <label for="company" class="block text-lg font-medium text-gray-700">Company</label>
                        <input type="text" name="company" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('company') border-red-500 @enderror" required>
                        @error('company')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Position -->
                    <div>
                        <label for="position" class="block text-lg font-medium text-gray-700">Position</label>
                        <input type="text" name="position" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('position') border-red-500 @enderror" required>
                        @error('position')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-lg font-medium text-gray-700">Description</label>
                        <textarea name="description" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('description') border-red-500 @enderror"></textarea>
                        @error('description')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-6">
                        <button type="submit" class="inline-block px-6 py-2 text-lg font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
