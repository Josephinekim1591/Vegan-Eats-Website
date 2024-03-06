
$("#menu-icon").click(function () {
    if ($("#nav-list").hasClass("hidden")) {
        $("#nav-list").removeClass("hidden");
    } else {
        $("#nav-list").addClass("hidden");
    }
});

$(window).resize(function () {
    if ($(document).width() < 600) {
        $("#menu-icon").removeClass("hidden");
        $("#nav-list").addClass("hidden");
    } else {
        $("#menu-icon").addClass("hidden");
        $("#nav-list").removeClass("hidden");
    }
});


// reloading page
$(document).ready(function () {
    if ($(document).width() < 600) {
        $("#menu-icon").removeClass("hidden");
        $("#nav-list").addClass("hidden");
    } else {
        $("#menu-icon").addClass("hidden");
        $("#nav-list").removeClass("hidden");
    }
});
