$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="pop-csrf_token"]').attr("content"),
        },
    });
    new DataTable("#production");
    new DataTable("#country");
    new DataTable("#genre");
    new DataTable("#movie");
    $(".dt-input").attr("placeholder", "Type here...");

    setTimeout(function () {
        $(".alert").slideUp(200);
    }, 3000);
});
$(function () {
    $(".setting").on("click", function (e) {
        e.stopPropagation();
        $(".settings").toggle();
    });
    $(document).on("click", function (e) {
        if (!$(e.target).closest(".settings").length) {
            $(".settings").fadeOut();
        }
        if (!$(e.target).closest(".modal-content").length) {
            $(".modal-add_role").fadeOut(150);
            $(".modal-add_country").fadeOut(150);
            $(".modal-add_genre").fadeOut(150);
            $(".modal-add_movie").fadeOut(150);
        }
        if (!$(e.target).closest(".sidebar").length) {
            $(".sidebar")
                .fadeOut(100)
                .removeClass("left-0")
                .addClass("-left-72");
        }
    });
});

// SIDE-BAR OPTIONS
$(document).ready(function () {
    var TEAM = localStorage.getItem("TEAM") === "true";
    var COUNTRY = localStorage.getItem("COUNTRY") === "true";
    var GENRE = localStorage.getItem("GENRE") === "true";
    var MOVIE = localStorage.getItem("MOVIE") === "true";

    if (COUNTRY) {
        $(".COUNTRY").show();
    } else {
        $(".COUNTRY").hide();
    }

    if (TEAM) {
        $(".TEAM").show();
    } else {
        $(".TEAM").hide();
    }

    if (GENRE) {
        $(".GENRE").show();
    } else {
        $(".GENRE").hide();
    }
    if (MOVIE) {
        $(".MOVIE").show();
    } else {
        $(".MOVIE").hide();
    }

    $("#COUNTRY").on("click", function () {
        $(".TEAM").hide();
        localStorage.setItem("TEAM", "false");
        $(".GENRE").hide();
        localStorage.setItem("GENRE", "false");
        $(".MOVIE").hide();
        localStorage.setItem("MOVIE", "false");
        $(".COUNTRY").each(function () {
            if ($(this).is(":visible")) {
                $(this).hide();
                localStorage.setItem("COUNTRY", "false");
            } else {
                $(this).show();
                localStorage.setItem("COUNTRY", "true");
            }
        });
    });
    $("#PRODUCTION").on("click", function () {
        $(".COUNTRY").hide();
        localStorage.setItem("COUNTRY", "false");
        $(".GENRE").hide();
        localStorage.setItem("GENRE", "false");
        $(".MOVIE").hide();
        localStorage.setItem("MOVIE", "false");
        $(".TEAM").each(function () {
            if ($(this).is(":visible")) {
                $(this).hide();
                localStorage.setItem("TEAM", "false");
            } else {
                $(this).show();
                localStorage.setItem("TEAM", "true");
            }
        });
    });
    $("#GENRE").on("click", function () {
        $(".TEAM").hide();
        localStorage.setItem("TEAM", "false");
        $(".COUNTRY").hide();
        localStorage.setItem("COUNTRY", "false");
        $(".MOVIE").hide();
        localStorage.setItem("MOVIE", "false");
        $(".GENRE").each(function () {
            if ($(this).is(":visible")) {
                $(this).hide();
                localStorage.setItem("GENRE", "false");
            } else {
                $(this).show();
                localStorage.setItem("GENRE", "true");
            }
        });
    });
    $("#MOVIE").on("click", function () {
        $(".TEAM").hide();
        localStorage.setItem("TEAM", "false");
        $(".COUNTRY").hide();
        localStorage.setItem("COUNTRY", "false");
        $(".GENRE").hide();
        localStorage.setItem("GENRE", "false");
        $(".MOVIE").each(function () {
            if ($(this).is(":visible")) {
                $(this).hide();
                localStorage.setItem("MOVIE", "false");
            } else {
                $(this).show();
                localStorage.setItem("MOVIE", "true");
            }
        });
    });
});

// Add Production Modal
$(function () {
    const addrole = $(".btn-add_role");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_role").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_role").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Production Modal & Edit modal
$(document).ready(function () {
    $('button[class^="btn-edit_cast"]').on("click", function () {
        let prod_id = $(this).val();
        $(".modal-edit_role_" + prod_id).fadeIn(200);
    });
    $('button[class^="btn-delete_cast"]').on("click", function () {
        let prod_id = $(this).val();
        $(".modal-delete_role_" + prod_id).fadeIn(200);
    });
});

// Add Country Modal
$(function () {
    const addrole = $(".btn-add_country");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_country").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_country").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Country Modal & Edit modal
$(document).ready(function () {
    $('button[class^="btn-edit_country"]').on("click", function () {
        let country_id = $(this).val();
        $(".modal-edit_country_" + country_id).fadeIn(200);
    });
    $('button[class^="btn-delete_country"]').on("click", function () {
        let country_id = $(this).val();
        $(".modal-delete_country_" + country_id).fadeIn(200);
    });
});

// Add Genre Modal
$(function () {
    const addrole = $(".btn-add_genre");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_genre").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_genre").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Genre Modal & Edit modal
$(document).ready(function () {
    $('button[class^="btn-edit_genre]').on("click", function () {
        let genre_id = $(this).val();
        $(".modal-edit_genre_" + genre_id).fadeIn(200);
    });
    $('button[class^="btn-delete_genre"]').on("click", function () {
        let genre_id = $(this).val();
        $(".modal-delete_genre_" + genre_id).fadeIn(200);
    });
});

// Add Movie Modal
$(function () {
    const addrole = $(".btn-add_movie");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_movie").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_movie").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Movie Modal & Edit modal
$(document).ready(function () {
    let btn_edit = $('button[id^="btn-edit_movie_"]');
    let btn_delete = $('button[id^="btn-delete_movie_"]');
    btn_edit.click(function () {
        let movie_id = $(this).attr("id").split("_").pop();
        $(".modal-edit_movie_" + movie_id).fadeIn(200);
    });
    btn_delete.click(function () {
        let prod_id = $(this).attr("id").split("_").pop();
        $(".modal-delete_movie_" + movie_id).fadeIn(200);
    });
});

// Whole Movie page codes
$(document).ready(function () {
    let append_team = $('button[id^="append_team_"]');
    let append_genre = $('button[id^="append_genre_"]');
    let append_country = $('button[id^="append_country_"]');
    let GCP = $(".G_C_P");
    let AddForm = $("#AddForm")[0];
    let categorizeGCP = {
        genre: new Set(),
        country: new Set(),
        team: new Set(),
    };

    // Function to add item to GCP and handle duplicates
    function handleAdd(item_name, bgColor, textColor, category) {
        if (!categorizeGCP[category].has(item_name)) {
            GCP.append(
                `<p title="${category}" class="p-1 ${bgColor} shadow-sm ${textColor}">${item_name}</p>`
            );
            categorizeGCP[category].add(item_name);
            $(".error").text("").hide();
        } else {
            $(".error")
                .text(`${item_name} already exists in ${category}`)
                .show();
        }
    }

    function searchCast(input, cast_name){
        input.on('keyup', function () {
            var value = $(this).val().toLowerCase();
            cast_name.filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }
    searchCast($('.append_search'), $('.cast_names li'));

    append_team.click(function () {
        let prod_name = $(this).closest("li").text().trim();
        handleAdd(prod_name, "bg-gray-300", "text-zinc-800", "team");
    });

    append_genre.click(function () {
        let genre_name = $(this).closest("li").text().trim();
        handleAdd(genre_name, "bg-red-600", "text-gray-300", "genre");
    });

    append_country.click(function () {
        let country_name = $(this).closest("li").text().trim();
        handleAdd(country_name, "bg-yellow-600", "text-gray-300", "country");
    });
    // Add Movies
    $("#btn_save").on("click", function (e) {
        e.preventDefault();

        let GCP = {
            team: Array.from(categorizeGCP.team),
            genre: Array.from(categorizeGCP.genre),
            country: Array.from(categorizeGCP.country),
        };

        switch (true) {
            case GCP.team.length == 0:
                $(".error").text("Production Team is missing!").show();
                return;
            case GCP.genre.length == 0:
                $(".error").text("Genre is empty!").show();
                return;
            case GCP.country.length == 0:
                $(".error").text("Every movie has a country!").show();
                return;
            default:
                break;
        }

        let formData = new FormData(AddForm);
        formData.append("GCP", JSON.stringify(GCP));
        $.ajax({
            url: "/Pop Admin Panel/AddMovie",
            method: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success: function (response) {
                deleteMovie();
                $(".success").text(response).show();
                getMovies();
            },
            error: function (error) {
                let errorMessage =
                    error.responseJSON?.message ||
                    "An unexpected error occured.";
                $(".error").text(errorMessage).show();
            },
        });
    });
    // Fetch Movies
    getMovies();
    function getMovies() {
        $.ajax({
            url: "/Pop Admin Panel/fetchmovies",
            method: "GET",
            dataType: "json",
            success: function (response) {
                $("#DT_movie").html("");
                $.each(response.movies, function (key, movie) {
                    $("#DT_movie").append(`
                        <tr>
                        <td class="px-4 py-2">
                            <img src="${movie.poster_url}" alt="${movie.title}" class="rounded-sm object-cover w-20 h-28">
                        </td>
                        <td class="py-2 px-1 border-b border-stone-600">${movie.title}</td>
                        <td class="py-2 px-1 border-b border-stone-600">${movie.type}</td>
                        <td class="py-2 px-1 border-b border-stone-600">${movie.release_date}</td>
                        <td class="py-2 px-1 border-b border-stone-600">${movie.rt_score}</td>
                        <td class="p-2 px-1 text-center border-b border-stone-600">
                            <button type="button" value="${movie.movie_id}" data-title="${movie.title}" class="btn-edit_movie text-blue-500 hover:text-blue-700">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" value="${movie.movie_id}" data-title="${movie.title}" class="btn-delete_movie text-red-500 hover:text-red-700 ml-2">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                    `);
                });
            },
            error: function (error) {
                let errorMessage =
                    error.responseJSON?.message ||
                    "An unexpected error occured during the execution.";
                $(".error").text(errorMessage).show();
            },
        });
    }
    $(document).on("click", ".btn-delete_movie", function (e) {
        e.stopPropagation();
        let movie_id = $(this).val();
        let movie_title = $(this).data("title");
        $("#delete_movies").append(`
            <div class="modal-delete_movie_${movie_id} closedelete fixed inset-0 flex items-center justify-center z-30" style="display: none">
            <div class="modal-content bg-gray-200 text-stone-800 rounded-lg shadow-lg w-auto relative p-6 z-20">
                <div class="flex w-full justify-center"><i
                        class="fa-solid fa-triangle-exclamation fa-beat-fade text-4xl text-red-600"></i></div>
                <div class="modal-header flex justify-between items-center mb-6">
                    <h4 class="modal-title text-lg font-bold tracking-widest text-nowrap">Are you sure you want to remove
                        ${movie_title}?
                    </h4>
                    <button type="button"
                        class="close-deletemodal absolute right-3 top-3 text-gray-400 hover:text-gray-600 ml-10">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>
                <div>
                    <p class="text-xs w-96 font-semibold tracking-wider">Note: This will delete this person permanently. You
                        cannot undo this action.</p>
                    <div class="modal-footer flex justify-start space-x-3 mt-10">
                        <button type="button"
                            class="close-deletemodal px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 border border-stone-800">
                            Cancel
                        </button>
                        <button type="button" value="${movie_id}"
                            class="delete_movie px-4 py-2 bg-red-700 text-sm text-gray-200 rounded hover:bg-red-600 focus:outline-none">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
        </div>
        `);
        $(`.modal-delete_movie_${movie_id}`).fadeIn(300);
    });
    function deleteModal() {
        $("#delete_movies").animate({ opacity: 0 }, 300, function () {
            $(this).empty();
            $(this).css({ opacity: 1 });
        });
    }
    
    function deleteMovie() {
        let movie_id = $('.delete_movie').val();
        $.ajax({
            url: "/Pop Admin Panel/DeleteMovie",
            method: "POST",
            data: { movie_id },
            success: function (response) {
                deleteModal();
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });
    }
    
    $(document).on("click", ".delete_movie", function () {
        deleteMovie();
        getMovies();
    });
    
    $(document).on("click", ".close-deletemodal", function () {
        deleteModal();
    });
});
