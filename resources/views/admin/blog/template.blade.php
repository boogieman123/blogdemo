@extends('app')

@section('head')
	<link media="all" type="text/css" rel="stylesheet" href="/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css">
@stop

@section('content')
<div class="container">
	<div class="row">	
		<div class="col-sm-12">
			@yield('form')
			
			@if(session()->has('postStored'))
				<div class="alert alert-success">
			        {{ session('postStored') }}
			    </div>
			@endif

			@if($errors->any())
			    <div class="alert alert-danger">
			        @foreach($errors->all() as $error)
			            <p>{{ $error }}</p>
			        @endforeach
			    </div>
			@endif
			
			<div class="form-group">
			    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
			    {!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('slug', 'Slug:', ['class' => 'control-label']) !!}
			    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
			    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
			    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
			</div>

			{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
			<a href="{{ route('blog.index') }}" class="btn btn-success">Back</a>
			{!! Form::close() !!}			
		</div>
	</div>
</div>
@stop
