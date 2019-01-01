<?php namespace App\CustomClasses\Anime;

use Jikan\MyAnimeList\MalClient;
use Jikan\Jikan;

class Anime extends Jikan
{
  private $jikan;
  private $search;
  private $firstAnime;
  private $firstAnimeObject;

  public function __construct(String $anime){
    $this->jikan = new Jikan;
    $this->search = $this->jikan->AnimeSearch("$anime",1);
    $this->firstAnime = $this->search->getResults()[0];
    $this->firstAnimeObject = $this->jikan->Anime($this->firstAnime->getMalId());
  }
  public function getLargeCover(){
    return $this->jikan->AnimePictures($this->firstAnime->getMalId())[0]->getLarge();
  }

  public function getSynopsis(){
    return addslashes($this->firstAnimeObject->getSynopsis());
  }

  /*
  how to retrieve;
    session($animeName)['recommendations'][0]['title']
  */
  public function getRecommendations(int $howMany){
    $recAnimesObj = $this->jikan->AnimeRecommendations($this->firstAnime->getMalId());

    $animeArray=[];
    $counter=0;
    foreach ($recAnimesObj as $key => $value) {
      if($counter == $howMany)
      break;
      else{
        $animeArray[] = array("title"=>$value->getTitle(), "url"=>$value->getUrl());
        $counter++;
      }
    }
    return $animeArray;
  }

}
?>
