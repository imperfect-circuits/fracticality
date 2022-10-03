$(document).ready(function() {
 $('.mouseShift').mouseenter(function() {
  $(this).css('width','200px');
 });
 $('.mouseShift').mouseleave(function() {
  $(this).css('width','100px');
 });
});