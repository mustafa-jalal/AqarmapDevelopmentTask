
@extends('layouts.main')

@section('title', 'AqarMap Blog')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>AqarMap Blog</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  category :
  <form action="{{ route('articles.bycat') }}" method="get">
    <select>
      @foreach($categories as $cat)
      <option value="{{ $cat->id }}"> {{ $cat->title }} </option>
    @endforeach
  </select>
    <input type="hidden" id="cat" name="cat" value="1">
    <input type="submit">
</form>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @if(count($data) > 0)
        @foreach($data as $article)
        <div class="post-preview">
          <a href="{{ route('article.show',$article->id) }}">
            <h2 class="post-title">
              {{ $article->title }}
            </h2>
          </a>
          <p class="post-meta">
                {{ $article->created_at }}
            </p>
        </div>


        <hr>
        @endforeach
        @else
        <center>There is no articles at this time , see you soon </center>
        @endif
        <!-- Pager -->

      </div>
    </div>
  </div>

  <hr>

