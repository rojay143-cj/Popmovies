const Animesettings = {
	async: true,
	crossDomain: true,
	url: 'https://myanimelist.p.rapidapi.com/anime/top/all?p=1',
	method: 'GET',
	headers: {
		'x-rapidapi-key': 'c0d2e3fcb7msh7aeac413237a4bfp191623jsn9d8995063512',
		'x-rapidapi-host': 'myanimelist.p.rapidapi.com'
	}
};

$.ajax(Animesettings).done(function (response) {
    $(".anime").empty();
    $.each(response, function (key, animeAPI) {
        $(".anime").append(`
                <div class="w-full h-80 py-8">
                    <a href="">
                        <img src="${animeAPI.picture_url}" title="${animeAPI.title}" alt="${animeAPI.title}"
                            class="w-full h-full rounded-md object-cover shadow-sm shadow-zinc-200">
                    </a>
                    <div class="mt-2">
                        <a href="" class="hover:underline underline-offset-2">
                            <h4 class="text-sm text-zinc-200 font-thin text-center line-clamp-1">${animeAPI.title}</h4>
                        </a>
                        <p class="text-xs flex justify-between">
                            <span>Rank: ${animeAPI.rank}</span>
                            <span>•</span>
                            <span>${animeAPI.type}</span>
                            <span>•</span>
                            <span>${animeAPI.score}</span>
                        </p>
                    </div>
                </div>
        `);
    });
});