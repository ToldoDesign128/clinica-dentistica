// Menu Animation

jQuery( "#hamburger" ).on('click', function() {
  jQuery(".menu").toggleClass("open-menu");
  jQuery("#hamburger").toggleClass("hamburger-active");
  jQuery(".cta a").toggleClass("hidden");
  jQuery(".cta a").toggleClass("block");
});