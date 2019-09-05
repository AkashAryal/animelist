@if(Session::has('form') && session('form')=="true")
<section id="addAnimeForm" class="card formcard sticky  mx-5" style="background-color: #10314f">
  <div class="card-header formcard" style="background-color: #10314f">Add Anime</div>
  <section class="card-body">
    {!! Form::open(['url' => 'list/submit', 'onsubmit'=>'localStorage.setItem("isAddAnimeFormActive",false);']) !!}
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
  </section>
</section>
@endif
