@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                {{-- <article> --}}
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all
                    my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                {{-- <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a> --}}
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"
                            class="align-text-bottom"></span> DELETE</button>
                </form>
                {{-- <p>By : <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p> --}}
                {{-- <h5>{{ $post->author }}</h5> --}}
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                {{-- </article> --}}
                <a href="/dashboard/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
