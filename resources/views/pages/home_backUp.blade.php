@extends('components.layout')
@section('title', 'Home - Watch Online Movies & TV Shows')
@section('body')
<section class="container-fluid min-w-[26rem] max-w-[120rem] overflow-hidden m-auto relative shadow-2xl shadow-red-600">
    <x-header :message="$top_4" />
    <x-check_error />
    <main>
        <x-sliding_banner :message="$top_4" />
        <x-multi_media />
        <section class="action_moviesORtv">
            <div class="flex items-center gap-3 py-2 text-sm">
                <div class="ml-10 text-2xl font-thin underline underline-offset-8 decoration-zinc-700 text-zinc-300">
                    <h2>Popular</h2>
                </div>
                <button class="btn_movies bg-yellow-400 text-zinc-800 rounded-md p-1"><i
                        class="fa-solid fa-play text-sm">
                    </i><i>Movies</i></button>
                <button
                    class="btn_series bg-zinc-800 hover:shadow-md hover:shadow-zinc-500 text-zinc-500 rounded-md p-1"><i
                        class="fa-solid fa-sort text-sm">
                    </i><i>TV Series</i></button>
            </div>
        </section>
        <section class="popular_movies">
            <div
                class="gap-5 mx-7 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 max-h-[44rem] overflow-hidden px-3 pb-6">
                @foreach ($latest as $new)
                    <div class="w-full h-80 py-8">
                        <a href="">
                            <img src="{{$new['Img']}}" title="{{$new['Title']}}" alt="{{$new['Title']}}"
                                class="w-full h-full rounded-md object-cover shadow-sm shadow-zinc-200">
                        </a>
                        <div class="mt-2">
                            <a href="" class="hover:underline underline-offset-2">
                                <h4 class="text-md text-zinc-200 font-thin text-center line-clamp-1">{{$new['Title']}}</h4>
                            </a>
                            <p class="text-xs flex justify-between">
                                <span>{{\Carbon\Carbon::parse($new['Date'])->format('Y')}} • {{$new['Duration']}}</span>
                                <span>{{$new['Type']}}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="action_moviesORtv">
            <div class="flex items-center gap-3 py-2 text-sm">
                <div class="ml-10 text-2xl font-thin underline underline-offset-8 decoration-zinc-700 text-zinc-300">
                    <h2>Latest</h2>
                </div>
            </div>
        </section>
        <section class="latest_movies">
            <div
                class="gap-5 mx-7 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 max-h-[44rem] overflow-hidden px-3 pb-6">
                @foreach ($trending as $trend)
                    <div class="w-full h-80 py-8">
                        <a href="">
                            <img src="{{$trend['Img']}}" title="{{$trend['Title']}}" alt="{{$trend['Title']}}"
                                class="w-full h-full rounded-md object-cover shadow-sm shadow-zinc-200">
                        </a>
                        <div class="mt-2">
                            <a href="" class="hover:underline underline-offset-2">
                                <h4 class="text-md text-zinc-200 font-thin text-center line-clamp-1">{{$trend['Title']}}
                                </h4>
                            </a>
                            <p class="text-xs flex justify-between">
                                <span>{{\Carbon\Carbon::parse($trend['Date'])->format('Y')}} • {{$trend['Duration']}}</span>
                                <span>{{$trend['Type']}}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="movie_list">
            <div
                class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 justify-center items-center gap-5 mx-10 mt-5 mb-5">
                <div class="new_tv_series">
                    <div class="text-zinc-400 text-lg py-2">
                        <button class="hover:underline hover:underline-offset-4">New TV Series<i
                                class="fa-solid fa-arrow-right-long ml-2"></i></button>
                    </div>
                    @foreach ($series as $tv)
                        <div class="flex flex-col">
                            <div class="flex pr-3 gap-3 items-center bg-zinc-900 rounded-md p-2 mt-3">
                                <img src="{{$tv['Img']}}" alt="" class="w-[3rem] h-[4rem] object-cover rounded-md">
                                <div class="text-xs flex flex-col text-nowrap w-44">
                                    <h4 class="mb-2 text-[0.9rem] text-zinc-400 line-clamp-1 text-wrap">{{$tv['Title']}}
                                    </h4>
                                    <div class="flex justify-between w-36 text-xs">
                                        <span>{{\Carbon\Carbon::parse($tv['Date'])->format('Y')}}</span>
                                        <span>•</span>
                                        <span>{{$tv['Duration']}}</span>
                                        <span>•</span>
                                        <span>{{$tv['Type']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="new_animes">
                    <div class="text-zinc-400 text-lg py-2">
                        <button class="hover:underline hover:underline-offset-4">New Animes<i
                                class="fa-solid fa-arrow-right-long ml-2"></i></button>
                    </div>
                    @foreach ($anime as $animes)
                        <div class="flex flex-col">
                            <div class="flex pr-3 gap-3 items-center bg-zinc-900 rounded-md p-2 mt-3">
                                <img src="{{$animes['Img']}}" alt="" class="w-[3rem] h-[4rem] object-cover rounded-md">
                                <div class="text-xs flex flex-col text-nowrap w-44">
                                    <h4 class="mb-2 text-[0.9rem] text-zinc-400 line-clamp-1 text-wrap">{{$animes['Title']}}
                                    </h4>
                                    <div class="flex justify-between w-36 text-xs">
                                        <span>{{\Carbon\Carbon::parse($animes['Date'])->format('Y')}}</span>
                                        <span>•</span>
                                        <span>{{$animes['Duration']}}</span>
                                        <span>•</span>
                                        <span>{{$animes['Type']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="new_movies">
                    <div class="text-zinc-400 text-lg py-2">
                        <button class="hover:underline hover:underline-offset-4">New Movies<i
                                class="fa-solid fa-arrow-right-long ml-2"></i></button>
                    </div>
                    @foreach ($movies as $newest)
                        <div class="flex flex-col">
                            <div class="flex pr-3 gap-3 items-center bg-zinc-900 rounded-md p-2 mt-3">
                                <img src="{{$newest['Img']}}" alt="" class="w-[3rem] h-[4rem] object-cover rounded-md">
                                <div class="text-xs flex flex-col text-nowrap w-44">
                                    <h4 class="mb-2 text-[0.9rem] text-zinc-400 line-clamp-1 text-wrap">{{$newest['Title']}}
                                    </h4>
                                    <div class="flex justify-between w-36 text-xs">
                                        <span>{{\Carbon\Carbon::parse($newest['Date'])->format('Y')}}</span>
                                        <span>•</span>
                                        <span>{{$newest['Duration']}}</span>
                                        <span>•</span>
                                        <span>{{$newest['Type']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <footer class="relative bg-zinc-900 pt-10">
        <section class="pb-10 flex flex-col md:flex-row justify-center gap-16 p-3 items-center md:items-start">
            <div class="w-fit">
                <a href="/" class="-translate-x-1 flex items-center logo"><img
                        src="{{asset('assets/image/logo/popcorn.png')}}" alt="Movie Online" class="w-10 h-12">
                    <span class="tracking-wider font-italic text-3xl font-bold text-yellow-500">Pop</span>
                    <span class="tracking-wider font-italic text-3xl font-bold text-red-600">movies</span>
                </a>
                <section class="mt-5 text-sm font-thin">
                    <ul class="flex flex-col md:flex-row justify-center items-center gap-3">
                        <li class=""><a href="{{route('homepage')}}">Home</a></li>
                        <li>•</li>
                        <li><a href="">Anime</a></li>
                        <li>•</li>
                        <li><a href="">Movie</a></li>
                        <li>•</li>
                        <li class=""><a href="">Trending</a></li>
                        <li>•</li>
                        <li class=""><a href="">Latest Release</a></li>
                    </ul>
                </section>
            </div>
            <div class="w-fit text-center md:text-left">
                <div class="links">
                    <h6 class="text-lg underline underline-offset-2 decoration-zinc-700">Contact Us</h6>
                    <div class="flex justify-center gap-3 mt-5 w-fit translate-x-8 md:translate-x-0">
                        <span class="text-zinc-100 self-center"><i
                                class="fa-brands fa-telegram text-[0.8rem]"></i></span>
                        <span class="text-zinc-100"><i class="fa-brands fa-reddit-alien text-[0.8rem]"></i></span>
                        <span class="text-zinc-100"><i class="fa-brands fa-facebook-messenger text-[0.8rem]"></i></span>
                        <span class="text-zinc-100"><i class="fa-brands fa-discord text-[0.8rem]"></i></span>
                    </div>
                    <div class="flex flex-col text-center md:text-left">
                        <span class="text-xs text-nowrap"><i class="fa-solid fa-envelope"></i>
                            rojaymerlin@gmail.com</span>
                        <span class="text-xs"><i class="fa-solid fa-phone"></i> +63 9061008410</span>
                    </div>
                </div>
            </div>
            <div class="text-center md:text-left w-96">
                <h6 class="text-lg underline underline-offset-2 decoration-zinc-700">About the site</h6>
                <div class="text-xs mt-5">
                    <p>We respectfully introduce to you the most dependable, reasonably priced, and amazing online
                        streaming web app. Being avid movie watchers, we developed this amazing program so users and
                        visitors could view movies, animes, and mixed television series on any browser. Create an
                        account to access additional services on the website. It is completely free for users to do so.
                    </p>
                </div>
            </div>
        </section>
        <div class="flex justify-center mt-10">
            <div class="absolute bottom-0 m-0">
                <span class="text-zinc-400 text-xs">Popmovies <i class="fa-regular fa-copyright"></i><span
                        class="text-[0.7rem]">(2024) All rights reserved</span></span>
            </div>
        </div>
    </footer>
    <x-registration />
    <x-loginform />
</section>
@endsection