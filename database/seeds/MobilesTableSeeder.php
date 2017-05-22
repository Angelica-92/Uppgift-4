<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class MobilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobiles')->insert([

      [   "title" => "iPhone 5s",
          "brand" => "Apple",
          "image" => "http://www.three.co.uk/static/images/device_pages/MobileVersion/Apple/iPhone_5s/Space_Grey/desktop/1.jpg",
          "description" => "Apples iPhone 5S är uppgraderingen av iPhone 5. 5S har samma mått och skärmtyp som föregångaren, men telefonen har nu en fingeravtrycksläsare samt ny kamera med tvåfärgsblixt",
          "price" => 2999
      ],
      [
          "title" => "Galaxy s7",
          "brand" => "Samsung",
          "image" => "https://www.att.com/catalog/en/skus/images/samsung-galaxy%20s7%20edge-blue%20coral-450x350.png",
          "description" => "Den nya generationen av Galaxy Smartphones är här. Samsung Galaxy S7 och S7 Edge har den perfekta balansen mellan funktion och form.",
          "price" => 5999
      ],
      [
          "title" => "G6",
          "brand" => "LG",
          "image" => "http://www.lg.com/uk/images/mobile-phones/md05804712/gallery/G6-medium01.jpg",
          "description" => "På samma sätt som normalstora telefoner från ett par år sedan känns pyttesmå idag vänjer man sig snabbt vid den stora skärmen i LG G6.",
          "price" => 6499
      ],
      [
          "title" => "Elite",
          "brand" => "HP",
          "image" => "https://media.dustin.eu/image/193471/400/320/hp-elite-x3-dual-sim-headset-64gb-svart-krom.jpg",
          "description" => "HP Elite x3 kombinerar persondatorns kraft och produktivitet, surfplattans mobilitet och smarta telefonens smidiga uppkoppling.",
          "price" => 5499
      ]
  ]);
    }
}
