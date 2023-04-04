@extends('layouts.main')
@section('container')
    <p class="text-center text-xl font-semibold bg-white p-3 shadow-lg">{{ $tittle }}</p>
    @if ($posts->count())
        <div class="flex justify-center my-3 text-center">
            <div class="block rounded-lg bg-white shadow-lg">
                <a href="#" data-te-ripple-init data-te-ripple-color="light">
                    <img class="rounded-t-lg" src="https://source.unsplash.com/1300x200?{{ $posts[0]->category->name }}"
                        alt="{{ $posts[0]->category->name }}" />
                </a>
                <div class="p-6">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
                        <a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->tittle }}</a>
                    </h5>
                    <p class="text-base font-medium mb-2">By
                        <a class="text-blue-600"
                            href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                        <span class="text-blue-600"><a
                                href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></span>
                        <span class="text-xs text-gray-500 font-normal">{{ $posts[0]->created_at->diffForHumans() }}</span>
                    </p>
                    <p class="mb-4 text-base text-neutral-600 ">
                        {{ $posts[0]->except }}
                    </p>
                    <a href="/posts/{{ $posts[0]->slug }}"
                        class="bg-blue-500 text-white font-medium p-3 text-sm rounded-lg">Read More</a>
                </div>
            </div>
        </div>
    @else
        <p class="text-center text-xl font-semibold bg-white p-3">No Post in that time</p>
    @endif
    <div class="container my-3">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($posts->skip(1) as $post)
                <div class="flex justify-center">
                    <div class="block rounded-lg bg-white shadow-lg ">
                        <div class="absolute p-3 bg-black text-white">
                            {{ $post->category->name }}
                        </div>
                        <a href="/posts/{{ $post->slug }}">
                            <img class="rounded-t-lg"
                                src="https://source.unsplash.com/1000x500?{{ $post->category->name }}"
                                alt="{{ $post->category->name }}" />
                        </a>
                        <div class="p-6">
                            <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
                                {{ $post->tittle }}
                            </h5>
                            <p class="text-sm font-medium mb-2">By
                                <a class="text-blue-600"
                                    href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                                <span
                                    class="text-xs text-gray-500 font-normal">{{ $post->created_at->diffForHumans() }}</span>

                            </p>
                            <p class="mb-4 text-base text-neutral-600 ">
                                {{ $post->except }}
                            </p>
                            <a href="/posts/{{ $post->slug }}"
                                class="bg-blue-500 text-white font-medium p-3 text-sm rounded-lg">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($posts->skip(1) as $post)
        <article class="bg-white my-4 p-4 rounded-lg">
            <p class="text-xl font-medium mb-2 hover:underline">
                <a href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a>
            </p>
            <p class="text-base font-medium mb-2">By
                <a class="text-blue-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
                <span class="text-blue-600"><a
                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
            </p>
            <p class="text-sm text-justify">{{ $post->except }}</p>
            <a class="text-blue-600 font-medium" href="/posts/{{ $post->slug }}">Read More...</a>
        </article>
    @endforeach --}}
@endsection
