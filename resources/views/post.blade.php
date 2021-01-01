@extends('layout')

@section('content')



    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <p class="text-sm md:text-base text-green-500 font-bold">{{ \Illuminate\Support\Facades\Date::createFromTimeString($article->post_date)->format('Y-m-d h:m') }} <span class="text-gray-900">/</span>
            {{ $article->tag }}</p>
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{{ $article->title() }}</h1>
    </div>

    <!--image-->
    <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
         style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

    <!--Container-->
    <div class="container max-w-5xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                 style="font-family:Georgia,serif;">

                {!! $article->body() !!}

            </div>

        </div>


    </div>

@endsection
