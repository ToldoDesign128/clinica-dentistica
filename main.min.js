// Prova
// Menu Animation

jQuery( "#hamburger" ).on('click', function() {
  jQuery(".menu-mobile").toggleClass("open-menu");
  jQuery("#hamburger").toggleClass("hamburger-active");
});