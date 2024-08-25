<div class="MOVIE w-full lg:w-[65rem] mx-10 flex flex-col mt-10" style="display: none">
    <div class="flex flex-col items-center">
        <div class="w-full flex justify-between">
            <div class="flex gap-3 text-xl font-bold tracking-wide underline underline-offset-4 mb-10 mt-2">
                <h3>Dashboard</h3>
                <span><i class="fa-solid fa-caret-right"></i></span>
                <h3>Movies</h3>
            </div>
            <div class="mt-2">
                <button
                    class="btn-add_movie text-nowrap p-3 bg-yellow-700 hover:bg-yellow-600 focus:outline-none rounded-lg text-xs text-gray-200 flex justify-center items-center"
                    aria-label="Add new movie">
                    Add Movie
                </button>
            </div>
        </div>
        <div class="w-full overflow-x-auto bg-opacity-15">
            <table id="movie" class="mx-auto shadow-sm w-full text-xs border border-stone-600">
                <thead class="p-3 text-left bg-stone-700 bg-opacity-40">
                    <tr>
                        <th
                            class="py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">
                            Poster</th>
                        <th
                            class="py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">
                            Title</th>
                        <th
                            class="py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">
                            Type</th>
                        <th
                            class="py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">
                            Release Date</th>
                        <th
                            class="py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">
                            RT Score</th>
                        <th class="text-center py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-b border-stone-600"
                            width="10%">Manage</th>
                    </tr>
                </thead>
                <tbody id="DT_movie">
                    <!-- Data table for movie lists -->
                </tbody>
            </table>
        </div>
    </div>
    @include('pages.admin.components.admin_check_error')
</div>
<div class="modal-add_movie fixed inset-0 flex items-center justify-center z-30" style="display: none">
    <div
        class="modal-content bg-stone-900 text-gray-200 rounded-lg shadow-lg shadow-black relative p-5 z-20 w-[60rem] max-h-[90vh] overflow-y-auto scrollbar">
        <div class="modal-header flex justify-between items-center mb-4">
            <h4 class="text-lg font-semibold tracking-widest">Add Movie</h4>
            <button type="button" class="close-modal text-gray-400 hover:text-gray-200">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <form action="{{route('Add_Movie')}}" method="POST" id="AddForm"
                class="space-y-2 col-span-1 bg-stone-700 px-3 text-xs">
                @csrf
                <div class="mb-2">
                    <label for="title" class="block  mb-1">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-2">
                        <label for="type" class="block mb-1">Type</label>
                        <select id="type" name="type"
                            class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                            <option value="Movie" {{ old('type') == 'Movie' ? 'selected' : '' }}>Movie</option>
                            <option value="TV Series" {{ old('type') == 'TV Series' ? 'selected' : '' }}>TV Series
                            </option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="release_date" class="block mb-1">Release Date</label>
                        <input type="date" id="release_date" name="release_date" value="{{ old('release_date') }}"
                            class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="description" class="block mb-1">Description</label>
                    <textarea id="description" name="description" rows="3"
                        class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">{{ old('description') }}</textarea>
                </div>
                <div class="mb-2">
                    <label for="rt_score" class="block mb-1">RT Score</label>
                    <input type="text" id="rt_score" name="rt_score" value="{{ old('rt_score') }}"
                        class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                </div>
                <div class="mb-2">
                    <label for="genre" class="block mb-1">Selected GCP</label>
                    <div title="Genre | Country | Cast"
                        class="G_C_P bg-stone-800 p-2 h-36 max-h-36 overflow-x-hidden overflow-y-auto scrollbar text-xs text-gray-200 text-center rounded flex flex-col gap-1.5">
                        <!-- Genre | Country | Production -->
                    </div>
                </div>
                <div class="modal-footer flex justify-evenly translate-y-7">
                    <button type="button"
                        class="close-modal px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                        Cancel
                    </button>
                    <button type="button" id="btn_save" name="save_movie"
                        class="btn-save px-4 py-2 bg-yellow-700 text-sm text-gray-200 rounded hover:bg-yellow-600 focus:outline-none">
                        Save
                    </button>
                </div>
            </form>
            <div class="col-span-1 flex flex-col gap-4 px-3 text-xs">
                <div class="bg-stone-700 p-3 rounded-lg shadow-sm">
                    <h1 class="text-lg text-center text-gray-300 rounded-sm p-2">Production</h1>
                    <input type="text" placeholder="Search..."
                        class="append_search rounded-sm text-xs w-full p-2 bg-stone-800 shadow-sm mt-2 mb-2 focus:shadow-lg focus:border-yellow-600">
                    <ul class="cast_names flex flex-col gap-2 h-20 max-h-20 overflow-y-auto scrollbar">
                        @foreach ($cast as $team)
                            <li class="relative" title="{{$team->position}}">{{$team->cast_name}}<button
                                    id="append_team_{{ $team->cast_id }}" class="absolute right-2 hover:border p-1"><i
                                        class="fa-solid fa-plus"></i></button></li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-stone-700 p-3 rounded-lg shadow-sm">
                    <h1 class="text-lg text-center text-red-600 rounded-sm p-2">Genre</h1>
                    <ul class="flex flex-col gap-2 mt-2 max-h-24 overflow-y-auto scrollbar">
                        @foreach ($genres as $genre)
                            <li class="relative">{{$genre->genre_name}}<button id="append_genre_{{$genre->genre_id}}"
                                    class="absolute right-2 hover:border p-1"><i class="fa-solid fa-plus"></i></button></li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-stone-700 p-3 rounded-lg shadow-sm">
                    <h1 class="text-lg text-center text-yellow-600 rounded-sm p-2">Country</h1>
                    <ul class="flex flex-col gap-2 mt-2 max-h-24 overflow-y-auto scrollbar">
                        @foreach ($countries as $country)
                            <li class="relative">{{$country->country_name}}<button
                                    id="append_country_{{$country->country_id}}"
                                    class="absolute right-2 hover:border p-1"><i class="fa-solid fa-plus"></i></button></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="error text-red-500 font-thin text-xs text-center p-1 mx-auto w-fit mt-2 hidden"></div>
        <div class="success text-green-500 font-thin text-xs text-center p-1 mx-auto w-fit mt-2 hidden"></div>
    </div>
    <div class="absolute inset-0 bg-stone-800 opacity-50 z-10"></div>
</div>
<!-- Edit movie modal -->
<div class="modal-edit_movie fixed inset-0 flex items-center justify-center z-30" style="display: none">
    <div
        class="modal-content bg-stone-900 text-gray-200 rounded-lg shadow-lg shadow-black relative p-5 z-20 w-[60rem] max-h-[90vh] overflow-y-auto scrollbar">
        <div class="modal-header flex justify-between items-center mb-4">
            <h4 class="modal-title text-lg font-semibold tracking-widest"></h4>
            <button type="button" class="close-edit-modal text-gray-400 hover:text-gray-200">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <form action="{{route('Edit_Movie')}}" method="POST" id="EditForm"
                class="space-y-2 col-span-1 bg-stone-700 px-3 text-xs">
                @csrf
                <div class="mb-2">
                    <label for="title" class="block  mb-1">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-2">
                        <label for="type" class="block mb-1">Type</label>
                        <select id="type" name="type"
                            class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                            <option value="Movie" {{ old('type') == 'Movie' ? 'selected' : '' }}>Movie</option>
                            <option value="TV Series" {{ old('type') == 'TV Series' ? 'selected' : '' }}>TV Series
                            </option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="release_date" class="block mb-1">Release Date</label>
                        <input type="date" id="release_date" name="release_date" value="{{ old('release_date') }}"
                            class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="description" class="block mb-1">Description</label>
                    <textarea id="description" name="description" rows="3"
                        class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">{{ old('description') }}</textarea>
                </div>
                <div class="mb-2">
                    <label for="rt_score" class="block mb-1">RT Score</label>
                    <input type="text" id="rt_score" name="rt_score" value="{{ old('rt_score') }}"
                        class="w-full px-3 py-2 bg-stone-800 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                </div>
                <div class="mb-2">
                    <label for="genre" class="block mb-1">Selected GCP</label>
                    <div title="Genre | Country | Cast"
                        class="G_C_P bg-stone-800 p-2 h-36 max-h-36 overflow-x-hidden overflow-y-auto scrollbar text-xs text-gray-200 text-center rounded flex flex-col gap-1.5">
                        <!-- Genre | Country | Production -->
                    </div>
                </div>
                <div class="modal-footer flex justify-evenly translate-y-7">
                    <button type="button"
                        class="close-edit-modal px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                        Cancel
                    </button>
                    <button type="button" id="btn_save" name="save_movie"
                        class="btn-save px-4 py-2 bg-yellow-700 text-sm text-gray-200 rounded hover:bg-yellow-600 focus:outline-none">
                        Save
                    </button>
                </div>
            </form>
            <div class="col-span-1 flex flex-col gap-4 px-3 text-xs">
                <div class="bg-stone-700 p-3 rounded-lg shadow-sm">
                    <h1 class="text-lg text-center text-gray-300 rounded-sm p-2">Production</h1>
                    <input type="text" placeholder="Search..."
                        class="append_search rounded-sm text-xs w-full p-2 bg-stone-800 shadow-sm mt-2 mb-2 focus:shadow-lg focus:border-yellow-600">
                    <ul class="cast_names flex flex-col gap-2 h-20 max-h-20 overflow-y-auto scrollbar">
                        @foreach ($cast as $team)
                            <li class="relative" title="{{$team->position}}">{{$team->cast_name}}<button
                                    id="append_team_{{ $team->cast_id }}" class="absolute right-2 hover:border p-1"><i
                                        class="fa-solid fa-plus"></i></button></li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-stone-700 p-3 rounded-lg shadow-sm">
                    <h1 class="text-lg text-center text-red-600 rounded-sm p-2">Genre</h1>
                    <ul class="flex flex-col gap-2 mt-2 max-h-24 overflow-y-auto scrollbar">
                        @foreach ($genres as $genre)
                            <li class="relative">{{$genre->genre_name}}<button id="append_genre_{{$genre->genre_id}}"
                                    class="absolute right-2 hover:border p-1"><i class="fa-solid fa-plus"></i></button></li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-stone-700 p-3 rounded-lg shadow-sm">
                    <h1 class="text-lg text-center text-yellow-600 rounded-sm p-2">Country</h1>
                    <ul class="flex flex-col gap-2 mt-2 max-h-24 overflow-y-auto scrollbar">
                        @foreach ($countries as $country)
                            <li class="relative">{{$country->country_name}}<button
                                    id="append_country_{{$country->country_id}}"
                                    class="absolute right-2 hover:border p-1"><i class="fa-solid fa-plus"></i></button></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="error text-red-500 font-thin text-xs text-center p-1 mx-auto w-fit mt-2 hidden"></div>
        <div class="success text-green-500 font-thin text-xs text-center p-1 mx-auto w-fit mt-2 hidden"></div>
    </div>
    <div class="absolute inset-0 bg-stone-800 opacity-50 z-10"></div>
</div>
<div>
    <form action="{{route('Delete_Movie')}}" method="POST" id="delete_movies">
        @csrf
    </form>
</div>