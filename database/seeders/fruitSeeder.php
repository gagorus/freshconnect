<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class fruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create('id_ID');

        $name = ['Stroberi lokal', 'Durian lokal', 'Anggur merah', 'Rambutan lokal', 'Jeruk mandarin'];
        $rating =[5.0, 4.9, 4.8, 5.0, 4.9];
        $price = ['10000', '25000', '20000', '30000', '25000'];
        $location = ['Jakarta Utara', 'Tangerang', 'Bogor', 'Depok', 'Bekasi'];
        $shortdesc = ['1 pack = 500 gram', '1 buah', '1 ikat = 700 gram', '1 ikat = 1 kg', '1 pack = 600 gram'];
        $image = ['images/fruits/stroberi','images/fruits/durian','images/fruits/anggur','images/fruits/rambutan','images/fruits/jeruk'];

        for ($i = 0; $i <5; $i++){
            DB::table('fruits')->insert([
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
