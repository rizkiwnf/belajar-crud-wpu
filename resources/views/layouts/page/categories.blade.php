@extends('layouts.main')
@section('container')
    <p class="text-xl font-medium mb-2">{{ $tittle }}</p>
    <div class="flex justify-around my-4">
        @foreach ($categories as $category)
            <div class="items-center flex">
                <div class="absolute bg-black grow text-white py-2 w-[20.67rem] text-center opacity-70">
                    <p class="text-xl font-medium mb-2 hover:underline">
                        <a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a>
                    </p>
                </div>
                <img class="border" src="https://source.unsplash.com/350x350?{{ $category->name }}"
                    alt="{{ $category->name }}" />
            </div>
        @endforeach
    </div>
@endsection
