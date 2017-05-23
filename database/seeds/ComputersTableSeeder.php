<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('computers')->insert([

      [   "title" => "Gaming for noobs",
          "brand" => "Windows",
          "image" => "https://c.s-microsoft.com/en-ca/CMSImages/devices_Windows_Devices_Overview_ShopMkt_1920_Product06_IMG.jpg?version=d2cd94d3-cfa5-e100-df18-e94f42ca15d5",
          "description" => "en helt ok dålig laptop",
          "price" => 2999
      ],
      [
          "title" => "Is-50000",
          "brand" => "Apple",
          "image" => "http://www.resourcesforlife.com/wp/wp-content/uploads/2008/03/20090606sa-apple-imac-desktop-computer.jpg",
          "description" => "en fantastik dator för att kolla film på",
          "price" => 5999
      ],
      [
          "title" => "MacBook Pro",
          "brand" => "Apple",
          "image" => "https://www.netonnet.se/files/Content/info/Apple_MacBookPro/239422.jpg",
          "description" => "en fantastik dator för den som är grafisk designer",
          "price" => 5999
      ],
      [
          "title" => "Is-50000",
          "brand" => "Apple",
          "image" => "",
          "description" => "en fantastik dator för att kolla film på",
          "price" => 5999
      ]



  ]);
    }
}
