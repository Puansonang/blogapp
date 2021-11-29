<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Blogseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
            [
                "judul" => "tips"
            ],
            [
                "judul" => "daily"
            ],
            [
                "judul" => "news"
            ]
        ];
        \App\Models\blog::insert($data);
    }
    }

