@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="h-screen flex justify-center items-center text-center bg-cover bg-center relative" style="background-image: url('/images/bg.jpg');">
        <div class="animate-section text-white">
            <h1 class="text-5xl font-bold mb-4">Welcome to My Portfolio</h1>
            <p class="text-xl">This is the home section of my portfolio.</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <!-- Main 3-column grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

        <!-- Left Column - Profile Image -->
        <div class="w-full h-full">
            <img src="{{ asset('images/pp.jpg') }}" alt="Profile Picture" class="rounded-3xl w-full h-full object-cover shadow-lg">
        </div>

    <!-- Middle Column - Hello & Education -->
    <div class="space-y-8">
        <!-- Hello Section -->
        <div>
            <h1 class="text-5xl font-bold mb-6 text-black" >Hello!</h1>
            <p class="text-gray-700 text-lg leading-relaxed">
                My name is M Rizwan Uddin (Rizve). My strengths are Project Management, UI Development. I love creating and storytelling. I look forward to contributing my creativity and skills to innovative software projects.
            </p>
            <p class="text-gray-700 text-lg mt-4">
                Hope you enjoy my portfolio!
            </p>
            <!-- gujg cnhnftm7u56n  -->
        </div>

        <!-- Education Section -->
        <div>
            <h2 class="text-3xl font-bold mb-4 text-black">EDUCATION</h2>
            <div class="space-y-2">
                <h3 class="text-xl font-semibold text-black">2020 - 2024: Daffodil International University.</h3>
                <p class="text-gray-700">Graduated in Software Engineering</p>
            </div>
        </div>
    </div>
            <!-- Right Column - Skills & Experience -->
            <div class="space-y-8">
                <!-- Skills Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-4 text-black">SKILLS</h2>
                    <div class="grid grid-cols-3 gap-4">
                        <!-- Software Icons -->
                        <div class="bg-gray-800 text-white p-3 rounded-xl flex items-center justify-center">
                            <span class="text-xl font-bold">Ps</span>
                        </div>
                        <div class="bg-gray-800 text-white p-3 rounded-xl flex items-center justify-center">
                            <span class="text-xl font-bold">Pr</span>
                        </div>
                        <div class="bg-gray-800 text-white p-3 rounded-xl flex items-center justify-center">
                            <span class="text-xl font-bold">Id</span>
                        </div>
                        <div class="bg-gray-800 text-white p-3 rounded-xl flex items-center justify-center">
                            <span class="text-xl font-bold">Ai</span>
                        </div>
                        <div class="bg-gray-800 text-white p-3 rounded-xl flex items-center justify-center">
                            <span class="text-xl font-bold">Ae</span>
                        </div>
                        <div class="bg-gray-800 text-white p-3 rounded-xl flex items-center justify-center">
                            <span class="text-xl font-bold">?</span>
                        </div>
                    </div>
                </div>

                <!-- Experience Section -->
                <div>
                    <h2 class="text-3xl font-bold mb-4 text-black">EXPERIENCE</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-semibold text-black">2020 - 2023</h3>
                            <p class="text-gray-700">Illustration at Huta Chan Studio</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-black">2022 - Present</h3>
                            <p class="text-gray-700">Freelance Illustration Artist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mt-8 pt-8 border-t border-gray-200">
            <div class="flex flex-wrap gap-6 justify-between items-center">
                <div class="flex items-center gap-2">
                    <i class="fas fa-phone"></i>
                    <span>0789 368 731</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-envelope"></i>
                    <span>bongart0608@gmail.com</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-globe"></i>
                    <span>www.artstation.com/bongart0608</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-at"></i>
                    <span>@bongart0608</span>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-900">
        <div class="animate-section text-center px-10">
            <h2 class="text-4xl font-bold text-white mb-4">Projects</h2>
            <p class="text-lg text-gray-300">This is the projects section of my portfolio. Here are some of the projects I've worked on:</p>
            <!-- Add Project Thumbnails/Links Here -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-800">
        <div class="animate-section text-center px-10">
            <h2 class="text-4xl font-bold text-white mb-4">Contact</h2>
            <p class="text-lg text-gray-300">Feel free to reach out to me if you'd like to collaborate or have any questions!</p>
        </div>
    </section>

    <!-- Name and Portfolio Section (Animated Text) -->
    <section id="illustration" class="py-20 bg-gray-900">
        <div class="text-center px-10">
            <div class="illustration tracking-[0.5em] text-2xl mb-2">
                <span class="animate-letter inline-block">M</span>
                <span class="animate-letter inline-block">R</span>
                <span class="animate-letter inline-block">I</span>
                <span class="animate-letter inline-block">Z</span>
                <span class="animate-letter inline-block">W</span>
                <span class="animate-letter inline-block">A</span>
                <span class="animate-letter inline-block">N</span>
                <span class="animate-letter inline-block"> </span>
                <span class="animate-letter inline-block">U</span>
                <span class="animate-letter inline-block">D</span>
                <span class="animate-letter inline-block">D</span>
                <span class="animate-letter inline-block">I</span>
                <span class="animate-letter inline-block">N</span>
            </div>

            <!-- Portfolio -->
            <div class="portfolio tracking-wider text-7xl font-bold mb-4">
                <span class="animate-letter inline-block">P</span>
                <span class="animate-letter inline-block">O</span>
                <span class="animate-letter inline-block">R</span>
                <span class="animate-letter inline-block">T</span>
                <span class="animate-letter inline-block">F</span>
                <span class="animate-letter inline-block">O</span>
                <span class="animate-letter inline-block">L</span>
                <span class="animate-letter inline-block">I</span>
                <span class="animate-letter inline-block">O</span>
            </div>

            <!-- Year -->
            <div class="year tracking-[0.3em] text-2xl">
                <span class="animate-letter inline-block">2</span>
                <span class="animate-letter inline-block">0</span>
                <span class="animate-letter inline-block">2</span>
                <span class="animate-letter inline-block">5</span>
            </div>
        </div>
    </section>
@endsection
