<?php get_header(); ?> 

<div class="w-full" style="height: 90vh; object-fit: cover;">
    <div class="swiper myMainSwiper w-full h-full lg:absolute lg:top-1 lg:z-0">
        <div class="swiper-wrapper">
			
				<?php
					$args = array('post_type' => 'slider', 'posts_per_page' => 9, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<div class="swiper-slide">
						<?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
						?>
						<img class="relative w-full h-[90vh] md:h-full object-cover " src="<?php echo $thumb_url[0] ?>">						
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<div class="swiper-pagination"></div>
		</div>
    </div>
</div>
<section class="bg-white ">
	<div class="h-[120px] w-[2px] border border-red-600 mx-auto -mt-24 z-50"></div>
</section>

<?php
	$args = array('post_type' => 'home', 'posts_per_page' => 3, 'order' => 'ASC');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>

	<?php the_content(); ?>

<?php endwhile; ?>
<?php wp_reset_query(); ?>
<!-- <section class="relative">
	<div class="w-full content-['TSOBA'] flex justify-center text-gray-100 mt-[25px] lg:-mt-[45px]">
		<div data-aos="fade-down" data-aos-duration="500">
			<span class="inline-block text-[5rem] px-2 md:text-[9rem] md:px-6 lg:text-[15rem] lg:!px-12 font-bold indent-0" style="opacity: 1; transform: translateY(0px) translateZ(0px)">T</span>
		</div>
		<div data-aos="fade-down" data-aos-duration="500">
			<span class="inline-block text-[5rem] px-2 md:text-[9rem] md:px-6 lg:text-[15rem] lg:!px-12 font-bold indent-0" style="opacity: 1; transform: translateY(0px) translateZ(0px)">S</span>
		</div>
		<div data-aos="fade-down" data-aos-duration="1000">
			<span class="inline-block text-[5rem] px-2 md:text-[9rem] md:px-6 lg:text-[15rem] lg:!px-12 font-bold indent-0" style="opacity: 1; transform: translateY(0px) translateZ(0px)">O</span>
		</div>
		<div data-aos="fade-down" data-aos-duration="1000">
			<span class="inline-block text-[5rem] px-2 md:text-[9rem] md:px-6 lg:text-[15rem] lg:!px-12 font-bold indent-0" style="opacity: 1; transform: translateY(0px) translateZ(0px)">B</span>
		</div>
		<div data-aos="fade-down" data-aos-duration="1500">
			<span class="inline-block text-[5rem] px-2 md:text-[9rem] md:px-6 lg:text-[15rem] lg:!px-12 font-bold indent-0" style="opacity: 1; transform: translateY(0px) translateZ(0px)">A</span>
		</div>
	</div>
	<div class="flex flex-col md:flex-row justify-around px-[10%]">
		<div class="flex">
			<div class="relative !ml-16 md:mx-0 -mt-8 md:-mt-16 lg:-mt-28 z-30">
				<div data-aos="fade-down">
					<img class="w-full h-full lg:h-auto border-none z-30" src="http://localhost/tsoba/wp-content/uploads/2022/02/img1.png" alt="img1">
				</div>
			</div>
			<div class="hidden lg:block absolute z-10 mr-[25rem] bottom-1">
				<div data-aos="fade-up" data-aos-duration="2000">
					<img class="h-auto" src="http://localhost/tsoba/wp-content/uploads/2022/02/img1.1.png" alt="">
				</div>
			</div>
		</div>
		
		<div class="w-full lg:w-[38%] mt-12 z-20">
			<div data-aos="fade-left">
				<p class="text-[#A60E1C]" style="font-family: 'Fira Sans Condensed', sans-serif;">ЦОБА ХХК</p>
				<h1 class="py-4">
					<span class="text-[38px] leading-[56px]" style="font-family: 'Fira Sans Condensed', sans-serif;">БИДНИЙ</span>
					<span class="text-[#A60E1C] text-[38px] leading-[56px]" style="font-family: 'Fira Sans Condensed', sans-serif;">ОНЦЛОГ</span>
				</h1>
				<p class="text-justify" style="font-family: 'Fira Sans Condensed', sans-serif;">
					Бид аливааг хийхдээ бусдын олж хараагүй, хийж чадахгүй зүйлсийг түрүүлж хийнэ гэж зорьдог. Бусдын олж хараагүй, хийж чадахгүй зүйлсийг түрүүлж хийдэг арга барил нь биднийг шинийг санаачлах, илүү өргөн хүрээтэй сэтгэхэд хүргэдэг.
				</p>
			</div>
		</div>
	</div>
</section> -->

<section class="mt-24">
	<div class="flex flex-col lg:flex-row">
		<!-- <?php
			$args = array('post_type' => 'tusluud', 'posts_per_page' => 5, 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<a href="<?php the_permalink();?>">
			<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
			?>
			<div class="w-full h-full cursor-pointer bg-fixed bg-left bg-cover bg-no-repeat overflow-y-hidden bg-[url("<?php echo $thumb_url[0] ?>")]">
				<div class="flex justify-center items-center text-center flex-col h-full w-full">
					<h1 class="text-[48px] leading-[36.2px] text-white font-light uppercase" style="font-family: 'Fira Sans Condensed', sans-serif !important;"><?php the_title(); ?></h1>
					<div class="text-pink-300 font-sans font-normal text-[12px] uppercase mt-4 tracking-[5px]"><?php the_content(); ?></div>
				</div>
			</div>
		</a>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?> -->
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
						<div class="text-pink-300 font-sans font-normal text-[12px] uppercase mt-4 tracking-[5px]">Хэрэгжүүлж буй төсөл</div>
					</div>
				</div>
			</a>
		</div>
		<div class="h-[250px] lg:h-[800px] w-full lg:w-[33.3%] duration-300 hover:h-[400px] lg:hover:w-[70%] lg:hover:h-[800px]">
			<a href="<?php the_permalink( get_page_by_title('Хадат Вилла 4') );?>">
				<div class="w-full h-full bg-[url('<?php echo get_template_directory_uri(); ?>/images/villa4.jpg')] bg-fixed bg-right bg-cover bg-no-repeat overflow-y-hidden">
					<div class="flex justify-center items-center text-center flex-col h-full w-full">
						<h1 class="text-[48px] leading-[36.2px] text-white font-light" style="font-family: 'Fira Sans Condensed', sans-serif !important;">ХАДАТ ВИЛЛА 4</h1>
						<div class="text-pink-300 font-sans font-normal text-[12px] uppercase mt-4 tracking-[5px]">Шинэ төсөл</div>
					</div>
				</div>
			</a>
		</div>
		
	</div>
</section>

<section class="w-full h-auto bg-[url('<?php echo get_template_directory_uri(); ?>/images/bg2.jpg')] bg-cover bg-no-repeat">
	<div class="pt-16">
		<h1 class="pt-12 py-4 text-center">
			<span class="text-[25px] leading-[22px]" style="font-family: 'Fira Sans Condensed', sans-serif;">ХАМТРАГЧ</span>
			<span class="text-[#A60E1C] text-[25px] leading-[22px]" style="font-family: 'Fira Sans Condensed', sans-serif;">БАЙГУУЛАГУУД</span>
		</h1>
	</div>
	<div class="px-[2%]">
		<div class="swiper sliderSwiper mt-6 flex flex-row justify-around items-center">
			<div class="swiper-wrapper">
				<?php
					$args = array('post_type' => 'hamtragch', 'posts_per_page' => 7, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
		
					<div class="swiper-slide w-[250px] h-auto pb-20">
						<?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
						?>
						<img src="<?php echo $thumb_url[0] ?>">
					</div>
		
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>	
</section>


<section class="relative w-full h-auto bg-[url('<?php echo get_template_directory_uri(); ?>/images/bg3.jpg')] bg-cover bg-no-repeat">
	<div class="px-[8%]">
		<div class="absolute h-[100px] w-[.5px] border border-red-600 !mx-auto -mt-8 z-50 "></div>
		<div class="text-center">
			<h1 class="py-16 text-center">
				<div class="flex items-center justify-center">
					<h3 class="text-[26px] text-gray-400 font-light" style="font-family: 'Fira Sans Condensed', sans-serif;">ХАДАТ ВИЛЛА ТӨСӨЛ</h3>
				</div>
				<span class="text-[38px] leading-[56px]" style="font-family: 'Fira Sans Condensed', sans-serif;">МЭДЭЭ</span>
				<span class="text-[#A60E1C] text-[38px] leading-[56px]" style="font-family: 'Fira Sans Condensed', sans-serif;">МЭДЭЭЛЭЛ</span>
			</h1>
		</div>
	
		<div class="swiper newsSwiper pb-6 flex flex-col justify-around items-center">
			<div class="swiper-wrapper">
				<?php
					$args = array('post_type' => 'medee', 'posts_per_page' => 3, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<a href="<?php the_permalink();?>">
						<div class="swiper-slide relative mx-2 !overflow-hidden group">
							<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
							?>
							<img class="mx-2 w-full h-[420px] duration-300 group-hover:scale-105 group-hover:contrast-75" src="<?php echo $thumb_url[0] ?>">
							<div class="absolute top-0 right-0 p-2 w-auto h-auto bg-red-600 hidden duration-300 group-hover:block">
								<p class="text-md text-white font-medium text-center" style="font-family: 'Fira Sans Condensed', sans-serif;">
									<i class="fa-solid fa-arrow-right-long"></i>
								</p>
							</div>
							<div class="absolute p-6 bottom-0">
								<p class="text-white text-sm italic"><?php the_date('Y/m/d'); ?></p>
								<h1 class="text-lg py-2 font-normal text-white duration-300 hover:text-black" style="font-family: 'Fira Sans Condensed', sans-serif;">
									<?php the_title(); ?>
								</h1>
							</div>
						</div>
					</a>
		
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>


<?php get_footer(); ?>
