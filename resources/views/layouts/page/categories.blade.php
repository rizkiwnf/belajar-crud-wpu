@extends('layouts.main')
@section('container')
    <p class="text-xl font-medium mb-2">{{ $tittle }}</p>
    @foreach ($categories as $category)
            <ul>
                <li class="bg-white my-4 p-4 rounded-lg">
                    <p class="text-xl font-medium mb-2 hover:underline">
                        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                    </p>
                </li>
            </ul>
    @endforeach
@endsection
