
@extends('layouts.app')

@section('content')
{!! Form::open(['url' => 'reserve/submit']) !!}
    <div class="form-group">
        {{FORM::label('name', 'Name of Business ')}}
        {{FORM::text ('name', '', ['class'=>'form-control','placeholder'=>'Enter Name'])}}   {{-- name, value, associative array of opttions for additional attribute --}}
    </div>
    <div class="form-group">
    {{FORM::label('agenda', 'Description')}}
        {{FORM::textarea ('agenda', '', ['class'=>'form-control','placeholder'=>'Enter Name'])}}
        
    </div>
    <div class="form-group">
        {{FORM::label('time', 'Type of Business')}}
        {{FORM::text('business', '',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{FORM::label('date', 'Location')}}
        {{FORM::text('loc', '',['class'=>'form-control'])}}
    </div>
    <div>
        {{FORM::submit('Create Project', ['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>
@endsection