$(document).ready(function(){
    $('.slider').slick({
        dots: false,
        infinite: true,
        arrows:true,
        prevArrow:'<button type="button" data-role="none" class="slick-prev" style="background-color: black;"><</button>',
        nextArrow:'<button type="button" data-role="none" class="slick-next" style="background-color: black;">></button>',
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true
                }
            },
            {
                breakpoint: 1000,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
                }
            }
            ]
    });

    $('.fade-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        fade: true,
        cssEase: 'linear'
    });
                  

    function active_button(check,add){
        $(check).removeClass("active_news_tab");
        $(add).addClass("active_news_tab");
    }

    function show_text(check,add){
        $(check).removeClass("active show");
        $(add).addClass("active show");
    }

    $(document).on("click", "#events_tab", function(event){
        event.preventDefault();
        active_button(".whats_new_tabs", "#events_tab");
        show_text(".fade", "#events_tab_one");
    });

    $(document).on("click", "#seminars_tab", function(event){
        event.preventDefault();
        active_button(".whats_new_tabs", "#seminars_tab");
        show_text(".fade", "#seminars_tab_two");
    });

    $(document).on("click", "#campuses_tab", function(event){
        event.preventDefault();
        active_button(".whats_new_tabs", "#campuses_tab");
        show_text(".fade", "#campuses_tab_three");
    });

    $(document).on("click", "#students_tab", function(event){
        event.preventDefault();
        active_button(".whats_new_tabs", "#students_tab");
        show_text(".fade", "#students_tab_four");
    });

    $(document).on("click", "#stags_tab", function(event){
        event.preventDefault();
        active_button(".whats_new_tabs", "#stags_tab");
        show_text(".fade", "#stags_tab_five");
    });

    $(document).on("click", "#login", function(){
        window.location.replace("Login/Login.php");
    });

    $(document).on("submit", "#login_data", function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
         url: "../vendor/Process.php?action=Login",
         type: "POST",
         data: formdata,
         cache: false,
         processData: false,
         contentType: false,
         success: function(result){
            if (result == 1) {
                window.location.replace("../Dashboard/Dashboard.php");
            } 
            if(result == 0){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter a Correct Email or Password!',
                  })
            }
        }});
    });


    $(document).on("click", "#logout", function(){
        window.location.replace("Login/Logout.php");
    });

    $("#navbarToggle").click(function () {
        $("#navbarSupportedContent").collapse("toggle");
        // $("#toggler_button").css("color","black");
    });
  
    $(".nav-link").click(function () {
        $("#navbarSupportedContent").collapse("hide");
    });

});