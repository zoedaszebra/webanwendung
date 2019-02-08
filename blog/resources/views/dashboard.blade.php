@extends('layouts.app')

@section('content')
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><h2>Dashboard</h2></div>

            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
              @endif

              <a href="/posts/create" class="btn btn-success">Neuer Blogeintrag</a>
              <h3 style="margin-top: 25px">Deine Blogbeiträge</h3>
              @if(count($posts) > 0)
                <table class="table table-striped">
                  <tr>
                    <th>Titel</th>
                    <th></th>
                    <th></th>
                  </tr>
                  @foreach($posts as $post)
                    <tr id="table-row-{{$post->id}}">
                      <td>{{$post->title}}</td>
                      <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-info">Bearbeiten</a></td>
                      <td>
                        {!!Form::open(['onsubmit' => 'return false', 'class' => 'deleteButton'])!!}
                        {{Form::hidden('postId', $post->id, ['class' => 'postId'])}}
                        {{Form::submit('Löschen', ['class' => 'btn btn-outline-danger'])}}
                        {!!Form::close()!!}
                      </td>
                    </tr>
                  @endforeach
                </table>
              @else
                <p>Du hast keine Beiträge.</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection
