@extends('layouts.main')
@section('container')
    <p class="text-center text-xl font-semibold bg-white p-3">{{ $tittle }}</p>
    @foreach ($posts as $post)
        <article class="bg-white my-4 p-4 rounded-lg">
            <p class="text-xl font-medium mb-2 hover:underline">
                <a href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a>
            </p>
            <p class="text-base font-medium mb-2">By 
                <a class="text-blue-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <span
                    class="text-blue-600"><a
                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></span></p>
            <p class="text-sm text-justify">{{ $post->except }}</p>
            <a class="text-blue-600 font-medium" href="/posts/{{ $post->slug }}">Read More...</a>
        </article>
    @endforeach
@endsection
