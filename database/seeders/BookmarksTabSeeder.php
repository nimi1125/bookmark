<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BookmarksTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('bookmarks')->insert([
                'title' => Str::random(10),
                'url' => 'http://' . Str::random(10) . '.com', 
                'description' => Str::random(50),
            ]);
        }
    }
}