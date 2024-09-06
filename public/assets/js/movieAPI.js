const Moviesettings = {
    method: 'GET',
    async: true,
    crossDomain: true,
    url: 'https://api.themoviedb.org/3/discover/movie?include_adult=false&include_video=false&language=en-US&page=1&sort_by=popularity.desc',
    headers: {
      accept: 'application/json',
      Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlOGE5OGZiNDAzZTU2YzY2ZDAyZDA2NjBkYmQ3NTdkZSIsIm5iZiI6MTcyNTYzMjM3NS4zMjM0MjksInN1YiI6IjY2ZGIwNWQ1YzRmMDVhOTIwNTI1NjY4MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.cjp7WW7IUI9KLWV4IOv4feVecmT5cIksBuRtmQ6Roqk'
    }
};
$.ajax(Moviesettings).done(function (response) {
	console.log(response);
    $(".movie").empty();
    $.each(response.results, function (key, settingsAPI) {
        $(".movie").append(`
                <div class="w-full h-80 py-8">
                    <a href="">
                        <img src="https://image.tmdb.org/t/p/w500${settingsAPI.poster_path}" title="${settingsAPI.title}" alt="${settingsAPI.title}"
                            class="w-full h-full rounded-md object-cover shadow-sm shadow-zinc-200">
                    </a>
                    <div class="mt-2">
                        <a href="" class="hover:underline underline-offset-2">
                            <h4 class="text-sm text-zinc-200 font-thin text-center line-clamp-1">${settingsAPI.title}</h4>
                        </a>
                        <p class="text-xs flex justify-between">
                            <span>${settingsAPI.original_language}</span>
                            <span>•</span>
                            <span>${settingsAPI.release_date}</span>
                            <span>•</span>
                            <span>${settingsAPI.popularity}</span>
                        </p>
                    </div>
                </div>
        `);
    });
});