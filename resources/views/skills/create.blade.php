@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Add Skill</h2>

            <form action="{{ route('skills.store') }}" method="POST">
                @csrf

                <div class="space-y-6">
                    <!-- Skill Name -->
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Skill Name</label>
                        <input type="text" name="name" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('name') border-red-500 @enderror" required>
                        @error('name')
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
