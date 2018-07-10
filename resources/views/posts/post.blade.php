@foreach($posts as $post)

	<div class="blog-post">
		<h2 class="blog-post-title">{{ $post->title }}</h2>
		<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

		<p>
		  {{ $post->body }}
		</p>
	</div><!-- /.blog-post -->

@endforeach