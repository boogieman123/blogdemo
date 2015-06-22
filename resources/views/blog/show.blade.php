@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="text-left">{{ $post->title }}
				<br>
				<small>{{ $post->user->name }} posted on {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</small>
				</h2>
				<hr>
				{!! $post->description !!}<br>
				{!! $post->body !!}
				<hr>
				<a href="{{ route('blog.index') }}" class="btn btn-info">Back</a>
			</div>
		</div>
	</div>
</div>	

@stop
