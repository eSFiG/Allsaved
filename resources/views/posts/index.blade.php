@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <section>
        <header class="major">
            <h2>Posts</h2>
        </header>
        <div class="posts">
            @foreach ($posts as $post)
                <article>
                    <h3>{{ $post->title }}</h3>
                    <ul class="actions">
                        <li><a href="{{ route('posts.show', $post) }}" class="button">More</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
