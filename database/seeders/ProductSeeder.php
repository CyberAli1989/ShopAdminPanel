<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Product::all() as $p ){
            copy(dirname(__FILE__).'/product-sample/'.rand(0,4).'.png',dirname(__FILE__).'/product-sample/temp.png');
            $p->addMedia(dirname(__FILE__).'/product-sample/temp.png')->toMediaCollection();
        }
    }
}
