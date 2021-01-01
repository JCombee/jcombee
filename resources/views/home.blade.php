@extends('layout')

@section('title', 'Home')

@section('content')

    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <h1 class="font-bold break-normal text-3xl md:text-5xl">Welcome</h1>
    </div>

    <!--image-->
    <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

    <!--Container-->
    <div class="container max-w-5xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

                <!--Post Content-->


                <!--Lead Para-->
                <p class="text-2xl md:text-3xl mb-5">
                    👋 Welcome to the world of development. I am Jerke Combee, please to meet you.
                </p>

                <p class="py-6">I am a Web Developer from the Netherlands that wants to share his work with the rest of the world. Here you'll find my portfolio, blog posts and my open source contributions.</p>

            </div>

        </div>


    </div>

@endsection
