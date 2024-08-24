<header class="bg-zinc-900 h-16 p-5 text-sm flex justify-between shadow-2xl sticky z-50">
    <div class="flex items-center">
        <button class="open-side-bar lg:hidden" title="Open Menu"><i class="fa-solid fa-bars fa-xl"></i></button>
        <a href="/" class="-translate-y-1 translate-x-3 flex items-center logo"><img
                src="{{asset('assets/image/logo/popcorn.png')}}" alt="Movie Online" class="w-10 h-12">
            <span class="tracking-wider font-italic text-3xl font-bold text-yellow-500">Pop</span>
            <span class="tracking-wider font-italic text-3xl font-bold text-red-600">movies</span>
        </a>
    </div>
    <nav id="side-bar" class="bg-zinc-800 p-5 fixed h-full top-0 -left-96 shadow-2xl duration-500">
        <a href="/" class="mt-5 mb-5 -translate-x-1 flex items-center logo"><img
                src="{{asset('assets/image/logo/popcorn.png')}}" alt="Movie Online" class="w-10 h-12">
            <span class="tracking-wider font-italic text-3xl font-bold text-yellow-500">Pop</span>
            <span class="tracking-wider font-italic text-3xl font-bold text-red-600">movies</span>
        </a>
        <section class="p-5 text-lg font-thin">
            <ul class="p-2 pl-3">
                <li class="mt-5"><a href="{{route('homepage')}}">Home</a></li>
                <li class="drp-genre mt-5 cursor-pointer">Movies<i class="fa-solid fa-angle-down ml-1"></i></li>
                <li class="mt-5"><a href="">Trending</a></li>
                <li class="mt-5"><a href="">Latest Release</a></li>
            </ul>
        </section>
        <div class="w-full h-9 relative">
            <input type="text" placeholder="Search your movie..." id="search"
                class="w-full h-9 rounded-lg px-5 bg-gray-800 opacity-60 pl-10">
            <button class="absolute inset-y-0 left-0 p-2 flex items-center text-gray-400 bg-gray-700 rounded-l-lg">
                <i class="fa-solid fa-magnifying-glass text-gray-900"></i>
            </button>
        </div>
        <div class="mt-10 flex justify-evenly gap-3">
            <button type="button"
                class="login text-zinc-800 bg-yellow-500 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-yellow-500 w-full">Login</button>
            <button type="button"
                class="signup text-zinc-800 bg-red-600 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-red-600 w-full">Sign
                up</button>
        </div>
        <div class="absolute top-5 -right-5">
            <button class="close-side-bar" title="Close Menu"><i class="fa-solid fa-circle-left fa-2xl"></i></button>
        </div>
    </nav>
    <div class="relative hidden lg:flex" id="nav-bar">
        <div class="ml-auto navigation-tab">
            <ul class="flex gap-7">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li class="drp-genre cursor-pointer">Movies<i class="fa-solid fa-angle-down ml-1"></i></li>
                <li><a href="">Trending</a></li>
                <li><a href="">Latest Release</a></li>
                <li><button type="button"
                        class="login text-zinc-800 bg-yellow-500 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-yellow-500">Login</button>
                </li>
                <li><button type="button"
                        class="signup text-zinc-800 bg-red-600 px-3 py-1 rounded-lg text-sm tracking-wider font-semibold hover:border-2 shadow-md shadow-red-600">Sign
                        up</button></li>
            </ul>
        </div>
    </div>
    <div class="movies-genre hidden text-slate-400 p-3 w-screen mt-1 absolute right-0 top-14 translate-y-1 bg-zinc-800">
        <div class="genres-content flex justify-center flex-col items-start md:flex-row">
            <div class="p-3">
                <h4 class="text-lg font-semibold mb-2">Genre</h4>
                <div class="flex ml-10">
                    <ul class="ul-genre">
                        <li><a href="">Action</a></li>
                        <li><a href="">Adventure</a></li>
                        <li><a href="">Comedy</a></li>
                        <li><a href="">Drama</a></li>
                        <li><a href="">Family</a></li>
                        <li><a href="">Fantasy</a></li>
                        <li><a href="">Horror</a></li>
                    </ul>
                    <ul class="ul-genre ml-5">
                        <li><a href="">Mystery</a></li>
                        <li><a href="">Romance</a></li>
                        <li><a href="">Sci-Fi</a></li>
                        <li><a href="">Sports</a></li>
                        <li><a href="">Suspense</a></li>
                        <li><a href="">Thriller</a></li>
                        <li><a href="">Musical</a></li>
                    </ul>
                </div>
            </div>

            <div class="p-3">
                <h4 class="text-lg font-semibold">Top Rated Movies</h4>
                <div class="flex ml-10">
                    <div class="top-rated mt-5 grid grid-cols-2 gap-2">
                        @foreach ($message as $top_4)
                            <a href="">
                                <img src="{{$top_4['Img']}}" alt="Alt Here"
                                    class="border-2 border-zinc-900 object-cover w-full h-full lg:h-40 lg:w-52">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="p-3">
                <h4 class="text-lg font-semibold mb-2">Country</h4>
                <div class="flex ml-10">
                    <ul class="ul-genre">
                        <li><a href="">Australia</a></li>
                        <li><a href="">Brazil</a></li>
                        <li><a href="">China</a></li>
                        <li><a href="">Cuba</a></li>
                        <li><a href="">France</a></li>
                        <li><a href="">Hong Kong</a></li>
                        <li><a href="">India</a></li>
                    </ul>
                    <ul class="ul-genre ml-5">
                        <li><a href="">Indonesia</a></li>
                        <li><a href="">Japan</a></li>
                        <li><a href="">Korea</a></li>
                        <li><a href="">Malaysia</a></li>
                        <li><a href="">Philippines</a></li>
                        <li><a href="">Singapore</a></li>
                        <li><a href="">Taiwan</a></li>
                    </ul>
                    <ul class="ul-genre ml-5">
                        <li><a href="">Thailand</a></li>
                        <li><a href="">United Kingdom</a></li>
                        <li><a href="">United States</a></li>
                        <li><a href="">Vietnam</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>