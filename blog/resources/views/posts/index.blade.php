@extends('layouts.app')

@section('content')

    <h1 style="margin-bottom:25px">Blogbeiträge</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
          <div class="well">
            <div class="row">
              <div class="col-md-4 col-sm-4 mb-3">
                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
              </div>
              <div class="col-md-8 col-sm-8 mb-3">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Veröffentlicht am {{$post->created_at}} von {{$post->user->name}}</small>
              </div>
            </div>
          </div>
        @endforeach
        {{$posts->links()}}
    @else
      <p>Keine Beiträge gefunden.</p>
    @endif
    
@endsection
