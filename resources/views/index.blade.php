@extends('components.layout')
@section('title','Popmovies - Watch Online Movies & TV Shows')
@section('body')
    <header class="bg-no-repeat bg-cover relative p-2" style="background-image: url({{asset('assets/image/Wallpaper/avanger_wall.png')}})">
        <div class="relative z-50">
            <div class="w-full h-full flex justify-center items-center flex-col">
                <a href="/" class="flex items-center"><img src="{{asset('assets/image/logo/popcorn.png')}}" alt="Movie Online" class="w-20 h-15">
                    <span class="tracking-wider font-italic text-3xl font-bold text-yellow-500">Pop</span> 
                    <span class="tracking-wider font-italic text-3xl font-bold text-red-600">movies</span>
                </a>
                <section class="mt-5">
                    <ul class="inline-flex gap-10 text-sm font-medium flex-wrap md:flex justify-center">
                        <li><a href="{{route('homepage')}}">Home</a></li>
                        <li><a href="">Anime</a></li>
                        <li><a href="">Movies</a></li>
                        <li><a href="">Trending</a></li>
                        <li><a href="">Latest Release</a></li>
                    </ul>
                    <section class="mb-2 w-full flex mt-5">
                        <div class="relative w-full lg:w-[40rem]">
                            <input type="text" placeholder="Search your movie..." id="search" class="w-full h-9 rounded-lg px-5 bg-gray-800 opacity-60 pl-10">
                            <button class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </section>
                </section>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="relative z-20 w-full h-full md:w-[60rem] md:h-[30rem]">
                <img src="{{asset('assets/image/Wallpaper/index_banner.svg')}}" alt="Top Anime" class="w-full h-full object-center">
            </div>
            <div class="absolute z-20 self-end flex justify-center bottom-3">
                <a href="{{route('homepage')}}" class="bg-yellow-500 hover:bg-yellow-600 text-slate-700 font-bold py-2 px-4 rounded-xl">Visit Homepage <i class="fa-solid fa-circle-right fa-xl ml-2"></i></a>
            </div>
        </div>
        <div class="blurry absolute w-screen bg-black top-0 left-0 z-10 opacity-65 border-b-2 shadow-xl shadow-gray-300 min-w-96 h-full"></div>
    </header>
    <div class="flex justify-center z-20 relative mt-5">
        <div class="flex gap-10 justify-center">
            <span class="w-4 h-4"><a href=""><img src="{{asset('assets/image/icon/facebook.svg')}}" alt="Facebook" class="w-full h-full"></a></span>
            <span class="w-4 h-4"><a href=""><img src="{{asset('assets/image/icon/instagram.svg')}}" alt="Facebook" class="w-full h-full"></a></span>
            <span class="w-4 h-4"><a href=""><img src="{{asset('assets/image/icon/twitter.svg')}}" alt="Facebook" class="w-full h-full"></a></span>
            <span class="w-4 h-4"><a href=""><img src="{{asset('assets/image/icon/pinterest.svg')}}" alt="Facebook" class="w-full h-full"></a></span>
            <span class="w-4 h-4"><a href=""><img src="{{asset('assets/image/icon/linkin.svg')}}" alt="Facebook" class="w-full h-full"></a></span>
            <span class="w-4 h-4"><a href=""><img src="{{asset('assets/image/icon/whatsapp.svg')}}" alt="Facebook" class="w-full h-full"></a></span>
        </div>
    </div>
    <main class="flex justify-center">
        <div class="container w-7/12 mb-14 mt-5">
            <h1 class="font-bold text-center text-slate-600 p-5 text-2xl">Welcome to Popmovies - Your Premier Free Streaming Destination</h1>
            <p class="mb-6 text-sm">In late 2016, we observed that many free movie streaming sites lacked an intuitive user interface (UI) and a seamless user experience (UX). To address this, our dedicated product development team launched Popmovies, aiming to deliver a superior streaming platform for all movie enthusiasts.</p>

            <h2 class="font-semibold">What is Popmovies?</h2>
            <p class="mb-6 text-sm">Popmovies is a top-tier, free streaming site where you can enjoy a wide range of movies, anime, and cartoons in high-definition quality. With English subtitles or dubbing available, you can watch or download any content without the need for registration or payment. It's all completely free!</p>

            <h2 class="font-semibold">Is Popmovies Safe?</h2>
            <p class="mb-6 text-sm">Absolutely. Our primary focus is enhancing user experience while ensuring user safety. We encourage users to report any suspicious activity. Please note that we do run advertisements to support the maintenance of the site.</p>

            <h2 class="font-semibold">Why Choose Popmovies for Free Streaming?</h2>
            <ul class="list-disc list-inside mb-6">
                <li class="mb-2"><span class="text-gray-400"><strong>Extensive Content Library:</strong></span> <span class="text-sm">Popmovies boasts an extensive selection of movies, anime, and cartoons. We continuously update our library with new and classic titles, ensuring you have access to a vast array of content. Following the closure of other popular streaming sites, Popmovies has emerged as one of the largest streaming libraries on the web.</span></li>
                <li class="mb-2"><span class="text-gray-400"><strong>Superior Streaming Experience:</strong></span> <span class="text-sm">Our advanced streaming servers guarantee a smooth and fast streaming experience. Choose the server that works best for you and enjoy uninterrupted viewing.</span></li>
                <li class="mb-2"><span class="text-gray-400"><strong>High-Quality Resolution:</strong></span> <span class="text-sm">All our videos are available in the highest possible resolution. Our quality setting function allows you to adjust the streaming quality according to your internet speed, ensuring an optimal viewing experience for everyone.</span></li>
                <li class="mb-2"><span class="text-gray-400"><strong>Regular Updates:</strong></span> <span class="text-sm">Our content library is updated hourly, with most updates happening automatically. This ensures you get the latest movies, anime, and cartoons as soon as they are available.</span></li>
                <li class="mb-2"><span class="text-gray-400"><strong>User-Friendly Interface:</strong></span> <span class="text-sm">Popmovies is designed with simplicity and ease of use in mind. Our user-friendly interface ensures that you can navigate the site effortlessly. We offer all the features you need for an enjoyable streaming experience, presented in a way that's easy to use.</span></li>
                <li class="mb-2"><span class="text-gray-400"><strong>Device Compatibility:</strong></span> <span class="text-sm">Whether you're on a desktop or a mobile device, Popmovies works flawlessly. Our site is compatible with older browsers as well, allowing you to enjoy your favorite content anywhere, anytime.</span></li>
            </ul>

            <h2 class="font-semibold">Join the Popmovies Community</h2>
            <p class="mb-6 text-sm">For a reliable and safe place to stream your favorite movies, anime, and cartoons online for free, Popmovies is the perfect choice. If you love our platform, please share it with your friends and don't forget to bookmark our site for easy access.</p>

            <p class="font-semibold">Thank you for choosing Popmovies!</p>
        </div>
    </main>
@endsection
