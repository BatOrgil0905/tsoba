<?php get_header(); ?>

<div class="w-full" style="height: 45vh; object-fit: cover;">
    <div class="w-full h-full lg:absolute lg:top-1 lg:z-0">		
        <div class="relative">
            <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            ?>
            <img class="w-full h-[50vh] object-cover bg-top opacity-85" src="<?php echo $thumb_url[0] ?>">		
            <h1 class="absolute text-2xl lg:text-4xl text-center top-[50%] left-[50%] lg:top-[60%] lg:left-[50%] font-normal uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff"><?php the_title(); ?></h1>				
        </div>
    </div>
</div>

<section class="px-[5%] mt-24 lg:mt-0">
    <div class="">
        <div class="row">
            <div class="bg-white w-full lg:w-9/12">
                <div class="px-4">
                    <p class="indent-6 my-2">
                        <?php the_content();?>
                    </p>
                </div>
                <hr class="bg-[#a60e1c] mt-4">
                <div class="my-4">
                    <h1 class="my-2 text-left pl-2 text-3xl font-light">Related Post</h1>

                    <div class="swiper swiperNews mb-6 flex flex-row justify-around items-center">
                        <div class="swiper-wrapper">
                            <?php
                                $args = array('post_type' => 'medee', 'posts_per_page' => 2, 'order' => 'ASC');
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                                <a href="<?php the_permalink();?>">
                                    <div class="swiper-slide group relative mx-2 !overflow-hidden">
                                        <?php
                                            $thumb_id = get_post_thumbnail_id();
                                            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                                        ?>
                                        <img class="w-[95%] h-[380px] duration-300 group-hover:scale-105 group-hover:contrast-75" src="<?php echo $thumb_url[0] ?>">
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
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="my-6 bg-gray-100 p-4">
                            <h1 class="text-5xl text-start">
                                <span class="text-[35px] leading-[46px] font-light uppercase" style="font-family: 'Fira Sans Condensed', sans-serif;">Сэтгэгдэл</span>
                                <span class="text-[#A60E1C] text-[35px] leading-[46px] font-light uppercase" style="font-family: 'Fira Sans Condensed', sans-serif;">үлдээх</span>
                                <div class="">
                                    <p class="mt-3 pb-2 text-start text-[16px] leading-[24px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                                    Та дараах хэсгийг ашиглан манай байгууллагын талаархи дэлгэрэнгүй мэдээллийг имэйл хаягаар авах боломжтой.
                                    </p>
                                </div>
                            </h1>
                        <form class="flex flex-col" action="">
                            <!-- <div class="flex flex-row items-center gap-2">
                                <input class="w-full my-3 py-2 px-2 border-b border-gray-600 bg-gray-100" type="text" id="name" placeholder="Таны Нэр">
                                <input class="w-full my-3 py-2 px-2 border-b border-gray-600 bg-gray-100" type="text" id="name" placeholder="Таны Имэйл">
                            </div>
                            <textarea name="" id="" class="w-full my-3 py-2 px-2 border-b border-gray-600 bg-gray-100 resize" placeholder="Таны Мэссэж"></textarea>

                            <input class="mt-8 py-2 px-4 bg-gray-100 h-12 w-32 border-2 border-gray-900 text-gray-900 duration-300 hover:!bg-gray-900 hover:text-white" style="font-family: 'Fira Sans Condensed', sans-serif;" type="submit" value="Илгээх">
                         -->
                         <?php echo do_shortcode('
                            [contact-form-7 id="181" title="comment1"]
                        ')?>
                        </form>
                    </div>


                </div>
            </div>

            <!-- ---Sidebar-- -->

            <div class="w-full lg:w-3/12">
                <div class="bg-[url(http://localhost/tsoba/wp-content/uploads/2022/03/author_widget_bg.jpg)] bg-no-repeat bg-cover bg-center p-4 border border-gray-600">
                    <div class="">
                        <img class="w-[200px] h-[200px] lg:w-1/2 lg:h-auto rounded-full !mx-auto" src="http://localhost/tsoba/wp-content/uploads/2022/03/Tsoba_author_photo-300x300-1.jpg" onclick="onClick(this)" alt="">
                        <img class="my-4 !mx-auto w-1/2 lg:w-10/12" src="http://localhost/tsoba/wp-content/uploads/2022/03/Sarangua.png" alt="">
                        <h1 class="text-center">Маркетингийн менежер</h1>
                        <div class="flex my-4 flex-row items-center justify-center gap-2">
                            <a href="h">
                                <div class="relative w-[35px] h-[35px] border-2 bg-blue-500 rounded-md group duartion-300 hover:bg-white hover:border-2 hover:border-blue-500 cursor-pointer">
                                    <i class="fab fa-facebook-f absolute left-[27%] top-[10%] text-xl text-white duration-300 group-hover:text-blue-500"></i>
                                </div>
                            </a>
                            <a href="h">
                                <div class="relative w-[35px] h-[35px] border-2 bg-fuchsia-500 rounded-md group duartion-300 hover:bg-white hover:border-2 hover:border-fuchsia-500 cursor-pointer">
                                    <i class="fab fa-instagram absolute left-[22%] top-[10%] text-xl text-white duration-300 group-hover:text-fuchsia-500"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row lg:!flex-col !justify-between">
                    <div class="flex flex-col mt-12 mb-4">
                        <h1 class="text-left lg:text-right text-2xl text-[#a60e1c]">Фэйсбүүк хуудас</h1>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/mn_MN/sdk.js#xfbml=1&version=v12.0" nonce="kgKGFoeE"></script>
                            <div class="fb-page" data-href="https://www.facebook.com/Tsobahouse" data-tabs="timeline" data-width="340px" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Tsobahouse" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tsobahouse"></a></blockquote></div>
                    </div>
    
                    <div class="flex flex-col mt-12 mb-4">
                        <h1 class="text-left lg:text-right text-2xl text-[#a60e1c]">Instagram</h1>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/mn_MN/sdk.js#xfbml=1&version=v12.0" nonce="kgKGFoeE"></script>
                            <div class="fb-page" data-href="https://www.facebook.com/Tsobahouse" data-tabs="timeline" data-width="340px" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Tsobahouse" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tsobahouse"></a></blockquote></div>
                    </div>
    
                </div>
                
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>