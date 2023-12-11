<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class paketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $name = ['Paket buah lokal', 'Paket sayur special', 'Tropical fruits mix', 'Sayuran mix', 'Buah dan sayuran lokal'];
        $rating =[4.7, 4.9, 5.0, 4.8, 4.9];
        $price = ['50000', '65000', '70000', '60000', '65000'];
        $location = ['Jakarta Selatan', 'Bogor', 'Semarang', 'Jakarta Utara', 'Tangerang'];
        $shortdesc = ['Nanas, pisang, apel, stroberi', 'Tomat, jagung, brokoli, jamur', 'Semangka, pisang, jeruk, apel', 'Paprika, wortel, bawang', 'Tomat, nanas, jeruk, paprika'];
        $image = ['images/paket/paket1','images/paket/paket2','images/paket/paket3','images/paket/paket4','images/paket/paket5'];

        for ($i = 0; $i <5; $i++){
            DB::table('pakets')->insert([
                'name' => $name[$i],
                'rating' => $rating[$i],
                'price' => $price[$i],
                'category' => 'paket',
                'location' => $location[$i],
                'shortdesc' => $shortdesc[$i],
                'longdesc' => $faker->sentence(15),
                'image' => $image[$i]
            ]);
        }
    }
}
