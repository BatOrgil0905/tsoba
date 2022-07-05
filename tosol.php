<?php
/*
template name: Tosol
*/
get_header(); ?>

<div class="w-full" style="height: 75vh; object-fit: cover;">
    <div class="swiper myMainSwiper w-full h-full lg:absolute lg:top-1 z-0">
        <div class="swiper-wrapper">
			
				<?php
					$args = array('post_type' => 'slider', 'posts_per_page' => 3, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<div class="swiper-slide">
						<?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
						?>
						<img class="w-full h-[90vh] md:h-full object-cover " src="<?php echo $thumb_url[0] ?>">						
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<div class="swiper-pagination"></div>
		</div>
    </div>
</div>

<section class="">
	<div class="flex flex-col lg:flex-row">
		<div class="h-[250px] lg:h-[800px] w-full lg:w-[33.3%] duration-500 hover:h-[400px] lg:hover:w-[70%] lg:hover:h-[800px]">
			<a href="<?php the_permalink( get_page_by_title('Хадат Вилла 1') );?>">
				<div class="w-full h-full bg-[url('<?php echo get_template_directory_uri(); ?>/images/villa1.jpg')] bg-fixed bg-left bg-cover bg-no-repeat overflow-y-hidden">
					<div class="flex justify-center items-center text-center flex-col h-full w-full">
						<h1 class="text-[48px] leading-[36.2px] text-white font-light" style="font-family: 'Fira Sans Condensed', sans-serif !important;">ХАДАТ ВИЛЛА 1</h1>
						<div class="text-pink-300 font-sans font-normal text-[12px] uppercase mt-4 tracking-[5px]">Хэрэгжүүлсэн төсөл</div>
					</div>
				</div>
			</a>
		</div>
		<div class="h-[250px] lg:h-[800px] w-full lg:w-[33.3%] duration-500 hover:h-[400px] lg:hover:w-[70%] lg:hover:h-[800px]">
			<a href="<?php the_permalink( get_page_by_title('Хадат Вилла 2') );?>">
				<div class="w-full h-full bg-[url('<?php echo get_template_directory_uri(); ?>/images/villa2.jpg')] bg-fixed bg-left bg-cover bg-no-repeat overflow-y-hidden">
					<div class="flex justify-center items-center text-center flex-col h-full w-full">
						<h1 class="text-[48px] leading-[36.2px] text-white font-light" style="font-family: 'Fira Sans Condensed', sans-serif !important;">ХАДАТ ВИЛЛА 2</h1>
						<div class="text-pink-300 font-sans font-normal text-[12px] uppercase mt-4 tracking-[5px]">Онцлох төсөл</div>
					</div>
				</div>
			</a>
		</div>
		<div class="h-[250px] lg:h-[800px] w-full lg:w-[33.3%] duration-300 hover:h-[400px] lg:hover:w-[70%] lg:hover:h-[800px]">
			<a href="<?php the_permalink( get_page_by_title('Хадат Вилла 3') );?>">
				<div class="w-full h-full bg-[url('<?php echo get_template_directory_uri(); ?>/images/villa3.jpg')] bg-fixed bg-left bg-cover bg-no-repeat overflow-y-hidden">
					<div class="flex justify-center items-center text-center flex-col h-full w-full">
						<h1 class="text-[48px] leading-[36.2px] text-white font-light" style="font-family: 'Fira Sans Condensed', sans-serif !important;">ХАДАТ ВИЛЛА 3</h1>
						<div class="text-pink-300 font-sans font-normal text-[12px] uppercase mt-4 tracking-[5px]">Хэрэгжүүлж буй төсөл төсөл</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?> 