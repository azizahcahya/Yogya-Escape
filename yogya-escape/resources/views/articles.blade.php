@extends('layouts.main')

@section('bootstrap')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('styling')
<link rel="stylesheet" href="<?php echo asset('css/style-article.css')?>" type="text/css">  
@endsection

@section('container')
<div class="crop">
    <img src="./asset/image-2.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <div class="text">
        <div class="text">
            <h2>Yogya Escape</h2>
            <h3>A website that provides tour guide for the Yogyakarta region.</h3>
        </div>
      </div>
    </div>
</div>
@foreach ($posts as $post)
    
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="/articles/{{$post->id}}">
                    <h2 class="post-title">{{$post->nama}}</h2>
                    {{-- <p class="text-truncate">{!! $post->deskripsi !!}</p> --}}
                    <h4 class="post-subtitle" style="color: black">{!!Str::limit($post->deskripsi, 72)!!}</h4>
                    {{-- <h3 class="post-subtitle">Candi Prambanan merupakan candi Hindu terbesar di Dunia</h3> --}}
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Me</a>
                    on April 08, 2022
                </p>
            </div>
            <hr class="my-4" />
            <!-- Pager-->
        </div>
    </div>
</div> 
@endforeach 
{{-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-success text-uppercase" href="#!">Older Posts →</a></div>   --}}
@endsection

{{-- Source body: https://github.com/startbootstrap/startbootstrap-clean-blog --}}