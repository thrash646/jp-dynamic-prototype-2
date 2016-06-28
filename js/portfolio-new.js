 // portfolio
 $('.gallery ul li a').click(function() {
   var itemID = $(this).attr('href');
   $('.gallery ul').addClass('item_open');
   $(itemID).addClass('item_open');
     $("#cover").addClass("cover");
   return false;
 });
 $('.close').click(function() {
   $('.port, .gallery ul').removeClass('item_open');
   $("#cover").removeClass("cover");  
   return false;
 });
$('#cover').click(function() {
   $('.port, .gallery ul').removeClass('item_open');
   $("#cover").removeClass("cover");  
   return false;
 });
// $(".gallery ul li a").click(function() {
//   $('html, body').animate({
//     scrollTop: parseInt($("#top").offset().top)
//   }, 400);
// });