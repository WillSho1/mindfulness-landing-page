<div class="bg-white p-6 rounded-lg shadow relative overflow-hidden group aspect-w-16 aspect-h-9">
    <h3 class="text-xl font-semibold mb-4 text-purple">{{ $feature->title }}</h3>
    <p class="mb-4">{{ $feature->description }}</p>
    <div class="absolute inset-0">
        @if($videoUrl)
            <video id="featureVideo_{{ $feature->id }}" class="w-full h-full object-cover feature-video opacity-0 transition-opacity duration-300" loop muted playsinline>
                <source src="{{ $videoUrl }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <button id="playButton_{{ $feature->id }}" class="absolute bottom-2 right-2 bg-dark-green text-white p-2 rounded-full opacity-50 hover:opacity-100 play-button">
                <svg id="playIcon_{{ $feature->id }}" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <svg id="pauseIcon_{{ $feature->id }}" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </button>
        @else
            <p>Video not available</p>
        @endif
    </div>
</div>