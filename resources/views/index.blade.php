@extends('layouts.app')

@section('content')
<div x-data="{ open: false }" class="relative overflow-x-hidden">
    <!-- Toggle button for mobile -->
    <button @click="open = !open" 
            :class="{'left-4': !open, 'left-68': open}"
            class="md:hidden fixed top-4 z-50 bg-dark-green text-white p-2 rounded-md transition-all duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Sidebar Navigation -->
    <nav :class="{'translate-x-0': open, '-translate-x-full': !open}" 
         class="fixed h-screen w-64 bg-dark-green text-white transition-transform duration-200 ease-in-out md:translate-x-0 z-40">
        <div class="p-6 pt-16 md:pt-6">
            <h2 class="text-xl font-bold mb-6">Mindfulness App</h2>
            <ul class="space-y-4">
                <li><a @click="open = false" href="#hero" class="hover:text-light-green block">Home</a></li>
                <li><a @click="open = false" href="#project" class="hover:text-light-green block">Project</a></li>
                <li><a @click="open = false" href="#features" class="hover:text-light-green block">Features</a></li>
                <li><a @click="open = false" href="#tech-stack" class="hover:text-light-green block">Tech Stack</a></li>
                <li><a @click="open = false" href="#about" class="hover:text-light-green block">About Me</a></li>
            </ul>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="w-full md:pl-64 transition-all duration-200 ease-in-out">
        <div class="container mx-auto">
            <!-- Hero Section -->
            <section id="hero" class="h-screen bg-xlight-green flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-dark-green mb-2">Mindfulness</h1>
                    <p class="text-lg mb-4">Will Shostak | Full Stack Developer</p>
                    <a href="#about" class="bg-dark-green text-white px-4 py-2 rounded-lg hover:bg-purple transition duration-300">Get in Touch</a>
                </div>
            </section>
    
            <!-- Project Overview Section -->
            <section id="project" class="py-12 bg-light-grey">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl font-bold text-dark-green mb-4">Project Overview</h2>
                    <p class="text-sm mb-4">
                        The Mindfulness app, which is actively in development, aims to help high-risk divorced families maintain emotional balance. Funded by the National Institute of Mental Health, this project combines technology with research-based mindfulness practices.
                    </p>
                    <p class="text-sm mb-4">
                        Current project status: Most of the apps .
                    </p>
                </div>
            </section>
    
            <!-- Features Section -->
            <section id="features" class="py-12 bg-white">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl font-bold text-dark-green mb-4">Key Features</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach ($features as $feature)
                            <x-feature-card :feature="$feature" />
                        @endforeach
                    </div>
                    <!-- Add screenshots here -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-dark-green mb-2">Feature Previews</h3>
                        <!-- Add your screenshot carousel or grid here -->
                    </div>
                </div>
            </section>
    
            <!-- Tech Stack Section -->
            <section id="tech-stack" class="py-12 bg-light-grey">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl font-bold text-dark-green mb-4">Tech Stack</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- Add your tech stack items here -->
                        <!-- Example: -->
                        <div class="text-center">
                            <img src="/path-to-laravel-logo.png" alt="Laravel" class="mx-auto mb-2 w-12 h-12">
                            <p class="text-sm">Laravel</p>
                        </div>
                        <!-- Repeat for other technologies -->
                    </div>
                </div>
            </section>
    
            <!-- About Me & Contact Section -->
            <section id="about" class="py-12 bg-white">
                <div class="container mx-auto px-4">
                    <div class="flex flex-col items-start">
                        <div class="w-full mb-8">
                            <div class="flex flex-col md:flex-row items-start">
                                <div class="md:w-2/3 pr-4">
                                    <h2 class="text-2xl font-bold text-dark-green mb-4">About Me</h2>
                                    <p class="text-sm mb-4">
                                        Hey there! I'm a student software developer working for the Digital Experience Group at UConn, which provides high quality web development services to the UConn community. I am currently leading the development on the Mindfulness App.
                                    </p>
                                    <p class="text-sm">
                                        My role:
                                    </p>
                                    <ul class="list-disc list-inside text-sm mb-4">
                                        <li>Lead the full-stack development of the app, utilizing Laravel</li>
                                        <li>Work closely with the client to understand their requirements and provide updates</li>
                                        <li>Manage project timeline and deliverables</li>
                                        <li>Collaborate with another developer on UI/UX design and prototyping</li>
                                    </ul>
                                    <p class="text-sm mb-4">
                                        This project kicked off in March 2024, and it has been an awesome opportunity to utilize my skills and enhance my skills. I have learned an entirely new framework, as well as invaluable lessons in project management, client communication, and technical problem-solving.
                                    </p>
                                    <div class="flex space-x-4 mb-4">
                                        <a href="mailto:your.email@example.com" class="text-dark-green hover:text-purple">Email</a>
                                        <a href="https://linkedin.com/in/willshostak" target="_blank" class="text-dark-green hover:text-purple">LinkedIn</a>
                                        <a href="https://github.com/willsho1" target="_blank" class="text-dark-green hover:text-purple">GitHub</a>
                                    </div>
                                </div>
                                <div class="md:w-1/3 flex justify-center md:justify-end">
                                    <img src="{{ asset('storage/profile.PNG') }}" alt="Will Shostak" class="rounded-full w-48 h-48 object-cover mb-4">
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/3">
                            <h3 class="text-xl font-bold text-dark-green mb-4">Get in Touch</h3>
                            <form>
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-dark-green mb-1">Name</label>
                                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-dark-green">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-dark-green mb-1">Email</label>
                                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-dark-green">
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="block text-sm font-medium text-dark-green mb-1">Message</label>
                                    <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-dark-green"></textarea>
                                </div>
                                <button type="submit" class="bg-dark-green text-white px-4 py-2 rounded-lg hover:bg-purple transition duration-300">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav ul li a');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-light-green');
            if (link.getAttribute('href').slice(1) === current) {
                link.classList.add('text-light-green');
            }
        });
    });
});
</script>
@endsection