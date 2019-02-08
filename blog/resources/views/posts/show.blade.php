@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
      <br>
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        <br><br>
    <div>
      {!!$post->body!!}
    </div>
    <hr>
        <p><small> Veröffentlich am {{$post->created_at}} von {{$post->user->name}}<br></p>
    <hr>

        @if(!Auth::guest())
          @if(Auth::user()->id == $post->user_id)
    <div class="row">
      <div class="col-md-2 py-2">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Bearbeiten</a>
      </div>
      <div class="col-md py-2">
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Löschen', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      </div>
    </div>
          @endif
        @endif
    <div class="mt-2">
      <a href="/posts" class="btn btn-outline-info">Zurück</a>
        <br><br>
    </div>

@endsection
