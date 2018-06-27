<div class="row">
<h1>Meeting Room Booking</h1> 
{!! Form::open(['url' => 'reserve/submit']) !!}
    <div class="form-group">
        {{FORM::label('name', 'Name')}}
        {{FORM::text ('name', '', ['class'=>'form-control','placeholder'=>'Enter Name'])}}   {{-- name, value, associative array of opttions for additional attribute --}}
    </div>
    <div class="form-group">
    {{FORM::label('agenda', 'Agenda')}}
        <div id="editor" class="form-control" name="agenda" value="Agenda" data-placeholder="Enter Agenda">
        {{FORM::textarea ('agenda', '', ['id'=>'editor','class'=>'form-control','placeholder'=>'Enter Name'])}}
        </div>
    </div>
    <div class="form-group">
        {{FORM::label('time', 'Time')}}
        {{FORM::time('time', '',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{FORM::label('date', 'Date')}}
        {{FORM::date('date', '',['class'=>'form-control'])}}
    </div>
    <div>
        {{FORM::submit('Reserve', ['class'=>'btn btn-primary'])}}
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
</div>