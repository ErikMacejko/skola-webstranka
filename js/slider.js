$("#slider").on("input", function() {
    $('#resize').css("font-size", $(this).val() + "px");
});