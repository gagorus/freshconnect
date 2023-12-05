<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create('id_ID');

        $name = ['Brokoli lokal', 'Bayam fresh', 'Jagung manis', 'Bawang bombay', 'Green lettuce'];
        $rating =[4.9, 4.9, 4.7, 5.0, 5.0];
        $price = ['20000', '25000', '30000', '20000', '15000'];
        $location = ['Yogyakarta', 'Bekasi', 'Jakarta Pusat', 'Jakarta Barat', 'Depok'];
        $shortdesc = ['1 ikat', '1 pack = 500g', '1 kilogram', '1 pack = 600 gram', '1 pack = 400 gram'];
        $image = ['images/vegetables/brokoli','images/vegetables/bayam','images/vegetables/jagung','images/vegetables/bawang','images/vegetables/lettuce'];

        for ($i = 0; $i <5; $i++){
            DB::table('vegetables')->insert([
                'name' => $name[$i],
                'rating' => $rating[$i],
                'price' => $price[$i],
                'location' => $location[$i],
                'shortdesc' => $shortdesc[$i],
                'longdesc' => $faker->sentence(15),
                'image' => $image[$i]
            ]);
        }
    }
}
