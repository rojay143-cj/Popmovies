<div class="flex justify-center items-center mt-10">
    @if(session()->has('nuetral-error'))
        <div class="alert alert-error flex items-center gap-3 p-2">
            <span class="pl-2"><i class="fa-solid fa-volume-xmark text-orange-500 text-lg"></i></span>
            <span class="text-xs text-slate-300">{{ session('nuetral-error') }}</span>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-error flex items-center gap-3 p-2">
            <span class="pl-2"><i class="fa-solid fa-volume-xmark text-red-600 text-lg"></i></span>
            <span class="text-xs text-slate-300">{{ session('error') }}</span>
        </div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-error flex items-center gap-3 p-2">
            <span class="pl-2"><i class="fa-solid fa-volume-high text-green-700 text-lg"></i></span>
            <span class="text-xs text-slate-300">{{ session('success') }}</span>
        </div>
    @endif
</div>