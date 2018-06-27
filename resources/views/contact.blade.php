
@extends('layouts.app')

@section('content')
<h1>Contacts</h1> 
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{FORM::label('name', 'Name')}}
        {{FORM::text ('name', '', ['class'=>'form-control','placeholder'=>'Enter Name'])}}   {{-- name, value, associative array of opttions for additional attribute --}}
    </div>
    <div class="form-group">
        {{FORM::label('email', 'E-Mail Address')}}
        {{FORM::email ('email', '',['class'=>'form-control','placeholder'=>'example@gmail.com'])}}
    </div>
    <div class="form-group">
        {{FORM::label('message', 'Message')}}
        {{FORM::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter Message'])}}
    </div>
    <div>
        {{FORM::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection