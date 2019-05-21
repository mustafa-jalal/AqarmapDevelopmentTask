
  
@extends('layouts.main')

@section('title', 'AqarMap Blog')

@section('content')
  <header class="masthead" style="background-image: url({{  asset('img/post-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $article->title }}</h1>
            <span class="meta">
              on {{ $article->created_at }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{{ $article->content }}</p>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <div style='width: 30%;margin: auto;'>
  @foreach($article->comments as $comment)
    <span style="background-color: #ccc;padding: 4px">
      <b>
      {{ $comment->username }}
    </b>
       </span>
      <br>
    {{ $comment->comment }}<br>
    <small>on {{ $comment->created_at }}</small><br>
  @endforeach


  <br><br>
    Do Have a Comment ?
    <form action="{{ route('comment.store') }}" method="post">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Name</span>
        </div>
        <input type="text" class="form-control" placeholder="type your name" aria-label="Username" aria-describedby="basic-addon1" name='username' required>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Comment</span>
        </div>
        <textarea rows="5" cols="50" name='comment' class="form-control" aria-label="With textarea" required></textarea>
      </div>
      <div class="input-group mb-3" style="margin-top: 8px;">
        <div class="input-group-prepend">
          <input type="submit" class="btn btn-outline-secondary" value="submit">
        </div>
      </div>
      <input type="hidden" name="article" value="{{ $article->id }}">
      @csrf
  </form>
  <hr>
@endsection

