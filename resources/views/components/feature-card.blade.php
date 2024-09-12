<div class="bg-white p-6 rounded-lg shadow relative overflow-hidden group">
    <h3 class="text-xl font-semibold mb-4 text-purple">{{ $feature->title }}</h3>
    <p class="mb-4">{{ $feature->description }}</p>
    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        @if($videoUrl)
            <video class="w-full h-full object-cover" loop muted playsinline 
                onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;">
                <source src="{{ $videoUrl }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <button class="absolute bottom-2 right-2 bg-dark-green text-white p-2 rounded-full opacity-50 hover:opacity-100" onclick="toggleAudio(this)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path>
                </svg>
            </button>
        @else
            <p>Video not available</p>
        @endif
    </div>
</div>