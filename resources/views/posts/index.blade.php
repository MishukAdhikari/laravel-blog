@extends('layouts.master')

@section('content')

      <div class="col-sm-8 blog-main">

        @foreach($posts as $post)

          <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>
              {{ $post->body }}
            </p>
          </div><!-- /.blog-post -->

        @endforeach

        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

      </div><!-- /.blog-main -->

@endsection

@section('footer')

<script src="/assets/test.js"></script>

@endsection