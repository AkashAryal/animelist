<?php use Jikan\MyAnimeList\MalClient;use Jikan\Jikan;   $jikan = new Jikan;?>
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5 col-lg-5">
      @if(Session::has('form') && session('form')=="true")
      <section class="card formcard" style="background-color: #10314f">
      <div class="card-header formcard" style="background-color: #10314f">Add Anime</div>
      <section class="card-body">
        {!! Form::open(['url' => 'list/submit']) !!}
        <div class="form-group">
          {{ Form::label('anime', 'Anime') }}
          {{ Form::text('anime', NULL, array('placeholder'=>'Anime', 'class'=>'form-control forminput')) }}
      </div>
      <div class="form-group">
        {{ Form::label('completed', 'Completed') }}
        {{ Form::checkbox('completed', 'Completed', array('class'=>'form-control forminput')) }}
      </div>
      <div class="form-group">
        {{ Form::label('updated_at', 'Completed/Updated At') }}
        <input type="text" name="updated_at" value="{{date('Y-m-d H:i:s')}}" style="background-color: #10314f;" class="form-control forminput" readonly>
      </div>
      <center><div>
        {{ Form::submit('Submit', array('class'=>'btn btn-primary forminput')) }}
      </div></center>
      {!! Form::close() !!}
      @endif
      @include('inc.alert')
    </section>
    </section>
    <img src="" id="cover" class="img-fluid sticky" height="350" width="350"></img>
  </div>
    <div class="col-md-7 col-lg-7">
      <h1 style="color: white; text-align: right"><?php if(Session::has('user'))echo session('user')."'s List"; else echo Auth::user()->username."'s list";?></h1>
      <?php $counter=0;$counter2=0;?>
          @if(count($animes) >0)
            <table>
              <tr>
                <th>Anime</th>
                <th>Status</th>
                <th>Updated At</th>
                <th>Remove</th>
                <th>Finished</th>
              </tr>
              @foreach($animes as $anime)
              <?php
              $animeName = $anime->anime;
                $search = $jikan->AnimeSearch("$animeName",1);
                $firstResult = $search->getResults()[0];
                $pics = $jikan->AnimePictures($firstResult->getMalId())[0]->getLarge();
              ?>
              <tr>
                <td onmouseover="document.getElementById('cover').src='{{$pics}}';" onmouseout="document.getElementById('cover').src='';">{{$anime->anime}}</td>
                <td><?php if($anime->completed ==1)echo "Completed";else echo "Plan To Watch" ?></td>
                <td>{{$anime->updated_at}}</td>
                <td><button type="button" class="addButton btn btn-default" onclick="document.getElementById({{$counter}}).submit()" style="background-color: Transparent;">
                    <i class="fa fa-close"></i></button></td>
                <td><button type="button" class="addButton btn btn-default" onclick="document.getElementById('com{{$counter}}').submit()" style="background-color: Transparent;">
                    <i class="fa fa-check"></i></button></td>
              </tr>

                <form method="POST" action="{{ URL::route('list.remove') }}" id="{{ $counter }}"  style="display: none;">
                    <input form="{{ $counter }}" type="hidden" name="anime" value="{{$anime->anime}}"></input>
                </form>

                <form method="POST" action="{{ URL::route('list.complete') }}" id="com{{ $counter }}"  style="display: none;">
                    <input form="com{{ $counter }}" type="hidden" name="anime" value="{{$anime->anime}}"></input>
                </form>

              <?php $counter++;$counter2++;?>
              @endforeach
            </table>
          @else
              <ul class="list-group">
                <li class="list-group-item">Nothing!</li>
              </ul>
          @endif

        <div class="float-right">
          <br />
          <button type="button" class="addButton btn btn-default btn-circle btn-xl" onclick="document.getElementById('createForm').submit()"><i class="fa fa-plus-circle" style="font-size:40px;"></i>
        </div>
          <form id="createForm" action="{{ url('/createForm') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
    </div>
        <div class="row">
          <div class="col-md-10 col-lg-10">

          </div>
          <div class="col-md-2 col-lg-2">

        </div>
    </div>
  </div>
</div>
@endsection
