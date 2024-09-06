<section class="UPLOAD flex p-10 justify-center items-center" style="display: none">
    @include('pages.admin.components.check_admin_error')
    <div class="bg-zinc-900 p-3 text-sm rounded-lg w-full">
    <div class="p-2 border shadow-sm text-center mb-10 mt-2 w-full">
        <h1 class="font-bold text-xl tracking-widest">Upload your movies</h1>
    </div>
        <form action="" method="POST" id="upload_form">
            @csrf
            <div class="flex flex-col gap-3">
                <div class="h-8 w-full md:w-72 md:h-10 flex flex-row items-center">
                    <label for="movieId" class="p-2">Movie</label>
                    <select name="movie_id" id="movieId" class="bg-stone-800 text-slate-400 text-xs p-2 h-full w-full rounded-sm hover:border-yellow-600 hover:border px-2">  
                        
                    </select>
                </div>
                <div class="h-8 w-full md:w-22 md:h-10 flex flex-row items-center">
                    <label for="PosterUrl" class="p-2">Poster</label>
                    <input type="text" name="poster_url" class="bg-stone-800 text-slate-400 text-xs px-2 w-full h-full rounded-sm hover:border-yellow-600 hover:border">
                </div>
                <div class="h-8 w-full md:w-72 md:h-10 flex flex-row items-center">
                    <label for="TrailerUrl" class="p-2">Trailer</label>
                    <input type="text" name="trailer_url" class="bg-stone-800 text-slate-400 text-xs px-2 w-full h-full rounded-sm hover:border-yellow-600 hover:border">
                </div>
                <div class="h-8 w-full md:w-72 md:h-10 flex flex-row items-center">
                    <label for="VideoUrl" class="p-2">Video</label>
                    <input type="text" id="VideoUrl" name="video_url" class="bg-stone-800 text-slate-400 text-xs px-2 w-full h-full rounded-sm hover:border-yellow-600 hover:border">
                </div>
            </div>
            <div class="modal-footer flex justify-evenly mt-5">
                    <button type="button" onclick="document.getElementById('upload_form').reset(); return false"
                        class="close-modal px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                        Clear
                    </button>
                    <button type="button" id="btn_upload" name="upload"
                        class="btn-save px-4 py-2 bg-yellow-700 text-sm text-gray-200 rounded hover:bg-yellow-600 focus:outline-none">
                        <i class="fa-solid fa-cloud-arrow-up mr-2"></i>Upload
                    </button>
                </div>
        </form>
        <!-- Modal confirmation -->
         <div id="Links_Confirmation" class="fixed top-0 right-0 w-screen h-full bg-opacity-50 bg-black flex justify-center items-center" style="display:none">
            <div class="flex items-center justify-center p-2">
                <form action="" method="post" class="bg-stone-900 w-[40rem]">
                    <div class="p-2 text-left">
                        <h2 class="tracking-widest font-bold text-xl">Confirm the movie links</h2>
                        <dd class="text-slate-400 text-xs w-[35rem] mt-2 font-semibold">Please do make sure that the links are valid and correct or else you'll need to delete the movie from movie page and re-upload the links again.</dd>
                    </div>
                    <div class="bg-gray-400 bg-opacity-15 mt-5 p-3">
                        <h3 class="font-semibold text-lg tracking-wider">Movie Details</h3>
                        <ul class="movieLinks mt-5 flex flex-col text-sm gap-1">
                            
                        </ul>
                    </div>
                    <div class="modal-footer flex justify-evenly mt-5 mb-5">
                        <button type="button" id="btn_cancel_confirm"
                            class="close-modal px-5 py-2 w-56 bg-gray-600 text-base text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                            Cancel
                        </button>
                        <button type="button" id="btn_confirm_links" name="upload"
                            class="btn-save px-5 py-2 w-56 bg-yellow-700 text-base text-gray-200 rounded hover:bg-yellow-600 focus:outline-none">
                            <i class="fa-solid fa-cloud-arrow-up mr-2"></i>Confirm Links
                        </button>
                    </div>
                </form>
            </div>
         </div>
    </div>
</section>