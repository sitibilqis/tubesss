<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'rating' => '5',
                'comment' => 'Saya sangat suka dengan resep ini',
                'created_at' => Carbon::now()
            ],

        ];
    }
}
