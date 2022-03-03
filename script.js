$.fn.shuffleChildren = function() {
    $.each(this.get(), function(index, el) {
        var $el = $(el);
        var $find = $el.children();

        $find.sort(function() {
            return 0.5 - Math.random();
        });

        $el.empty();
        $find.appendTo($el);
    });
};



$(".c-checkbox-0, .c-checkbox-1").click(function() {
    $('.grid').shuffleChildren();
    if ($(".captcha > .challenge").css("display") == "none") {
        $(".captcha > .challenge").css("display", "block");
        $('.grid > div').click(function() {
          $(this).toggleClass('selected');
        });
    } else {
        $(".captcha > .challenge").css("display", "none");
        $.each($('.grid > div').get(), function(index, el) {
          $(el).removeClass('selected');
        });
    }
});




$(".captcha > .challenge > .below > .main").click(function() {
    $(".captcha > .challenge").css("display", "none");
    $('.c-checkbox-0').remove();
    $('.c-checkbox-1').addClass("c-checkbox-borderAnimation-33");
    $('.c-checkbox-3').addClass("c-checkbox-spinnerAnimation");
    $('.c-checkbox-2').addClass("c-checkbox-spinner");
    $('.c-checkbox-4').addClass("c-checkbox-checkmark");
    $('.c-checkbox-4').delay(3500).queue(function() {
        $('.c-checkbox-5').addClass("c-checkbox-checked");
        $('.text').text("You are a robot.")
        $('.text').css("color", "red")
    });
});