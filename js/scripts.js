$(function(){
    $( "#timeFormat" ).flatpickr({
        noCalendar: true,
        enableTime: true,
        time_24hr: true,
        defaultHour: new Date().getHours(),
        defaultMinute: new Date().getMinutes()
        });

    $(".nav-link").on("click", function(){
        $(".navbar-nav ").find(".active").removeClass("active");
        $(this).addClass("active");
        $('.navbar-collapse').collapse('hide');
        });
});