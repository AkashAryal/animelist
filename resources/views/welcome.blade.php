<?php use \App\Http\Controllers\QuotesController; ?>
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3 col-lg-3">
    </div>
    <div class="col-md-6 col-lg-6">
      <center>
        <div class="card-body formcard" style="border-bottom: 1px solid #7cb5ca; background-color:#0e273f; opacity: 0.75">

      @if(Auth::check())
        <h1 style="font-size: 100px; color: white;">Welcome</h1>
        <h2 style="font-size: 100px; color: white;">{{Auth::user()->username}}</h2>
      @else
        <h1 style="color: white; font-size: 1.3rem;">{{QuotesController::getRandQuote()}}</h1>
      @endif
      </div>
    </center>
    </div>
    <div class="col-md-3 col-lg-3">
    </div>
  </div>
</div>
@endsection
