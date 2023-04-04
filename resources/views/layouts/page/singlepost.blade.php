@extends('layouts.main')
@section('container')
    <article class="bg-white my-4 p-4 rounded-lg mb-6 max-w-screen-md justify-center mx-auto">
        <h3 class="text-xl font-medium mb-2 hover:underline">{{ $post->tittle }} </h3>
        <p>By. <a class="text-blue-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <span
                class="text-blue-600"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
        </p>
        {{-- <h5 class="text-base font-medium mb-2">{{ $post->author }}</h5> --}}
        {!! $post->body !!}
    </article>
    <a href="/posts" class="bg-white py-2 px-4 rounded hover:font-medium">back to posts</a>
@endsection
