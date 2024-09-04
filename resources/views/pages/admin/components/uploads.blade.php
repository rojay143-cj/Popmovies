<section class="UPLOAD flex p-10 justify-center items-center" style="display: none">
    @include('pages.admin.components.check_admin_error')
    <div class="bg-zinc-900 p-3 text-sm rounded-lg w-full">
        <form action="" method="POST" id="upload_form">
            @csrf
            <div class="grid grid-cols-2 gap-3">
                <div class="h-full w-full md:w-52 md:h-10">
                    <select name="movie_id" id="movieId" class="bg-stone-700 text-slate-400 text-xs p-2 h-full w-full rounded-sm hover:border-yellow-600 hover:border px-2">
                        <option value="">Movie Name</option>    
                        @foreach ($movies as $movie)
                            <option value="{{$movie->movie_id}}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="h-full w-full md:w-52 md:h-10">
                    <input type="text" name="poster_url" placeholder="Poster link" class="bg-stone-800 text-xs px-2 w-full h-full">
                </div>
                <div class="h-full w-full md:w-52 md:h-10">
                    <input type="text" name="trailer_url" placeholder="Trailer link" class="bg-stone-800 text-xs px-2 w-full h-full">
                </div>
                <div class="h-full w-full md:w-52 md:h-10">
                    <input type="text" name="video_url" placeholder="Video link" class="bg-stone-800 text-xs px-2 w-full h-full">
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
    </div>
</section>