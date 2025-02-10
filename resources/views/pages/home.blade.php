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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                <!-- Left Column - Profile Image -->
                <div class="w-full h-full">
                    <img src="{{ asset('images/pp.jpg') }}" alt="Profile Picture" class="rounded-3xl w-full h-full object-cover shadow-lg">
                </div>

                <!-- Middle Column - Hello & Education -->
                <div class="space-y-8">
                    <!-- Hello Section -->
                    <div>
                        <h1 class="text-5xl font-bold mb-6 text-black">Hello!</h1>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            My name is M Rizwan Uddin (Rizve). My strengths are Project Management, UI Development. I love creating and storytelling. I look forward to contributing my creativity and skills to innovative software projects.
                        </p>
                        <p class="text-gray-700 text-lg mt-4">
                            Hope you enjoy my portfolio!
                        </p>
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
                            @foreach(['Ps', 'Pr', 'Id', 'Ai', 'Ae', '?'] as $skill)
                                <div class="bg-gray-800 text-white p-3 rounded-xl flex items-center justify-center">
                                    <span class="text-xl font-bold">{{ $skill }}</span>
                                </div>
                            @endforeach
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
                    @foreach([
                        ['fas fa-phone', '0789 368 731'],
                        ['fas fa-envelope', 'bongart0608@gmail.com'],
                        ['fas fa-globe', 'www.artstation.com/bongart0608'],
                        ['fas fa-at', '@bongart0608']
                    ] as $contact)
                        <div class="flex items-center gap-2">
                            <i class="{{ $contact[0] }}"></i>
                            <span class="text-gray-500">{{ $contact[1] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Left Part - Title -->
                <div class="text-center md:text-left">
                    <h2 class="text-orange-500 text-4xl font-bold mb-4">Personal <br><span>Projects</span></h2>
                    <p class="text-lg text-gray-500">This is the projects section of my portfolio. Here are some of the projects I've worked on:</p>
                </div>
                <!-- Right Part - Project Image -->
                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('images/projectimg.jpg') }}" alt="Project Image" class="rounded-3xl w-full h-full object-cover shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-800">
        <main class="container mx-auto px-4 py-12">
            <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <!-- Left Column: Text -->
                <div class="space-y-6">
                    <h1 class="text-orange-500 text-6xl md:text-7xl font-bold">Contact Me</h1>
                    <p class="text-gray-300 max-w-md">
                        Have something on your mind? I’m just a message away. Feel free to reach out anytime — I’m always happy to connect and chat!
                    </p>
                </div>

                <!-- Right Column: Form -->
                <div class="space-y-6">
                    <h2 class="text-orange-500 text-3xl">Send me a message</h2>
                    <form class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Full Name" class="w-full bg-gray-900 text-white px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <input type="email" placeholder="Email Address" class="w-full bg-gray-900 text-white px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                        <input type="text" placeholder="Subject" class="w-full bg-gray-900 text-white px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <textarea placeholder="Message" rows="6" class="w-full bg-gray-900 text-white px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-md transition-colors">Send Message</button>
                    </form>
                </div>
            </div>
        </main>
    </section>

    <!-- Name and Portfolio Section (Animated Text) -->
    <section id="illustration" class="py-20 bg-gray-900">
        <div class="text-center px-10">
            <div class="illustration tracking-[0.5em] text-2xl mb-2">
                @foreach(str_split('MRIZWAN UDDIN') as $char)
                    <span class="animate-letter inline-block">{{ $char }}</span>
                @endforeach
            </div>

            <!-- Portfolio -->
            <div class="portfolio tracking-wider text-7xl font-bold mb-4">
                @foreach(str_split('PORTFOLIO') as $char)
                    <span class="animate-letter inline-block">{{ $char }}</span>
                @endforeach
            </div>

            <!-- Year -->
            <div class="year tracking-[0.3em] text-2xl">
                @foreach(str_split('2025') as $char)
                    <span class="animate-letter inline-block">{{ $char }}</span>
                @endforeach
            </div>
        </div>
    </section>
@endsection
