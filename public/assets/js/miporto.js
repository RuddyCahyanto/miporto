// NAVBAR STYLING ON SCROLL
$(document).ready(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() < 10){
       $(".navbar").removeClass("scrolled p-1");
    }
    else{
       $(".navbar").addClass("scrolled p-1");
    }
  });
});
// END OF NAVBAR STYLING ON SCROLL
