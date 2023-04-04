@extends('layouts.main')
@section('container')
    <p class="text-center text-xl font-semibold bg-white p-3 shadow-lg">{{ $tittle }}</p>
    <div class="flex justify-end">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="relative my-4 flex w-96 flex-wrap items-stretch ">
                <input type="text"
                    class="relative bg-white m-0 block w-[1px] min-w-0 flex-auto rounded-l border border-r-0 border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition ease-in-out focus:z-[3] focus:border-none focus:text-neutral-700 focus:shadow-te-primary focus:outline-blue-600"
                    placeholder="Search..." name="search" />
                <button
                    class="relative z-[2] rounded-r bg-blue-500 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:z-[3] focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                    type="submit">
                    Search
                </button>
            </div>
        </form>
    </div>
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
                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                        <span class="text-blue-600"><a
                                href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></span>
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

        <div class="container my-3">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($posts->skip(1) as $post)
                    <div class="flex justify-center">
                        <div class="block rounded-lg bg-white shadow-lg ">
                            <div class="absolute p-3 bg-black text-white">
                                <span class="text-white"><a
                                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</span></a>
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
                                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
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
    @else
        <p class="text-center text-xl font-semibold bg-white p-3">No Post in that time</p>
    @endif
    <div class="mb-5">
        {{ $posts->links() }}
    </div>
@endsection
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
