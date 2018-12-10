@extends('layouts.app')

@section('content')

@include('inc.alert')
{!! Form::open(['url' => 'search/search']) !!}
  {{ Form::label('user', 'User') }}
  {{ Form::text('user', NULL, array('placeholder'=>'User', 'class'=>'form-control forminput')) }}
  {{ Form::submit('Submit', array('class'=>'btn btn-primary forminput')) }}
{!! Form::close() !!}

@endsection
