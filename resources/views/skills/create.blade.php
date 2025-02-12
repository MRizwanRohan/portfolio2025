@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Add Skills</h2>

            <form action="{{ route('skills.store') }}" method="POST" id="skillsForm">
                @csrf

                <div id="skillsContainer" class="space-y-6">
                    <!-- Skill Name and Image -->
                    <div class="grid grid-cols-3 gap-6 items-center" id="skillFields">
                        <!-- Skill Name -->
                        <div>
                            <label for="name" class="block text-lg font-medium text-gray-700">Skill Name</label>
                            <input type="text" name="name[]" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-black @error('name') border-red-500 @enderror" required>
                            @error('name.*')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Skill Image -->
                        <div>
                            <label for="image" class="block text-lg font-medium text-gray-700">Skill Image</label>
                            <input type="file" name="image[]" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('image.*') border-red-500 @enderror" required>
                            @error('image.*')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Delete Button -->
                        <div class="flex justify-center items-center">
                            <button type="button" class="deleteSkill px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 transition duration-300 ease-in-out">Delete</button>
                        </div>
                    </div>
                </div>

                <!-- Add More Skills Button -->
                <div class="text-center mt-6">
                    <button type="button" id="addMoreSkill" class="inline-block px-6 py-2 text-lg font-medium text-blue-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition duration-300 ease-in-out">Add More Skill</button>
                </div>

                <!-- Submit Button -->
                <div class="text-center mt-6">
                    <button type="submit" class="inline-block px-6 py-2 text-lg font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for adding and deleting skill fields -->
<script>
    document.getElementById('addMoreSkill').addEventListener('click', function() {
        var skillsContainer = document.getElementById('skillsContainer');
        var skillFields = document.getElementById('skillFields');

        // Clone the first skill block
        var newSkill = skillFields.cloneNode(true);

        // Clear the input values in the cloned element
        var inputs = newSkill.querySelectorAll('input');
        inputs.forEach(function(input) {
            input.value = ''; // Clear input values in the cloned fields
        });

        // Append the new skill block to the container
        skillsContainer.appendChild(newSkill);
    });

    // Event delegation for deleting skill fields
    document.getElementById('skillsContainer').addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('deleteSkill')) {
            var skillSection = event.target.closest('.grid'); // Find the closest parent grid container
            var skillsContainer = document.getElementById('skillsContainer');

            // Prevent deletion if there's only one skill section left
            if (skillsContainer.children.length > 1) {
                skillSection.remove(); // Remove the entire skill section (name, image, and delete button)
            }
        }
    });
</script>
@endsection
