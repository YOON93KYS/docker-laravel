<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert(["name" => "坂田誠也", "email" => "aaa", "password" => Hash::make("seiya_sakata"), "thumbnail_path" => "aaaaaa.jpg"]);
        DB::table("users")->insert(["name" => "星佳杏", "email" => "bbb", "password" => Hash::make("kana_hoshi"), "thumbnail_path" => "bbbbb.jpg"]);
    }
}
