<?php namespace App\CustomClasses\Anime;

use Jikan\MyAnimeList\MalClient;
use Jikan\Jikan;

class Anime extends Jikan
{
   private $jikan;

   public static function getLargeCover(String anime){
     $jikan = new Jikan;
     $search = $jikan->AnimeSearch("$anime",1);
     $firstResult = $search->getResults()[0];
     $picUrl = $jikan->AnimePictures($firstResult->getMalId())[0]->getLarge();
     return $picUrl;
   }

   public static function getSynopsis(String anime){
     $jikan = new Jikan;
     $search = $jikan->AnimeSearch("$animeName",1);
     $firstResult = $search->getResults()[0];
     $synopsis=addslashes($jikan->Anime($firstResult->getMalId())->getSynopsis());
     return $synopsis;
   }

   public static function getRecommendation(String anime, int howMany){
     
   }
   public static function testF(){
     echo "test";
   }
}
?>
