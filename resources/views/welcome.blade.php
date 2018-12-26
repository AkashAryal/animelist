<?php use \App\Http\Controllers\QuotesController; ?>
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3 col-lg-3">
    </div>
    <div class="col-md-6 col-lg-6">
      <center>
      @if(Auth::check())
        <h1 style="font-size: 100px; color: white;">Welcome</h1>
        <h2 style="font-size: 100px; color: white;">{{Auth::user()->username}}</h2>
      @else
        <h1 style="color: white;">{{QuotesController::getRandQuote()}}</h1>
      @endif
    </center>
    </div>
    <div class="col-md-3 col-lg-3">
    </div>
  </div>
</div>
@endsection
