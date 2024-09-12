<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Feature::create([
            'title' => 'Progressive Modules',
            'description' => 'Engage with curated modules designed to build mindfulness skills over time.',
            'video_key' => 'feature1.mp4',
        ]);

        Feature::create([
            'title' => 'Engaging Activities',
            'description' => 'Experience a mix of audio, video, journaling, and reflective exercises.',
            'video_key' => 'feature2.mp4',
        ]);

        Feature::create([
            'title' => 'Personal Journal',
            'description' => 'Keep track of your thoughts and progress with a built-in journaling feature.',
            'video_key' => 'feature3.mp4',
        ]);
    }
}
