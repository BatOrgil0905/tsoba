<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<div class="w-full" style="height: 100vh; object-fit: cover;">
    <div class="absolute top-1 w-full z-0">		
        <div class="relative">
            <img class="w-full h-[120vh] object-cover " src="http://localhost/tsoba/wp-content/uploads/2022/03/404.jpg">		
            <h1 class="absolute text-4xl top-[60%] left-[50%] font-normal uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff">404 Error</h1>				
        </div>
    </div>
</div>

<div class="bg-">
	<header class="flex items-center justify-center">
		<h1 class="text-center my-4 text-4xl font-light"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
	</header><!-- .page-header -->

	<div class="flex items-center justify-center">
		<div class="text-center my-1 text-2xl font-light">
			<p class="text-[#161c24]">
				<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
				<div class="text-center my-2 bg-[#161c24]">
					<?php get_search_form(); ?>
				</div>
			<div class="my-2">
				<a href="http://localhost/tsoba">
					<button class="uppercase text-sm bg-[#161c24] text-white border-2 border-rose-800 p-2 duration-300 hover:bg-rose-800">
						Нүүр Хуудас руу буцах
					</button>
				</a>
			</div>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->
</div>

<?php
get_footer();
