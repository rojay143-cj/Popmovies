// Genre's dropdown ->
$(function () {
    const genre = $(".movies-genre");
    const sideBar = $("#side-bar");

    $(".drp-genre").click(function (e) {
        e.stopPropagation();
        genre.slideToggle(300);
        
        if (sideBar.hasClass("left-0")) {
            sideBar.removeClass("duration-500 left-0").addClass("-left-96");
        }
    });

    $(document).click(function (e) {
        if (!$(e.target).closest(".movies-genre").length) {
            genre.slideUp(0);
        }
    });

    genre.click(function (e) {
        e.stopPropagation();
    });
});

// Side Bar Animation
$(function () {
    const sideBar = $("#side-bar");
    const navBar = $("#nav-bar");
    const opensidebar = $(".open-side-bar");
    function handleNavBarVisibility() {
        if ($(window).width() > 1024) {
            $('.logo').removeClass('translate-x-3');
        }else{
            navBar.addClass('hidden');
            $('.logo').addClass('translate-x-3');
        }
    }
    $(".open-side-bar").on("click", function () {
        sideBar.removeClass("-left-96").addClass("duration-500 left-0");
        handleNavBarVisibility();
    });
    $(".close-side-bar").on("click", function () {
        sideBar.removeClass("duration-500 left-0").addClass("-left-96");
        handleNavBarVisibility();
    });
    $(document).on("click", function (event) {
        if (!$(event.target).closest("#side-bar, .open-side-bar").length) {
            sideBar.removeClass("duration-500 left-0").addClass("-left-96");
            handleNavBarVisibility();
        }
    });
    $(window).on("resize", function () {
        handleNavBarVisibility();
    });
    handleNavBarVisibility();
});

// Sliding Banner Animation
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="pop-csrf_token"]').attr('content')
        },
    });
    const right = $('.right_');
    const left = $('.left_');
    const slides = $('.slider > div');
    const slidelabels = $('.sliding-label > div');
    let autoslider;
    let index = 0;
    let delay = 400;

    function autoslideshow(){
        autoslider = setInterval(() => {
            index = (index + 1) % slides.length;
            SlideShow();
        }, 4000);
    }
    $('.slider').hover(function () {
        clearInterval(autoslider);
    }, function () {
        autoslideshow();
    });
    function SlideShow() {
        slides.hide().eq(index).fadeIn(delay);
        slidelabels.removeClass('bg-yellow-600').addClass('bg-zinc-700').eq(index).removeClass('bg-zinc-700').addClass('bg-yellow-600');
    }autoslideshow();
    right.click(() => {
        index = (index + 1) % slides.length;
        SlideShow(index);
    });
    left.click(() => {
        index = (index - 1 + slides.length) % slides.length;
        SlideShow(index);
    })
    slidelabels.click(function(){
        index = $(this).index();
        SlideShow(index);
    });
});

// Registration & Login modal
$(document).ready(function () {
    $(".login").click(function (e) {
        e.stopPropagation();
        $(".modallogin").fadeIn(400, function () {
            $(".loginform").slideDown();
        });
        $(".modalreg").fadeOut(0);
    });
    $("#btn_can").click(function () {
        $(".loginform").slideUp(200, function () {
            $(".modallogin").fadeOut(400);
        });
    });

    $(".signup").click(function (e) {
        e.stopPropagation();
        $(".modalreg").fadeIn(400, function () {
            $(".registrationform").slideDown();
        });
        $(".modallogin").fadeOut(0);
    });

    $("#btn_cancel").click(function () {
        $(".registrationform").slideUp(200, function () {
            $(".modalreg").fadeOut(400);
        });
    });
    $(document).on('click',function(e){
        if(!$(e.target).closest('.loginform, .registrationform').length){
            $(".modalreg, .modallogin").fadeOut();
        }
    });
});

// Register Code
$(document).ready(function(){
    $('#btn_register').on('click',function(e){
        e.preventDefault();
        let form = $('#RegisterForm')[0];
        let UserData = new FormData(form);

        $.ajax({
            url: '/home/register',
            method: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            data: UserData,
            success: function (response) { 
                $('.success').text(response.message).parent().slideDown(100).show();
                setTimeout(function(){
                    $('.success').text(response.message).parent().slideUp(100).hide();
                    $('.modalreg').fadeOut(200);
                }, 3000);
             },
             error: function (jqXHR, textstatus, errorThrown) {
                let errorMessage = jqXHR.responseJSON?.error || 'An unexpected error occurred';
                $('.error').text(errorMessage).parent().slideDown(100).show();
                setTimeout(function(){
                    $('.error').text(errorMessage).parent().slideUp(100).hide();
                }, 3000);
            }
        });
    });
});

// Error Alert
$(document).ready(function () {
    setTimeout(()=>{
        $('.alert').remove();
    },3000);
})