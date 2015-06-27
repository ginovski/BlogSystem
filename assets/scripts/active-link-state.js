$(function() {
    var pgurl = window.location.href;
    $(".nav li a").each(function(){
        if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
            $(this).parent().addClass("active");
    })
});
