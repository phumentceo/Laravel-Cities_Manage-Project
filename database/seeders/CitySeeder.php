<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                "name" => "ខេត្តកណ្តាល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តកំពង់ចាម",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តកំពង់ធំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តព្រៃវែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តស្វាយរៀង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តត្បួងឃ្មុំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តស្ទឹងត្រែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តរតនៈគិរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តមណ្ឌលគិរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "តាកែវ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តកំពង់ស្ពឺ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តបាត់ដំបង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តកំពត",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តព្រះសីហនុ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តកែប",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តកោះកុង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តប៉ៃលិន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តក្រចេះ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តកំពង់ឆ្នាំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តពោធិ៍សាត់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "សៀមរាប",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "បន្ទាយមានជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ខេត្តព្រះវិហារ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ឧត្តរមានជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ទីក្រុងភ្នំពេញ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];


        DB::table('cities')->insert($cities);


    }
}
