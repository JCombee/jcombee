@extends('layout')

@section('title', 'Blog')

@section('content')

    <!--Posts Container-->
    <div class="flex flex-wrap justify-between pt-12 -mx-6">

    @foreach(\AloiaCms\Models\Article::all() as $article)
        <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="{{ route('blog.show', ['slug' => $article->slug()]) }}" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="{{ asset($article->image()) }}"
                             class="h-64 w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $article->tag }}</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $article->title() }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {{ $article->description() }}
                        </p>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

@endsection
