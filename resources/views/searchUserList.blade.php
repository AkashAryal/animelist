<?php use App\CustomClasses\Anime\Anime; use Jikan\MyAnimeList\MalClient;use Jikan\Jikan;use \App\Http\Controllers\PictureUrlController; use \App\Http\Controllers\AnimeRecommendationController;  $jikan = new Jikan;?>
@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-lg-6">
      @include('inc.alert')
      @include('inc.addAnimeForm')
      <div class="container sticky">
        <div class="row">
          <div class="col-md-7 col-lg-7">
            <img src="" id="cover" class="img-fluid mb-2" height="300" width="350"></img>
            <div id="rec">

            </div>
          </div>
          <div class="col-md-5 col-lg-5" id="synInfo">
            <!-- jQuery add synopsis information here-->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6">
      <h1 style="color: white; text-align: right">{{ session('user') }}'s list</h1>
      <?php $counter=0;$counter2=0;?>
      @if(count($animes) >0)
      <table>
        <tr>
          <th>Anime</th>
          <th>Status</th>
          <th>Updated At</th>
        </tr>
        @foreach($animes as $anime)
        <?php
        $animeName = $anime->anime;
        if(Session::has($animeName."numOfRec")){
          $defaultNumRec=(int)session($animeName."numOfRec");
          //echo session($animeName."numOfRec");
        }else{
          $defaultNumRec=3;
        }

        $pics="";
        $synopsis="";
        $recommendations;

        if(Session::has($animeName)){
          $recommendations=AnimeRecommendationController::getRecommendations($defaultNumRec, $animeName);
          $pics=session($animeName)['pics'];
          $synopsis=session($animeName)['synopsis'];
          //var_dump($recommendations);
        }elseif(PictureUrlController::inList($animeName)){
          $pics=PictureUrlController::getUrl($animeName); //get cover image url from db
          $synopsis=PictureUrlController::getSyno($animeName);
          $recommendations=AnimeRecommendationController::getRecommendations($defaultNumRec, $animeName);
        }else{
          $Anime = new Anime("$animeName"); //create helper Anime class
          $pics = $Anime->getLargeCover(); //get cover image url
          $synopsis = $Anime->getSynopsis(); //get anime synopsis
          $recAnimesObj = $Anime->getRecommendations();

          PictureUrlController::add($animeName,$pics,$synopsis); //add to database
          AnimeRecommendationController::addRecommendations($animeName,$recAnimesObj); //add to database
          //ATTENTON: iF YOU CHANGe THS LNE BELOW, CHANGE THE SESSOMn ABOVE;
          $counter3=0;
          $recommendations=[];
          foreach ($recAnimesObj as $key => $value) {
            if($counter3 == $defaultNumRec)
            break;
            else{
              $recommendations[] = array("title"=>$value['title'], "url"=>$value['url']);
              $counter3++;
            }
          }

        }
        session([$animeName => array("pics" => $pics, "synopsis"=>$synopsis, "recommendations"=>$recommendations)]); //add to session var
        ?>
        <tr>
          <?php $p="pics"; $s="synopsis"; $r="recommendations"; $t='title'; $u="url";
          $elem="<div class='card-header formcard'>Synopsis</div><div class='card-body formcard' style='border-bottom: 1px solid #7cb5ca;'><p id ='synopsis'>";?>

            <td class="AnimeNameCell" onmousedown="if(window.leave==true)window.leave=false;else {window.leave=true;}"
            onmouseover="if(window.leave==true && (localStorage.getItem('isAddAnimeFormActive')=='false' || localStorage.getItem('isAddAnimeFormActive')==null) )
            {document.getElementById('cover').src='{{session($animeName)[$p]}}';
            appendSynContainer();
            document.getElementById('synopsis').innerHTML='{{session($animeName)[$s]}}';
            localStorage.setItem('animeR','<?php echo $anime->anime;?>');
            createRecBox();
            document.getElementById('rList').innerHTML='<?php if(count(session($animeName)) ==3){
              $rec=session($animeName)[$r];
              foreach ($rec as $key => $value) {
                echo "<a href=".$value[$u].">".$value[$t]."</a><br>";
              }
            } else echo "N/A";?>';}"
            onmouseout="if(window.leave==true){document.getElementById('cover').src='';removeHoverContainers();localStorage.setItem('animeR','');}">{{$anime->anime}}</td>

            <td><?php if($anime->completed ==1)echo "Completed";else echo "Plan To Watch" ?></td>
            <td>{{$anime->updated_at}}</td>
            <form method="POST" action="{{ URL::route('list.remove') }}" id="{{ $counter }}"  style="display: none;">
              <input form="{{ $counter }}" type="hidden" name="anime" value="{{$anime->anime}}"></input>
            </form>

            <form method="POST" action="{{ URL::route('list.complete') }}" id="com{{ $counter }}"  style="display: none;">
              <input form="com{{ $counter }}" type="hidden" name="anime" value="{{$anime->anime}}"></input>
            </form>

            <form method="POST" action="{{ URL::route('list.setRecNum') }}" id="rec{{ $anime->anime }}" style="display: none;">
              <input form="rec{{ $anime->anime }}" type="hidden" name="anime" value="{{$anime->anime}}"></input>
              <input id="changeNumRec{{$anime->anime}}" form="rec{{ $anime->anime }}" type="hidden" name="rec" value="<?php echo $defaultNumRec;?>"></input>
            </form>
              </tr>
              <?php $counter++;$counter2++;?>
              @endforeach
            </table>
            @else
            <ul class="list-group">
              <li class="list-group-item">Nothing!</li>
            </ul>
            @endif
          <div class="row">
            <div class="col-md-10 col-lg-10">

            </div>
            <div class="col-md-2 col-lg-2">

            </div>
          </div>
        </div>
      </div>
      @endsection
