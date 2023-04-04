@extends('layouts.main')
@section('container')
    <article class="bg-white my-4 p-4 rounded-lg mb-6 max-w-screen-md justify-center mx-auto text-justify">
        <h3 class="text-xl font-medium mb-2 hover:underline text-center">{{ $post->tittle }} </h3>
        <p class="text-center">By. <a class="text-blue-600"
                href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <span class="text-blue-600"><a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
        </p>
        <img class="my-3" src="https://source.unsplash.com/1300x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" />

        {{-- <h5 class="text-base font-medium mb-2">{{ $post->author }}</h5> --}}
        <p class="my-5">{!! $post->body !!}</p>
    </article>
    <a href="/posts" class="bg-white py-2 px-4 rounded hover:font-medium">back to posts</a>
@endsection
