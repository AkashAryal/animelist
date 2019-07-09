@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @include('inc.alert');
    </div>
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card formcard">


                <div class="card-header formcard">Search User</div>

                <div class="card-body">
                    <form method="POST" action="{{ URL::route('search.search') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="user" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} forminput" name="user" value="{{ old('username') }}" required autofocus>
                                  <br />
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                      <input type="submit" class="btn btn-primary forminput" value="submit" />
                                    </div>
                                </div>
                              </div>
                            </div>
                          </form>
                         </div>
                        </div>
                       </div>
                     </div>
                   </div>


<!--{!! Form::open(['url' => 'search/search']) !!}
  {{ Form::label('user', 'User') }}
  {{ Form::text('user', NULL, array('placeholder'=>'User', 'class'=>'form-control forminput')) }}
  {{ Form::submit('Submit', array('class'=>'btn btn-primary forminput')) }}
{!! Form::close() !!}
-->
@endsection
