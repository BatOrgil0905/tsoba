<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();



if ( have_posts() ) {
	?>
<div class="w-full" style="height: 65vh; object-fit: cover;">
    <div class="absolute top-1 w-full z-0">		
        <div class="relative">
            <img class="w-full h-[75vh] object-cover " src="http://localhost/tsoba/wp-content/uploads/2022/03/medee1.jpg">		
            <h1 class="absolute text-4xl top-[60%] left-[50%] font-normal uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff">Хайлтын илэрцүүд</h1>				
        </div>
    </div>
</div>
<div></div>
	<header class="page-header alignwide">
		<h1 class="px-[4%] my-2 text-3xl font-light">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Илэрц - "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->

	<div class="px-[4%] border border-black text-xl bg-orange-50">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'Таны хайлтаас бид %d илэрцүүд оллоо.',
					'Таны хайлтаас бид %d илэрцүүд оллоо.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	
<div class="px-[4%] flex flex-col gap-1 my-2 py-2">
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		
		the_post();
		
		/*
		* Include the Post-Format-specific template for the content.
		* If you want to override this in a child theme, then include a file
		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
		*/
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.
	?>
</div>
<div class="my-2 px-[4%] w-full">
	<?php
	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation(1, 5);
	?>

</div>

	<?php
	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}
	?>
<?php get_footer();?>
