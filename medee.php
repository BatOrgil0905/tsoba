<?php
/*
template name: Medee
*/
get_header(); ?>

<div class="w-full" style="height: 75vh; object-fit: cover;">
    <div class="absolute top-1 w-full z-0">		
        <div class="relative">
            <img class="w-full h-[75vh] object-cover " src="http://localhost/tsoba/wp-content/uploads/2022/03/medee1.jpg">		
            <h1 class="absolute text-4xl top-[60%] left-[50%] font-normal uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff">Мэдээ мэдээлэл</h1>				
        </div>
    </div>
</div>

<section class="px-[8%]">
    <div class="mb-6 grid grid-cols-2 lg:grid-cols-3 justify-content-around items-center">
				<?php
					$args = array('post_type' => 'medee', 'posts_per_page' => 9, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<a href="<?php the_permalink();?>">
						<div class="group relative mx-2 overflow-hidden">
							<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
							?>
							<img class="w-[95%] h-[420px] duration-300 group-hover:scale-105 group-hover:contrast-75" src="<?php echo $thumb_url[0] ?>">
							<div class="absolute top-0 right-2.5 p-2 w-auto h-auto bg-red-600 hidden duration-300 group-hover:block">
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
                            <!-- <div class="absolute px-6 py-2 bottom-0 hidden duration-300 group-hover:block">
                                <p class="text-white text-md font-light" style="font-family: 'Fira Sans Condensed', sans-serif;">
                                    <?php $content = the_content('', '', false); 
                                    echo substr($content, 0, 5);
                                    if (strlen($content) > 5){
                                        echo '&hellip;';
                                    } ?>
                                </p>
                            </div> -->
						</div>
					</a>
		
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
		</div>
</section>
<?php get_footer(); ?>