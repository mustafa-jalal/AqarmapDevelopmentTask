  
@extends('layouts.admin')

@section('content')
@if ($errors->any())
    <div style="color:#f00;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Page Content -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('admin.articles.store') }}" method="post">
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Create New Article</h1>
                    </div>
                </div>
                  <label for="male"> Title </label>

                <div class="input-group mb-3">
                    <input type="text"  name='title' class="form-control" aria-label="title" aria-describedby="basic-addon1" required>
                </div>
                <label for="male"> Content </label>
                <div class="input-group">
                    <textarea  rows="20" cols="80" class="form-control" name='content' aria-label="Article Content" required></textarea>
                </div>
            </div><br>
            <select style="margin-left: 15px;" name='category'>
                
                     <option value='none'> -- category -- </option>

                @foreach($categories as $category)
                    <option value='{{ $category->id  }}'> {{ $category->title }} </option>
                @endforeach
            </select>
            <br><br>
            <input style="margin-left: 15px;" type="submit" value='create' class="btn btn-primary">
        </div>
        @csrf
    </form>
@endsection
