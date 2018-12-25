<?php

use Illuminate\Database\Seeder;
use App\quotes;
class QueryTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    if(quotes::count() !=0){
      quotes::truncate();
    }

    $wonderfulQuotesArray=array(
      array(
        "anime"=>"Bleach",
        "quote"=>"To know sorrow is not terrifying. What is terrifying is to know you can't go back to happiness you could have.",
        "character"=>"Matsumoto Rangiku"
      )
    );

    foreach ($wonderfulQuotesArray as $q) {
      $quotes = new quotes;
      $quotes->quote=$q['quote'];
      $quotes->character=$q['character'];
      $quotes->anime=$q['anime'];
      $quotes->save();
    }

  }
}
