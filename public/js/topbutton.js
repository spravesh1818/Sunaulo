// When the user scrolls down 20px from the top of the document, show the button
$(window).scroll(function() {
  if ($(this).scrollTop()) {
    $("#return-to-top").fadeIn();
  } else {
    $("#return-to-top").fadeOut();
  }
  if ($(window).scrollTop() + $(window).height() < $(document).height() - $("#test").height()) {
    $('#return-to-top').css("position", "fixed"); //resetting it
    $('#return-to-top').css("bottom", "0"); //resetting it
  }
  if ($(window).scrollTop() + $(window).height() > $(document).height() - $("#test").height()) {
    $('#return-to-top').css("right", "20px"); // make it related
    $('#return-to-top').css("bottom", "140px"); // 100 px, height of #return-to-top
  }

});

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}