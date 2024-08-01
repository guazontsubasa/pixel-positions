<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Tag;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tag)->create(
            new Sequence([
                'featured' => false,
                'schedule' => 'Full time',
            ],
            [
                'featured' => true,
                'schedule' => 'Part time',
            ])
        );
    }
}
