<section class="absolute z-50 top-10 rounded-lg grid place-items-center">
    <div class="flex justify-center items-center mt-10">
        @if(session()->has('nuetral-error'))
            <div class="alert alert-error flex items-center gap-3 p-2 relative z-20">
                <span><i class="fa-solid fa-volume-xmark text-orange-500 text-lg"></i></span>
                <span class="text-xs text-gray-200">{{ session('nuetral-error') }}</span>
                <div class="absolute h-full w-full bg-black opacity-25 z-10"></div>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-error flex items-center gap-3 p-2 relative z-20">
                <span class="pl-2"><i class="fa-solid fa-volume-xmark text-red-600 text-lg"></i></span>
                <span class="text-xs text-gray-200">{{ session('error') }}</span>
                <div class="absolute h-full w-full bg-black opacity-25 z-10"></div>
            </div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-error flex items-center gap-3 p-2 relative z-20">
            <span><i class="fa-solid fa-volume-high text-green-700 text-lg"></i></span>
            <span class="text-xs text-gray-200">{{ session('success') }}</span>
            <div class="absolute h-full w-full bg-black opacity-25 z-10"></div>
        </div>
        @endif
    </div>
</section>