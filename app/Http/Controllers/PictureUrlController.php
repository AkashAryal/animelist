<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\pictureUrl;
class PictureUrlController extends Controller
{
  public static function inList($animeName){
    if(pictureUrl::where('anime',$animeName)->count()>0)
    {
      return true;
    }else {
      return false;
    }
  }

  public static function getUrl($animeName){
    return pictureUrl::where('anime',$animeName)->value('url');
  }
  public static function getSyno($animeName){
    return pictureUrl::where('anime',$animeName)->value('synopsis');
  }

  public static function add($animeName,$pics,$syno){
    $pUrl = new pictureUrl;

    $pUrl->anime = $animeName;
    $pUrl->url = $pics;
    $pUrl->synopsis = $syno;
    $pUrl->save();
  }
}
