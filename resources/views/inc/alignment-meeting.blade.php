
@extends('layouts.app')

@section('content')
<h1>Alignment Meeting</h1> 
{!! Form::open(['url' => 'schedule/submit']) !!}
    <div class="form-group">
        {{FORM::label('name', 'Name')}}
        {{FORM::text ('name', '', ['class'=>'form-control','placeholder'=>'Enter Name'])}}   {{-- name, value, associative array of opttions for additional attribute --}}
    </div>
    <div class="form-group">
        {{FORM::label('agenda', 'Agenda')}}
        {{FORM::textarea ('agenda', '',['class'=>'form-control','placeholder'=>'Enter Agenda'])}}
    </div>
    <div class="form-group">
        {{FORM::label('venue', 'Venue')}}
        {{FORM::radio('venue', '',['class'=>'form-control','placeholder'=>'Enter Message'])}}
    </div>
    <div>
        {{FORM::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection