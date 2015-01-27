// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
  resizeDiv();
});
window.onresize = function(event) {
  resizeDiv();
};
function resizeDiv() {
  vpw = $(window).width(); // Viewport Width
  vph = $(window).height(); // Viewport Height

  headerH = $('#masthead').height();

// Your Styles
// Home page background image height
$('.fixed_bg_home').css({'height': vph + 50 + 'px'});
}
