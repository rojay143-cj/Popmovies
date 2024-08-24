<div
    class="sidebar fixed z-50 top-0 h-full p-5 col-span-1 bg-zinc-900 text-slate-300 text-sm min-w-60 md:min-w-64 -left-72 duration-500">
    <div class="flex flex-col h-full relative">
    <div class="absolute -right-11 -top-4">
        <button class="close-side-bar" title="Close Menu"><i class="fa-solid fa-bars text-2xl text-slate-300"></i></button>
    </div>
        <div class="flex items-center">
            <a href="/" class="-translate-y-1 flex items-center logo"><img
                    src="{{asset('assets/image/logo/popcorn.png')}}" alt="Movie Online" class="w-10 h-12">
                <span class="tracking-wider font-italic text-3xl font-bold text-yellow-500">Pop</span>
                <span class="tracking-wider font-italic text-3xl font-bold text-red-600">movies</span>
            </a>
        </div>
        <ul class="flex flex-col gap-8 flex-grow mt-10">
            <li id="DASHBOARD" class="cursor-pointer"><i class="fa-solid fa-chart-line"></i> Dashboard</li>
            <li id="PRODUCTION" class="cursor-pointer"><i class="fa-solid fa-star-and-crescent"></i> Production</li>
            <li id="COUNTRY" class="cursor-pointer"><i class="fa-solid fa-globe"></i> Country</a></li>
            <li id="GENRE" class="cursor-pointer"><i class="fa-solid fa-mask"></i> Genre</a></li>
            <li id="MOVIE" class="cursor-pointer"><i class="fa-solid fa-film"></i> Movies</a></li>
            <!-- <li id="SERIES" class="cursor-pointer"><i class="fa-solid fa-tv"></i> Series</a></li> -->
            <li id="UPLOAD" class="cursor-pointer"><i class="fa-solid fa-photo-film"></i> Upload</a></li>
        </ul>
        <div class="mt-auto flex justify-end relative w-full self-end gap-1">
            <div class="w-fit setting cursor-pointer">
                <div class="w-9 h-9 rounded-full">
                    <img src="{{asset(auth()->user()->profile_img)}}" alt="{{auth()->user()->name}}"
                        class="rounded-full shadow-sm shadow-black w-full h-full">
                </div>
            </div>
            <div
                class="settings absolute bottom-10 right-0 bg-gray-400 text-stone-800 shadow-sm shadow-slate-900 p-1 w-fit text-nowrap rounded-md hidden">
                <ul class="flex flex-col text-center">
                    <li id="PROFILE" class="hover:bg-stone-800 hover:text-yellow-500 p-2 rounded-md text-sm"><a
                            href=""><i class="fa-regular fa-id-badge text-base"></i> Profile</a></li>
                    <li id="DM" class="hover:bg-stone-800 hover:text-yellow-500 p-2 rounded-md text-sm cursor-pointer">
                        <i class="fa-solid fa-circle-half-stroke text-base"></i> Dark Mode</a>
                    </li>
                    <li id="LOGOUT" class="hover:bg-stone-800 hover:text-yellow-500 p-2 rounded-md text-sm"><a
                            href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket text-base"></i>
                            Logout</a></li>
                </ul>
            </div>
            <div class="absolute bottom-0 left-0 text-xs tracking-widest">
                <span>v2.1.0</span>
            </div>
        </div>
    </div>
</div>
<div class="absolute left-2 top-2">
    <button class="open-side-bar" title="Open Menu"><i class="fa-solid fa-bars fa-xl"></i></button>
</div>
<script>
    $(function(){
        $('.open-side-bar').on('click',function(e){
            $('.sidebar').fadeIn(100).removeClass('-left-72').addClass('left-0');
            e.stopPropagation();
        });
        $('.close-side-bar').on('click',function(){
            $('.sidebar').fadeOut(100).removeClass('left-0').addClass('-left-72');
        });
    });
</script>