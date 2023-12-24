<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '10000',
                'description' => 'a little mobile',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/levant_en/images/mobile-phones/MD05997279/MD05997280/gallery/medium01.jpg',
            ],
            [
                'name' => '12 5G Mobile',
                'price' => '40000',
                'description' => 'a 5g mobile',
                'category' => '5g Mobile',
                'gallery' => 'https://www.bouyguestelecom.fr/media/catalog/product//x/i/xiaomi-12-5g-violet-face.png',
            ],
            [
                'name' => 'Xioami redmi 12',
                'price' => '320000',
                'description' => 'a xioami redmi 12 mobile blauw',
                'category' => 'Xioami Mobile',
                'gallery' => 'https://bsimg.nl/images/xiaomi-redmi-12-256gb-blauw_1.png/XnDhYfTF7kFR30BuvBPsluUgmy0%3D/fit-in/771x1200/filters%3Aformat%28webp%29%3Aupscale%28%29',
            ],
            [
                'name' => 'Xioami Watch',
                'price' => '21000',
                'description' => 'a xioami watch',
                'category' => 'watch',
                'gallery' => 'https://i02.appmifile.com/mi-com-product/fly-birds/xiaomi-smart-kids-watch/pc/b672a700f3d7a3203c94f1a943a46221.png?f=webp',
            ],
        ]);
    }
}
