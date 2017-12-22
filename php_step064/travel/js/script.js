$(document).ready(function(){
    /*$("li a").on("click", function(){
        $(" li ").children().css("color", "white");
        $(" .active ").children().css("color", "red");
    });*/
    var d = new Date();
    var date = d.getDate();
    var month = d.getMonth();
    var year = d.getFullYear();
    if(date < 10){
        date = "0" + d.getDate();
    }
    if(month < 10){
        month = "0" + d.getMonth();
    }
    var dateValue = date + "." + (month + 1) + "." + year;
    $("[data-datepicker='on']")
        .datepicker()
        .datepicker( "option", "minDate", 0 )
        .datepicker( "option", "dateFormat", "dd.mm.yy" )
        .val(dateValue);
    $("#ui-datepicker-div").attr("data-datepicker-container", "1");
    $( "[data-id='selectmenu']" ).selectmenu();

    $('.thumbnail-box img').height($('.thumbnail-box img').width()/1.6);

    $(window).resize(function(){
        $('.thumbnail-box img').height($('.thumbnail-box img').width()/1.6);
    });

    var logBtnTop = $("#login-button").offset().top,
        logBtnLeft = $("#login-button").offset().left,
        logModalTop = logBtnTop+10,
        logModalLeft = logBtnLeft-920;
    $(".travel-modal-dialog").css({"top": logModalTop});
    var logBtnTop = $("#create-account").offset().top,
        logBtnLeft = $("#create-account").offset().left,
        logModalTop = logBtnTop+10,
        logModalLeft = logBtnLeft-920;
    $(".travel-modal-dialog").css({"top": logModalTop});
});
function showOrHide(param1, param2) {
    param1 = document.getElementById(param1);
    param2 = document.getElementById(param2);
    if (param1.checked) param2.style.display = "block";
    else param2.style.display = "none";
}