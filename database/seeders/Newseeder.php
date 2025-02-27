<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Newseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('news')->insert([
        [
            'title' => 'New News Item 1',
            'content' => 'This is the content for News Item 1.',
        ],
        [
            'title' => 'New News Item 2',
            'content' => 'This is the content for News Item 2.',
        ],
        [
            'title' => 'New News Item 3',
            'content' => 'This is the content for News Item 3.',
        ]
    ]);
    // DB::table('news')->where('title', 'New News Item 2')->delete();

       // Add more news items as needed...
    
    }
}
