@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-100 py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Mindfulness for Divorced Parents</h1>
            <p class="text-xl mb-8">Maintain peace and balance in challenging times</p>
            <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">Learn More</a>
        </div>
    </section>

    <!-- About the Project -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8 text-center">About the Project</h2>
            <p class="text-lg mb-4">Our mindfulness app, sponsored by the National Institute of Mental Health, is designed to help high-risk divorced families maintain mindfulness and emotional balance.</p>
        </div>
    </section>

    <!-- Key Features -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8 text-center">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Progressive Modules</h3>
                    <p>Engage with a series of curated modules designed to build mindfulness skills over time.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Various Activities</h3>
                    <p>Experience a mix of audio, video, journaling, and reflective exercises.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Personal Journal</h3>
                    <p>Keep track of your thoughts and progress with a built-in journaling feature.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Add more sections as needed -->
@endsection
