@extends('layout')

@section('content')



    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <p class="text-sm md:text-base text-green-500 font-bold">08 APRIL 2019 <span class="text-gray-900">/</span>
            GETTING STARTED</p>
        <h1 class="font-bold break-normal text-3xl md:text-5xl">Welcome to Ghostwind CSS</h1>
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


            <!--Subscribe-->
            <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
                <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
                <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts
                    delivered right to your inbox</h3>
                <div class="w-full text-center pt-4">
                    <form action="#">
                        <div class="max-w-sm mx-auto p-1 pr-0 flex flex-wrap items-center">
                            <input type="email" placeholder="youremail@example.com"
                                   class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                            <button type="submit"
                                    class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Subscribe-->


            <!--Author-->
            <div class="flex w-full items-center font-sans p-8 md:p-24">
                <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                <div class="flex-1">
                    <p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>
                    <p class="text-gray-600 text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a
                            class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500"
                            href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
                </div>
                <div class="justify-end">
                    <button
                        class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">
                        Read More
                    </button>
                </div>
            </div>
            <!--/Author-->

        </div>


    </div>

@endsection