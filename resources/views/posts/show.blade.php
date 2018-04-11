@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2>{{ $post->title }}</h2>
            <div><strong>Author:</strong> {{ $post->author->name }}</div>
            <p><strong>Published:</strong> {{ $post->created_at->diffForHumans() }}</p>
            <p>{{ $post->content }}</p>
        </div>
    </div>
    </div>
@endsection