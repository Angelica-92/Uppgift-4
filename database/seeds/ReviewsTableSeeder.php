<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
          [
            "name" => "Pelle",
            "comment" => "sämst telefon ever",
            "grade" => 10,
            "product_id" => 1,
            "type" => "computer"
          ],
          [
            "name" => "Kalle",
            "comment" => "mycet dålig",
            "grade" => 7,
            "product_id" => 2,
            "type" => "mobile"
          ],
          [
            "name" => "Karl",
            "comment" => "sämst banan ",
            "grade" => 5,
            "product_id" => 1,
            "type" => "tablet"
          ],
          [
            "name" => "Jonas",
            "comment" => "kanon",
            "grade" => 3,
            "product_id" => 3,
            "type" => "tablet"
          ]

        ]);
    }
}
