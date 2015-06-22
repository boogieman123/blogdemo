@extends('admin.blog.template')

@section('form')
	<div class="row">
		<div class="col-sm-12">
			<h2>Add blog post</h2>
		</div>
	</div>
	{!! Form::open([
	    'route' => 'blog.store'
	]) !!}
@stop
