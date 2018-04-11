@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Posts</h2>
            <div class="col-md-12">
                @foreach($posts as $post)
                    <div class="card mb-2">
                        <div class="card-header">
                            {{ $post->title }}
                            <div class="text-right">
                                <a href="/posts/{{ $post->id }}">View full post..</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection