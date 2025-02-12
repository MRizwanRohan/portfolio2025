@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-center text-2xl font-semibold text-gray-800 mb-6">Add Education Details</h3>

            <form method="POST" action="{{ route('education.store') }}">
                @csrf

                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Institution Name -->
                        <div>
                            <label for="institution" class="block text-lg font-medium text-gray-700">Institution Name</label>
                            <input type="text" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('institution') border-red-500 @enderror"
                                id="institution" name="institution" value="{{ old('institution') }}" required>
                            @error('institution')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Degree -->
                        <div>
                            <label for="degree" class="block text-lg font-medium text-gray-700">Degree</label>
                            <input type="text" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('degree') border-red-500 @enderror"
                                id="degree" name="degree" value="{{ old('degree') }}" required>
                            @error('degree')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Field of Study -->
                        <div>
                            <label for="field_of_study" class="block text-lg font-medium text-gray-700">Field of Study</label>
                            <input type="text" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('field_of_study') border-red-500 @enderror"
                                id="field_of_study" name="field_of_study" value="{{ old('field_of_study') }}" required>
                            @error('field_of_study')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Start Date -->
                        <div>
                            <label for="start_date" class="block text-lg font-medium text-gray-700">Start Date</label>
                            <input type="date" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('start_date') border-red-500 @enderror"
                                id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                            @error('start_date')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- End Date -->
                        <div>
                            <label for="end_date" class="block text-lg font-medium text-gray-700">End Date</label>
                            <input type="date" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('end_date') border-red-500 @enderror"
                                id="end_date" name="end_date" value="{{ old('end_date') }}">
                            @error('end_date')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-6">
                        <a href="{{ route('education.index') }}" class="inline-block px-6 py-2 text-lg font-medium text-gray-600 bg-gray-300 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">Cancel</a>
                        <button type="submit" class="inline-block px-6 py-2 ml-4 text-lg font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">Save Education</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
