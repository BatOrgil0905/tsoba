<?php
/*
template name: Villa3
*/
get_header(); ?>

<div class="w-full h-[80vh]" style=" object-fit: cover;">
    <div class="swiper myMainSwiper w-full h-full lg:absolute lg:top-1 z-0">
        <div class="swiper-wrapper">
			
				<?php
					$args = array('post_type' => 'villa3', 'posts_per_page' => 3, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<div class="swiper-slide realtive">
						<?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
						?>
						<img class="w-full h-[90vh] object-cover opacity-90" src="<?php echo $thumb_url[0] ?>">	
                        <h1 class="absolute text-3xl lg:text-4xl text-center top-[50%] left-[50%] font-extralight uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff">Хадат Вилла 3</h1>
                        <p class="absolute text-xl text-center top-[55%] w-full left-0 text-white font-light uppercase">Байгалийн сайхан, тав тухыг мэдрэх эрүүл аюулгүй амьдрах цогц шийдэл</p>					
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<div class="swiper-pagination"></div>
		</div>
    </div>
</div>


<section class="!px-[4%] lg:!px-[8%]">
    <!-- <div class="relative">
        <div class="absolute h-[100px] w-[.5px] border border-red-600 !mx-auto -mt-8 z-50 "></div>
    </div> -->
    <div class="my-8 flex flex-col lg:flex-row items-center gap-4">
        <div class="flex flex-col">
            <h1 class="text-4xl font-normal py-2 text-[#A60E1C]" style="font-family: 'Fira Sans Condensed', sans-serif;">Танилцуулга</h1>

            <div class="my-1">
                <h1 class="text-xl font-normal pt-1 text-[#000] uppercase" style="font-family: 'Fira Sans Condensed', sans-serif;">Төлөвлөлт</h1>
                <p class="mt-1 mb-2 text-justify text-gray-600 text-[16px] leading-[24px] font-light w-full lg:w-[450px]" style="font-family: 'Fira sans Condensed', sans-serif">
                    Хадат вилла 3 төсөл нь 6 га газарт 5 төрлийн загварын сонголттой нийт 47 вилланаас бүрдсэн. Нийтийн эзэмшлийн талбай, хүүхдийн тоглоомын талбай, хувийн эзэмшлийн талбай болон клуб хаус төлөвлөгдсөн.
                </p>
            </div>
            <div class="my-1">
                <h1 class="text-xl font-normal pt-1 text-[#000] uppercase" style="font-family: 'Fira Sans Condensed', sans-serif;">Экстерьер</h1>
                <p class="mt-1 mb-2 text-justify text-gray-600 text-[16px] leading-[24px] font-light w-full lg:w-[450px]" style="font-family: 'Fira sans Condensed', sans-serif">
                    Байгалийн өнгөтэй төгс зохицох саарал өнгө, модерн болон классик хэв маягийг хослуулсан неоклассик загварыг экстерьерт шингээсэн ба вилла бүрийн цонхны харц бие биенийхээ үзэгдэх орчныг хязгаарлахгүй.
                </p>
            </div>
            <div class="my-1">
                <h1 class="text-xl font-normal pt-1 text-[#000] uppercase" style="font-family: 'Fira Sans Condensed', sans-serif;">Интерьер</h1>
                <p class="mt-1 mb-2 text-justify text-gray-600 text-[16px] leading-[24px] font-light w-full lg:w-[450px]" style="font-family: 'Fira sans Condensed', sans-serif">
                    Минимал хэв маяг, контемпорари урсгалын хослол, Өдрийн турш нар үзэх, байгалийн сайханыг гэрээсээ бүрэн тольдох цэлгэр том цонх, орон зайн ашигтай төлөвлөлт бүхий өрөөнүүдтэй.
                </p>
            </div>
            <div class="my-1">
                <h1 class="text-xl font-normal pt-1 text-[#000] uppercase" style="font-family: 'Fira Sans Condensed', sans-serif;">Хотхоны менежмент:</h1>
                <p class="mt-1 mb-2 text-justify text-gray-600 text-[16px] leading-[24px] font-light w-full lg:w-[450px]" style="font-family: 'Fira sans Condensed', sans-serif">
                    Гэр бүлийн гишүүдийн цаг хугацааг хэмнэсэн, тав тухтай орчинг бүрдүүлэх СӨХ-ын үйчилгээ, аюулгүй байдлыг бүрэн хангасан 24 цагийн харуул хамгаалалтаас бүрдсэн нэгдсэн менежменттэй.
                </p>
            </div>
        </div>
        <div class=" flex flex-col w-full ml-0 lg:ml-10 lg:w-[7/12]">
            <img class="w-full h-[350px] shadow-md shadow-black rounded-sm" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa3.1.jpg" onclick="onClick(this)" alt="">
        </div>
    </div>
    <div class="my-8">
        <h1 class="text-4xl mt-4 font-light border-b border-gray-600 text-[#A60E1C]" style="font-family: 'Fira sans Condensed', sans-serif;">Гадна орчны 360 зураг</h1>
        <div class="my-4">
            <iframe id="/tours/8_VI4qliZ" allow="camera;microphone;vr;accelerometer;gyroscope;fullscreen" allowfullscreen frameborder="0" width="100%" height="500" src="https://app.cloudpano.com/tours/8_VI4qliZ"></iframe>
        </div>
    </div>

    <div class="mt-16 mb-8">
        <h1 class="text-3xl lg:text-4xl mt-4 font-light border-b border-gray-600 text-[#A60E1C]" style="font-family: 'Fira sans Condensed', sans-serif;">Яг одоо захиалга авч буй загвар - 65А</h1>
        <div class="my-4">
            <!-- <div class="tab flex flex-col lg:flex-row overflow-hidden border-b border-black lg:border-b-2 lg:border-white bg-white w-full">
                <button class="tablinks text-[17px] p-1 w-full" onclick="openCity(event, 'first')" id="defaultOpen">Гаднах зураг</button>
                <button class="tablinks text-[17px] p-1 w-full" onclick="openCity(event, 'second')">Нэг давхарын зохион байгуулалт</button>
                <button class="tablinks text-[17px] p-1 w-full" onclick="openCity(event, 'third')">Хоёр давхарын зохион байгуулалт</button>
            </div>
    
            <div id="first" class="tabcontent mt-[-2px]">
                <div class="my-2 mx-4">
                    <img class="py-2 px-4 w-full h-auto lg:h-[85vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/tab1.jpg" onclick="onClick(this)" alt="">
                </div>
            </div>
    
            <div id="second" class="tabcontent mt-[-2px]">
                <div class="my-2 mx-4">
                    <img class="py-2 px-4 w-full h-auto lg:h-[85vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/tab2.jpg" onclick="onClick(this)" alt="">
                </div>
            </div>
    
            <div id="third" class="tabcontent mt-[-2px]">
                <div class="my-2 mx-4">
                    <img class="py-2 px-4 w-full h-auto lg:h-[85vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/tab-3.jpg" onclick="onClick(this)" alt="">
                </div>
            </div> -->

            
            <?php echo do_shortcode('
                [TABS_R id=207]
            ')?> 

            <div class="my-4 flex flex-col items-center justify-center">
                <a href="https://tsoba.mn/wp-content/uploads/2021/02/Kh3_brochure_66A_-original-sized.pdf">
                    <div class="relative w-[60px] h-[60px] border-2 border-[#A60E1C] rounded-full group duartion-300 hover:bg-[#A60E1C] cursor-pointer">
                        <i class="fa-solid fa-file absolute left-[32%] top-[18%] text-3xl text-[#A60E1C] duration-300 group-hover:text-white"></i>
                    </div>
                </a>
                <h1 class="text-xl mt-2 font-light text-center" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">65A - Загварын цахим танилцуулга татах</h1> 
            </div>
        </div>
    </div>

    <div class="mt-16 mb-8">
        <h1 class="text-3xl lg:text-4xl mt-4 font-light border-b border-gray-600 text-[#A60E1C]" style="font-family: 'Fira sans Condensed', sans-serif;">Яг одоо захиалга авч буй загвар - 66R</h1>
        <div class="my-4">
            <!-- <div class="tab1 flex flex-col lg:flex-row overflow-hidden border-b border-black lg:border-b-2 lg:border-white bg-white w-full">
                <button class="links text-[17px] p-1 w-full" onclick="openBuild(event, 'fourth')" id="default">Гаднах зураг</button>
                <button class="links text-[17px] p-1 w-full" onclick="openBuild(event, 'fifth')">Нэг давхарын зохион байгуулалт</button>
                <button class="links text-[17px] p-1 w-full" onclick="openBuild(event, 'sixth')">Хоёр давхарын зохион байгуулалт</button>
            </div>
    
            <div id="fourth" class="content mt-[-2px]">
                <div class="my-2 mx-4">
                    <img class="py-2 px-4 w-full h-auto lg:h-[85vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/tab4.png" onclick="onClick(this)" alt="">
                </div>
            </div>
    
            <div id="fifth" class="content mt-[-2px]">
                <div class="my-2 mx-4">
                    <img class="py-2 px-4 w-full h-auto lg:h-[85vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/tab5.png" onclick="onClick(this)" alt="">
                </div>
            </div>
    
            <div id="sixth" class="content mt-[-2px]">
                <div class="my-2 mx-4">
                    <img class="py-2 px-4 w-full h-auto lg:h-[85vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/tab6.png" onclick="onClick(this)" alt="">
                </div>
            </div> -->

            <?php echo do_shortcode('
                [TABS_R id=208]
            ')?> 

            <div class="my-4 flex flex-col items-center justify-center">
                <a href="https://tsoba.mn/wp-content/uploads/2021/03/Khadat-3-66R-brochure_minimum-sized.pdf">
                    <div class="relative w-[60px] h-[60px] border-2 border-[#A60E1C] rounded-full group duartion-300 hover:bg-[#A60E1C] cursor-pointer">
                        <i class="fa-solid fa-file absolute left-[32%] top-[18%] text-3xl text-[#A60E1C] duration-300 group-hover:text-white"></i>
                    </div>
                </a>
                <h1 class="text-xl mt-2 font-light text-center" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">66R - Загварын цахим танилцуулга татах</h1> 
            </div>
        </div>
    </div>

    <div class="mt-16 mb-6">
        <h1 class="text-4xl mt-4 font-light text-center border-b border-gray-600 text-[#A60E1C]" style="font-family: 'Fira sans Condensed', sans-serif;">Интерьер дизайн</h1>

        <div class="grid grid-cols-2 justify-items-center md:grid-cols-5 px-[4%] lg:!px-[2%] gap-4 my-4">
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.1.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Зочны өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.2.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Зочны өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.3.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Зочны өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.4.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Гал тогооны өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.5.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Гал тогооны өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.6.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Мастер унтлаганы өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.7.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Мастер унтлаганы өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.8.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Унтлаганы өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.9.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Хүүхдийн өрөө</p>
            </div>
            <div class="flex flex-col group overflow-hidden">
                <img class="w-[150px] h-[150px] duration-300 group-hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room2.10.jpg" onclick="onClick(this)" alt="">
                <p class="text-lg mt-2 font-thin italic text-center group-hover:text-[#460E1C] group-hover:font-light" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Хүүхдийн өрөө</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#222A34] my-6">
    <div class="flex items-center justify-center">
        <iframe class="py-10 px-5 lg:px-0 w-full lg:w-[65%] h-[450px]" 
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
    </div>
</section>

<div class="my-2 px-[8%]">
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
         <iframe class="py-1 " width="100%" height="100%"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>  
        <iframe class="py-1 " width="100%" height="100%"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        <iframe class="py-1 " width="100%" height="100%"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        <iframe class="py-1 " width="100%" height="100%"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        <iframe class="py-1 " width="100%" height="100%"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        <iframe class="py-1 " width="100%" height="100%"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>     
     </div>
</div>

<section class="my-10 px-[8%]">
    <div class="border-t border-gray-600 border-b border-gray-600 py-3">
        <h1 class="text-4xl font-light text-[#A60E1C]" style="font-family: 'Fira sans Condensed', sans-serif;">Дэд бүтцийн шийдэл</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-4">

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-temperature-full pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Халаалт</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
               Унгар улсын эко, утаагүй Карборобот нэгдсэн уурын зуухаар айл болгоныг халаахаар шийдэгдсэн.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-signs-post pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Зам</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                СБД Бэлхийн засмал замаар 16 км явж Бэлхи, Хадатын амаар 4.0 км сайжруулсан шороон замаар явж хүрнэ.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-plug pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Цахилгаан</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                3 км ээс БЗД Цуурайн амнаас 10000 КвТ агаарын шугам татна.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-faucet pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Цэвэр ус</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                180 метрийн гүнээс цэвэр усаар тэжээгдсэн.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-toilet pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Бохирын систем</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                Бие даасан, септик систем төлөвлөсөн.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-tower-broadcast pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Харилцан холбоо</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                Мобиком, Юнителийн гар утасны сүлжээ орсон. Юнивишний гурвалсан үйлчилгээ орохоор төлөвлөгдсөн
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>