<?php use Jikan\MyAnimeList\MalClient;use Jikan\Jikan;use \App\Http\Controllers\PictureUrlController;   $jikan = new Jikan;?>
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5 col-lg-5">
      @include('inc.alert')
      <img src="" id="cover" class="img-fluid sticky" height="350" width="350"></img>

    </div>
    <div class="col-md-7 col-lg-7">
      <h1 style="color: white; text-align: right">{{ session('user') }}</h1>
      <?php $counter=0;?>
          @if(count($animes) >0)
            <table>
              <tr>
                <th>Anime</th>
                <th>Status</th>
                <th>Updated At</th>
              </tr>
              @foreach($animes as $anime)
              <tr>
                <?php
                  $animeName = $anime->anime;
                  if(Session::has($animeName)){
                    $pics = session($animeName);
                  }
                  elseif(PictureUrlController::inList($animeName)){
                    //add to session var
                    $temp1=PictureUrlController::getUrl($animeName);
                    session([$animeName => $temp1]);
                  }else {
                    //below
                    $search = $jikan->AnimeSearch("$animeName",1);
                    $firstResult = $search->getResults()[0];
                    $pics = $jikan->AnimePictures($firstResult->getMalId())[0]->getLarge();
                    //add to database
                    PictureUrlController::add($animeName,$pics);
                    //add to sesion var
                    session([$animeName => $pics]);
                  }
                ?>
                <td onmouseover="document.getElementById('cover').src='{{session($animeName)}}';" onmouseout="document.getElementById('cover').src='';">{{$anime->anime}}</td>
                <td><?php if($anime->completed ==1)echo "Completed";else echo "Plan To Watch" ?></td>
                <td>{{$anime->updated_at}}</td>
              </tr>
              <?php $counter++;?>
              @endforeach
            </table>
          @else
              <ul class="list-group">
                <li class="list-group-item">Nothing!</li>
              </ul>
          @endif
    </div>
  </div>
</div>
@endsection
