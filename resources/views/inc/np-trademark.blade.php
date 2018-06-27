
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

    <div class="form-group">
        {{FORM::label('date', 'Date of Registration')}}
        {{FORM::date('date', '',['class'=>'form-control'])}}
    </div>

    <div class="form-group">
    {{FORM::label('img', 'Logo Image')}}
        <input type="file">
    </div>
    <div>
        {{FORM::submit('Create Project', ['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}

@endsection