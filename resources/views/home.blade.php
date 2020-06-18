<?php use \App\Http\Controllers\QuotesController; ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card formcard">
                <div class="card-header formcard">Dashboard</div>

                <div class="card-body formcard" style="border-bottom: 1px solid #7cb5ca;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="card-body formcard" style="border-bottom: 1px solid #7cb5ca;">
                    {{QuotesController::getRandQuote()}}
                   <?php echo "hello" ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
