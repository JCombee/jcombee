<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jerke Combee - @yield('title')</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom"
     style="background-image:url({{ asset('cover.jpg') }}); height: 60vh; max-height:460px;">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-white font-extrabold text-3xl md:text-5xl">
            Jerke Combee
        </p>
        <p class="text-xl md:text-2xl text-gray-500">Web Developer Blog and Portfolio Site</p>
    </div>
</div>

<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <!--Nav-->
        <nav class="mt-0 w-full">
            <div class="container mx-auto flex items-center">

                <div class="flex w-1/2 pl-4 text-sm">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <x-header-nav-link routeIs="home*" route="home.index">HOME</x-header-nav-link>
                        <x-header-nav-link routeIs="blog*" route="blog.index">BLOG</x-header-nav-link>
                        <x-header-nav-link routeIs="contact*" route="contact.index">CONTACT</x-header-nav-link>
                    </ul>
                </div>


                <div class="flex w-1/2 justify-end content-center">
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                       data-tippy-content="LinkedIn" href="https://www.linkedin.com/in/jerke-combee-61307362/">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                            <path
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                        </svg>
                    </a>
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                       data-tippy-content="Twitter" href="https://twitter.com/JCombee">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>
                        </svg>
                    </a>
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                       data-tippy-content="Github" href="https://www.github.com/JCombee">
                        <svg height="20" class="fill-current h-4" alt="" viewBox="0 0 16 16" version="1.1" width="20"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </nav>

        @yield('content')

        {{--        <!--Subscribe-->--}}
        {{--        <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">--}}
        {{--            <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>--}}
        {{--            <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts delivered right to your inbox</h3>--}}
        {{--            <div class="w-full text-center pt-4">--}}
        {{--                <form action="#">--}}
        {{--                    <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">--}}
        {{--                        <input type="email" placeholder="youremail@example.com" class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">--}}
        {{--                        <button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>--}}
        {{--                    </div>--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <!-- /Subscribe-->--}}


        <div class="md:p-24">
        @foreach(\AloiaCms\Models\Article::all()->sortBy(function ($article) {return $article->post_date;})->slice(-3)->reverse() as $article)
            <!--Author-->
                <div class="flex w-full items-center font-sans p-8">
                    <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                    <div class="flex-1">
                        <p class="text-base font-bold text-base md:text-xl leading-none">{{ $article->title() }}</p>
                        <p class="text-gray-600 text-xs md:text-base">{{ $article->description() }}</p>
                    </div>
                    <div class="justify-end">
                        <a href="{{ route('blog.show', ['slug' => $article->slug()]) }}"
                           class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">
                            Read More
                        </a>
                    </div>
                </div>
                <!--/Author-->
            @endforeach
        </div>

    </div>


</div>


<footer class="bg-gray-900">
    <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

        <div class="w-full mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                <span class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline">
                    <span class="text-base text-gray-200">Jerke Combee</span>
                </span>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                    <x-footer-link routeIs="home*" route="home.index">HOME</x-footer-link>
                    <x-footer-link routeIs="blog*" route="blog.index">BLOG</x-footer-link>
                    <x-footer-link routeIs="contact*" route="contact.index">CONTACT</x-footer-link>
                </ul>
            </div>
        </div>


    </div>
</footer>

<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@4"></script>
<script>
    //Init tooltips
    tippy('.avatar')
</script>
</body>
</html>
