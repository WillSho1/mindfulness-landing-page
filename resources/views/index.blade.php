@extends('layouts.app')

@section('content')
<div class="flex">
    <!-- Sidebar Navigation -->
    <nav class="fixed h-screen w-64 bg-dark-green text-white p-6">
        <h2 class="text-2xl font-bold mb-6">Mindfulness App</h2>
        <ul class="space-y-4">
            <li><a href="#hero" class="hover:text-light-green">Home</a></li>
            <li><a href="#about" class="hover:text-light-green">About</a></li>
            <li><a href="#features" class="hover:text-light-green">Features</a></li>
            <li><a href="#research" class="hover:text-light-green">Research</a></li>
            <li><a href="#contact" class="hover:text-light-green">Contact</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="ml-64 w-full">
        <!-- Hero Section -->
        <section id="hero" class="h-screen bg-xlight-green flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-dark-green mb-4">Mindfulness for Divorced Parents</h1>
                <p class="text-xl mb-8">Find balance and peace in challenging times</p>
                <a href="#" class="bg-dark-green text-white px-6 py-3 rounded-lg hover:bg-purple transition duration-300">Get Started</a>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-dark-green mb-8">About Our Project</h2>
                <p class="text-lg mb-6">Our mindfulness app, sponsored by the National Institute of Mental Health, is designed to help high-risk divorced families maintain emotional balance and mindfulness.</p>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-light-grey">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-dark-green mb-8">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($features as $feature)
                        <x-feature-card :feature="$feature" />
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Research Section -->
        <section id="research" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-dark-green mb-8">Our Research</h2>
                <p class="text-lg mb-6">This project is backed by extensive research in collaboration with mental health professionals and the National Institute of Mental Health.</p>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-light-grey">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-dark-green mb-8">Contact Us</h2>
                <form class="max-w-lg mx-auto">
                    <div class="mb-4">
                        <label for="name" class="block text-dark-green mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-dark-green">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-dark-green mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-dark-green">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-dark-green mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-dark-green"></textarea>
                    </div>
                    <button type="submit" class="bg-dark-green text-white px-6 py-3 rounded-lg hover:bg-purple transition duration-300">Send Message</button>
                </form>
            </div>
        </section>
    </main>
</div>

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