<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            'name'=> 'Oppo Mobile',
            'price'=> '200$',
            'description'=>"A smartphone with 5G and much more features",
            'category'=>"mobile",
            'gallery'=>"https://rukminim1.flixcart.com/image/832/832/xif0q/mobile/x/r/n/-original-imagmgy5jk8ytxnw.jpeg?q=70"
            ],
            [
            'name'=> 'Panasonic Tv',
            'price'=> '400$',
            'description'=>"A smartTv with much more features",
            'category'=>"mobile",
            'gallery'=>"https://rukminim1.flixcart.com/image/832/832/xif0q/television/2/v/t/th-43lx750dx-panasonic-original-imagh2g3hvnhwrp3.jpeg?q=70"
            ],
            [
            'name'=> 'Soni tv',
            'price'=> '500$',
            'description'=>"A smartTv with much more features",
            'category'=>"Tv",
            'gallery'=>"https://rukminim1.flixcart.com/image/832/832/l3929ow0/television/h/d/m/kd-65x75k-in5-sony-original-imagef3zkuszrfgh.jpeg?q=70"
            ],
            [
            'name'=> 'LG Fridge',
            'price'=> '200$',
            'description'=>"A smartphone with 4gb ram and much more features",
            'category'=>"fridge",
            'gallery'=>"https://rukminim1.flixcart.com/image/832/832/xif0q/refrigerator-new/t/x/s/-original-imaghtghjcf67haj.jpeg?q=70"
            ]
            
        ]);
    }
}
