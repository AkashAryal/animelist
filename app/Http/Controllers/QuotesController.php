<?php

namespace App\Http\Controllers;

use App\quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public static function getRandQuote(){

      $quote=quotes::inRandomOrder()->first();
      $output = "\"".$quote['quote']."\" - ".$quote['character']." (".$quote['anime'].")";
      return $output;
    }
}
