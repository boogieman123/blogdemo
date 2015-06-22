@extends('app')

@section('content')
<div class="container">
	<div class="row">

        @foreach($posts as $post)
            <div class="box">
                <div class="col-lg-12 text-left">
                    <h2>{{ $post->title }}
                    <br>
                    <small>{{ $post->user->name }} posted on {!! $post->created_at . ($post->created_at != $post->updated_at ? ' Last updated ' . $post->updated_at : '') !!}</small>
                    </h2>
                </div>
                <div class="col-lg-12">
                    <p>{!! $post->description !!}</p>
                </div>
                <div class="col-lg-12 text-left">
                	<a href="/blog/{!! $post->slug !!}" class="btn btn-info">Read more</a>
                    @if (Auth::check() && Auth::user()->isAdmin())
                        <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['blog.destroy', $post->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endif
                    <hr>
                </div>
            </div>
        @endforeach
     
        <div class="col-lg-12 text-center">
            {!! $links !!}
        </div>

    </div>
</div>
@endsection
