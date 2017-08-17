// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }

    if($(window).scrollTop() + $(window).height() < $(document).height() - $("#footer").height()) {
        $('#myBtn').css("position","fixed");    //resetting it
        $('#myBtn').css("bottom","10px"); //resetting it
}
        if($(window).scrollTop() + $(window).height() > $(document).height() - $("#footer").height()) {
        $('#myBtn').css("right","20px"); // make it related
        $('#myBtn').css("bottom","140px"); // 60 px, height of #toTop
 }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
