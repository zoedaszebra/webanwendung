@extends('layouts.app')

@section('content')

    <h1>Neuer Blogbeitrag</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
          {{Form::label('title', 'Titel')}}
          {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titel'])}}
        </div>
        <div class="form-group">
          {{Form::label('body', 'Text')}}
          {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
          {{Form::file('cover_image')}}
        </div>
    {{Form::submit('Speichern', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection
