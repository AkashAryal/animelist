<?php namespace App\CustomClasses\Anime;
use Jikan\MyAnimeList\MalClient;
use Jikan\Jikan;
require base_path().'/vendor/autoload.php';

class Anime extends Jikan
{
  private $jikan;
  private $search;
  private $firstAnime;
  private $firstAnimeObject;

  public function __construct(String $anime){
    $this->jikan = new Jikan;
    $this->search = $this->jikan->AnimeSearch("$anime",1);

   // $this->jikan = new MalClient;
    //$this->search = $this->jikan->getAnimeSearch(
    //(new \Jikan\Request\Search\AnimeSearchRequest("$anime"))
  //);
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
  public function getRecommendations(){
    $recAnimesObj = $this->jikan->AnimeRecommendations($this->firstAnime->getMalId());

    $animeArray=[];

    foreach ($recAnimesObj as $key => $value) {


        $animeArray[] = array("title"=>$value->getTitle(), "url"=>$value->getUrl());

    }
    return $animeArray;
  }

}
?>
