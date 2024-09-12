<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Feature;

class FeatureCard extends Component
{
    public Feature $feature;
    public $videoUrl;

    public function __construct(Feature $feature)
    {
        $this->feature = $feature;
        $this->videoUrl = $feature->getVideoUrl();
        // \Log::info('Video URL for feature ' . $feature->id . ': ' . $this->videoUrl);
    }

    public function render()
    {
        return view('components.feature-card');
    }
}