<?php get_header(); 
if (!defined('ABSPATH')) {
    exit;
}?>
<main class="h-[80vh] flex flex-wrap items-center justify-center">
    <div class="w-full text-center">
        <h1 class="w-auto text-2xl text-sky-700">Pagina non trovata</h1>
        <p class="w-auto text-[64px] text-sky-800 mb-4">Errore 404</p>
        <a class="border border-sky-800 hover:border-sky-50 text-sky-800 hover:text-sky-50 bg-transparent hover:bg-sky-800 px-5 py-3 transition-all duration-500" href="<?php echo home_url();?>">Torna alla Home</a>
    </div>
</main>
<?php get_footer(); ?>