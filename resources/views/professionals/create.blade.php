@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Create Professional</h2>

            <form action="{{ route('professionals.store') }}" method="POST">
                @csrf

                <div class="space-y-6">
                    <!-- First Name -->
                    <div>
                        <label for="first_name" class="block text-lg font-medium text-gray-700">First Name</label>
                        <input type="text" name="first_name" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('first_name') border-red-500 @enderror" required>
                        @error('first_name')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="last_name" class="block text-lg font-medium text-gray-700">Last Name</label>
                        <input type="text" name="last_name" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('last_name') border-red-500 @enderror" required>
                        @error('last_name')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Display Name -->
                    <div>
                        <label for="display_name" class="block text-lg font-medium text-gray-700">Display Name</label>
                        <input type="text" name="display_name" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('display_name') border-red-500 @enderror">
                        @error('display_name')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Bio -->
                    <div>
                        <label for="bio" class="block text-lg font-medium text-gray-700">Bio</label>
                        <textarea name="bio" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('bio') border-red-500 @enderror"></textarea>
                        @error('bio')
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
