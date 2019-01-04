<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\animeRecommendation;
class AnimeRecommendationController extends Controller
{
  public static function hasEnoughRec($anime, $numRec){
    if(animeRecommendation::where("anime",$anime)->count() == $numRec)
    return true;
    else {
      return false;
    }
  }

  public function setRecNum(Request $request){
    $numRec = $request->input("rec");
    $anime = $request->input('anime');
    session([$anime."numOfRec" => $numRec]);
    return redirect('/myList');
  }

  public static function addRecommendations($animeName, $recommendations){

    foreach ($recommendations as $key => $value) {
      $r = new animeRecommendation;
      $r->anime=$animeName;
      $r->recommendation=$value['title'];
      $r->recUrl=$value['url'];
      $r->save();
    }
  }

  public static function getRecommendations($numRec, $anime){
    $RecAnimes = animeRecommendation::where("anime",$anime)->get(["recommendation", "recUrl"]);
    $recArray=[];
    $counter=0;
    foreach ($RecAnimes as $a) {
      if($counter == $numRec)
        break;
      else{
        $recArray[]=array("title"=>$a->recommendation, "url"=>$a->recUrl);
        $counter++;
      }
    }
    return $recArray;
  }
}
