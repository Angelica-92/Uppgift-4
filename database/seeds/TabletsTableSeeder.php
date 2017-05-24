<?php

use Illuminate\Database\Seeder;

class TabletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('tablets')->insert([

      [
       "title" => "Ipad 4",
       "Brand" => "Apple",
       "image" => "https://www.bhphotovideo.com/images/images2500x2500/apple_mk9n2ll_a_128gb_ipad_mini_4_1185478.jpg",
       "description" => "a good tablet, like iphone but bigger",
       "price" => "1999"
      ],
      [
        "title" => "8000 nasa super secret",
        "Brand" => "Windows",
        "image" => "http://www.extremetech.com/wp-content/uploads/2012/11/surface-tablet-running-windows-phone-81.jpg",
        "description" => "winwows upgraded super model",
        "price" => "21999"
      ],
      [
        "title" => "Galaxy 200",
        "Brand" => "Samsung",
        "image" => "https://i5.walmartimages.com/asr/439f8d44-eda6-4578-9802-0b2737744491_6.478040aa1e6478ad5e61bcbd2ebca636.jpeg",
        "description" => "increible fast tablet with mega power",
        "price" => "89899"
      ],
      [
        "title" => "Huawei Mediapad M3 8.4 32GB 4G ",
        "Brand" => "Huawei",
        "image" => "https://www.komplett.se/img/p/400/aaa5d1f3-54dd-3f70-c8d4-26335b9c7797.jpg",
        "description" => "increible fast tablet with mega power",
        "price" => "2000"
      ]

      
    ]);

    }
}
