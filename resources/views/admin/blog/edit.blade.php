@extends('admin.blog.template')

@section('form')
	<div class="row">
		<div class="col-sm-12">
			<h2>Edit blog post</h2>
		</div>
	</div>
	{!! Form::model($post, ['route' => ['blog.update', $post->id], 'method' => 'put']) !!}
@stop
