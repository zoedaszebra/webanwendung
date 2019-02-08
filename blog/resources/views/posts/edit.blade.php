@extends('layouts.app')

@section('content')

    <h1>Blogbeitrag bearbeiten</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
          {{Form::label('title', 'Titel')}}
          {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titel'])}}
        </div>
        <div class="form-group">
          {{Form::label('body', 'Text')}}
          {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text'])}}
        </div>
        <div class="form-group">
          {{Form::file('cover_image')}}
        </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Speichern', ['class'=>'btn btn-info'])}}
    {!! Form::close() !!}
    
@endsection
