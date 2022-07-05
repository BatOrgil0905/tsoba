<?php
/*
template name: Villa2
*/
get_header(); ?>

<div class="w-full h-[90vh]" style=" object-fit: cover;">
    <div class="swiper myMainSwiper w-full h-full lg:absolute lg:top-1 lg:z-0">
        <div class="swiper-wrapper">
			
				<?php
					$args = array('post_type' => 'villa2', 'posts_per_page' => 3, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<div class="swiper-slide realtive">
						<?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
						?>
						<img class="w-full h-[90vh] md:h-full object-cover opacity-90" src="<?php echo $thumb_url[0] ?>">	
                        <h1 class="absolute text-3xl lg:text-4xl text-center top-[50%] left-[50%] font-extralight uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff">Хадат Вилла 2</h1> 
                        <p class="absolute text-xl text-center top-[55%] w-full left-0 text-white font-light uppercase">Байгалийн сайхан, тав тухыг мэдрэх эрүүл аюулгүй амьдрах цогц шийдэл</p>					
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<div class="swiper-pagination"></div>
		</div>
    </div>
</div>


<!-- <section class="px-[8%]">
    <div class="py-3 border-b border-gray-600">
        <h1 class="text-3xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a60e1c">La Fiesta Lifestyle</h1>
        <h1 class="text-3xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Дуусашгүй баяр баяслыг яг одоо мэдэр</h1>
    </div>
    <div class="pt-4 pb-8 border-b border-gray-600">
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
            Хадат Вилла – 2 төслийн таны амьдралд бий болгож буй бусдаас ялгарах, онцлох үнэ цэн бол La Fiesta Lifestyle буюу амьдралын дуусашгүй их баяр баяслыг танд мэдрүүлэх юм. Танд зориулж бий болгож буй дараах үнэ цэнийн хамт амьдралын дуусашгүй их баяр баяслыг бидэнтэй хамт яг одоо мэдрээрэй.
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
            <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Комьюнити: </strong>Хадатын үзэсгэлэнт байгаль дунд гэр бүл найз нөхдийн хамт шинэ хобби, шинэ хүрээлэлд хамтдаа хөгжих адал явдлаар дүүрэн амьдралын баяр баясал   
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
            <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Ресорт амьдарлын хэв маяг: </strong>Хадатын хөндийн суурин дах клуб хаусд алжаал тайлан тухлаж, амралтад байгаа мэт хором мөч бүрийг мэдрүүлэх цогц үйлчилгээг багтаасан цоо шинэ ресорт амьдралын хэв маягаас хүртэх  баяр баясал  
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
            <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Өсөн нэмэгдэх үнэ цэн, өвлүүлж үлдээх хөрөнгө: </strong>Хадатын хараа булаам байгаль, туршигдсан дэд бүтэц, тогтвортой хөрөнгийн менежмент, гэр бүл хүүхдэд ээлтэй төлөвлөлт зэргийг багтаасан үл хөдлөх хөрөнгөөр зөв хөрөнгө оруулалт хийснээр сэтгэл хангалуун амьдрах баяр баясал 
        </p>
    </div>

    <div class="py-8 flex flex-col lg:flex-row items-center justify-between gap-3">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-3xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Танилцуулга</h1>
            <p class="my-2 text-justify text-gray-600 text-[16px] leading-[24px] font-light w-[450px]" style="font-family: 'Fira sans Condensed', sans-serif">
                Улаанбаатар хотоос 19 км-ын зайтай, гайхамшигт онгон байгальд ой мод бүхий байгалийн цогцолборт газарлуу 15 мин, Улиастайн голоос 10 мин зайтай энэхүү байршил нь Бэлхийн Хадатын зуслангийн хажууханд 1 км-ийн зайд байрлаж байна.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex gap-2">
                    <img class="w-[50px] h-[50px] mt-3" src="http://localhost/tsoba/wp-content/uploads/2022/03/icon1.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-md font-light py-2 px-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #000">Хаусын тоо</h1>
                        <p class="text-justify text-gray-600 text-md leading-[20px] font-light px-2" style="font-family: 'Fira sans Condensed', sans-serif">
                            <strong>106</strong> Хаус 
                        </p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <img class="w-[50px] h-[50px] mt-2" src="http://localhost/tsoba/wp-content/uploads/2022/03/icon2.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-md font-light py-2 px-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #000">Архитектур дизайн</h1>
                        <p class="text-justify text-gray-600 text-md leading-[20px] font-light px-2" style="font-family: 'Fira sans Condensed', sans-serif">
                            Нордик
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex gap-2">
                    <img class="w-[50px] h-[50px] mt-3" src="http://localhost/tsoba/wp-content/uploads/2022/03/icon3.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-md font-light py-2 px-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #000">Технологи</h1>
                        <p class="text-justify text-gray-600 text-md leading-[20px] font-light px-2" style="font-family: 'Fira sans Condensed', sans-serif">
                            Канад технологийн <br> модон барилга
                        </p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <img class="w-[50px] h-[50px] mt-2" src="http://localhost/tsoba/wp-content/uploads/2022/03/icon4.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-md font-light py-2 px-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #000">Талбай хэмжээ</h1>
                        <p class="text-justify text-gray-600 text-md leading-[20px] font-light px-2" style="font-family: 'Fira sans Condensed', sans-serif">
                            8 га
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full lg:w-[7/12]">
            <img class="w-full h-auto shadow-md shadow-black rounded-sm" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa2.3.jpg" onclick="onClick(this)" alt="">
        </div>
    </div>

    <div class="mt-8 py-4 border-t border-gray-600 ">
		<p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
           Хадат Вилла 2 төсөл нь Хадат Вилла-1 төслийн нэгэн адил Канад технологийн модон бүтээцтэй барилга юм. Энэхүү төсөл нийт 100 айлын хаус төсөл бөгөөд залуу, бие даасан байдал, шинэ хэв маягийг эрхэмлэгч хэрэглэгчдэд зориулсан Нордик загварын 100% таун хаусууд юм. Хадат Вилла 2 төслийн онцлог нь мөн л уулын энгэрт, өндөрлөг алсын хараа сайтай байршилд төлөвлөгдсөн бөгөөд загварын хувьд байршлын давуу талыг тодруулсан шалнаасаа тааз хүртэл цонхтой, Нордик загварын таун хаусууд гэдгээрээ онцлог.  
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
           Айл хоорондын эгнээ бүрт 1 га нийтийн эзэмшил газар, хүүхдийн тоглоомын талбай ба амарч тухлах цоо шинэ орчин бүрдүүллээ. Та салхинд найган ганхах модны дэргэд зориулалтын шорлог хийх талбайд найз нөхөд гэр бүлийн хамт шорлог хийж, морь унаж, хүссэн үедээ уул хадандаа авирч, илүү ихийг өндрөөс харж, өвлийн улиралдаа цана чаргаар гулгах боломжийг Хадат Вилла 2 төсөл зөвхөн танд зориуллаа.  
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
            Бидний амьдралд мөнгөөр үнэлэгдэшгүй олон хүчин зүйлс бий. Ая тухыг, амар амгалан байдлыг, агшин бүрийн үнэ цэнийг, үр хүүхдийнхээ хөгжилтэй инээдийг, амьдралаас авч болох олон хором мөчүүдийг бид хэзээ ч хэрхэвч мөнгөөр үнэлж чадахгүй. Яг үүн шиг бидний төсөлд мөнгөөр үнэлэгдэшгүй зүйлс олон бий. Бид таны амьдралын агшин хором бүрийг байгальтай нягт холбохыг хүссэн. 
        </p>
        <h1 class="text-4xl lg:text-5xl mt-4 font-normal text-center border-b border-gray-600" style="font-family: 'Fira sans Condensed', sans-serif; color: #345734">Гадна орчны 360 зураг</h1>
	</div>

    <div class="-mt-2 mb-4">
        <iframe id="/tours/8_VI4qliZ" allow="camera;microphone;vr;accelerometer;gyroscope;fullscreen" allowfullscreen frameborder="0" width="100%" height="500" src="https://app.cloudpano.com/tours/8_VI4qliZ"></iframe>
    </div>

    <div class="mt-16 mb-4">
        <h1 class="text-4xl lg:text-5xl mt-4 font-normal text-center border-b border-gray-600" style="font-family: 'Fira sans Condensed', sans-serif; color: #345734">Б блок яг одоо захиалга авч байна.</h1> 
        
        <div class="my-2">
            <img class="w-full h-auto lg:h-[90vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa2.4.jpg" alt="">
        </div>
        <div class="flex items-center justify-around my-4">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.1.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.2.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.3.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.4.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.5.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.6.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.7.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.8.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.9.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.10.jpg" onclick="onClick(this)" alt="">
                </div>
            </div>
        </div>

        <div class="my-4 flex flex-col items-center justify-center">
            <a href="https://tsoba.mn/wp-content/uploads/2021/08/Flipbook-ppt-2-1_compressed-1.pdf">
                <div class="relative w-[60px] h-[60px] border-2 border-[#345734] rounded-full group duartion-300 hover:bg-[#345734] cursor-pointer">
                    <i class="fa-solid fa-file absolute left-[32%] top-[18%]  text-3xl text-[#345734] duration-300 group-hover:text-white"></i>
                </div>
            </a>
            <h1 class="text-xl mt-2 font-light text-center" style="font-family: 'Fira sans Condensed', sans-serif; color: #000">Б эгнээний танилцуулга татах</h1> 
        </div>
    </div>

    <div class="mt-12 mb-4">
        <h1 class="text-4xl lg:text-5xl mt-4 font-normal text-center border-b border-gray-600" style="font-family: 'Fira sans Condensed', sans-serif; color: #345734">А блок - захиалга авч дуссан</h1> 
        
        <div class="my-2">
            <img class="w-full h-auto lg:h-[90vh]" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa2.5.jpg" alt="">
        </div>
        <div class="flex items-center justify-around my-4">
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.1.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.2.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.3.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.4.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.5.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.6.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.7.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.8.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.9.jpg" onclick="onClick(this)" alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-full h-auto lg:h-[150px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/room1.10.jpg" onclick="onClick(this)" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="mb-6 mt-16">
        <h1 class="text-4xl lg:text-5xl mt-4 font-normal text-center border-b border-gray-600" style="font-family: 'Fira sans Condensed', sans-serif; color: #345734">А блокны өрөөний зохион байгуулалтын 360 аялал</h1> 
        <div class="my-3">
            <iframe width="100%" class="h-[500px] lg:h-[100vh]" allow="autoplay" src="https://livetour.istaging.com/9d6b5b64-9746-4c3e-98f8-6d8fa047f8a9?fbclid=IwAR0ObxsXW6UxlGlt7N35MSYM-dJBRpx1N75ku2CQjSc2KPkZLsQ6Ap4SKvU&#038;index=2" frameborder="0" 0="webkitallowfullscreen" 1="mozallowfullscreen" 2="allowfullscreen" scrolling="yes" class="iframe-class"></iframe>
        </div>
    </div>

    <div class="mt-16 mb-6">
        <h1 class="text-4xl lg:text-5xl py-5 font-normal text-center border-b border-gray-600 border-t border-gray-600" style="font-family: 'Fira sans Condensed', sans-serif; color: #345734">Б блокны захиалга авч буй үнэ - ₮350'000'000</h1> 
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 my-4">
            <div class="flex flex-col justify-center">
                <h1 class="text-2xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Худалдаа хөгжлийн банкны зээлийн нөхцөл</h1>
                <div class="mt-4 mb-2">
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Урьдчилгаа төлбөр: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">30%</strong> /Барьцаа хөрөнгө тавих боломжтой/
                    </p>
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Хугацаа: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">10 жил</strong>
                    </p>
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Сарын хүү: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">1.4%</strong>
                    </p>
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Жилийн хүү: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">16.6%</strong>
                    </p>
                </div>
                <div class="my-2">
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Дэлгэрэнгүй мэдээллийг та манай борлуулалтын албаны: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">+976-77133355</strong> дугаараас аваарай.
                    </p>
                </div>
                <div class="my-2">
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Илүү дэлгэрэнгүй мэдээллийг <a class="text-[16px] leading-[24px] font-normal underline pb-1" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734" href="https://tsoba.mn/khadat-villa-2-zeel/"> энд </a> дарж авна уу.
                    </p>
                </div>
            </div>
            <div class="flex flex-col">
                <h1 class="text-2xl font-normal py-2 mt-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Хаан банкны зээлийн нөхцөл</h1>
                <div class="mt-8 mb-2">
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Урьдчилгаа төлбөр: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">20% /Нэмэлт барьцаагүй/</strong> 
                    </p>
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Хугацаа: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">20 жил</strong>
                    </p>
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Сарын хүү: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">1%</strong>
                    </p>
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Жилийн хүү: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">12%</strong>
                    </p>
                </div>
                <div class="my-2">
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Дэлгэрэнгүй мэдээллийг та манай борлуулалтын албаны: <strong class="text-[16px] leading-[24px]" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">+976-77133355</strong> дугаараас аваарай.
                    </p>
                </div>
                <div class="my-2">
                    <p class="my-1 text-justify text-[16px] leading-[24px] font-light text-gray-600" style="font-family: 'Fira sans Condensed', sans-serif">
                        Илүү дэлгэрэнгүй мэдээллийг <a class="text-[16px] leading-[24px] font-normal underline pb-1" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734" href="https://tsoba.mn/khadat-villa-2-zeel/"> энд </a> дарж авна уу.
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="text-2xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #345734">Төлбөрийн хуваарь</h1>
                <div class="my-4">
                    <ul>
                        <li class="list-disc list-inside marker:text-red-700 py-3 text-[17px] font-light text-gray-600 " style="font-family: 'Fira sans Condensed', sans-serif">Урьдчилгаа төлбөр - 30%</li>
                        <li class="list-disc list-inside marker:text-red-700 py-3 text-[17px] font-light text-gray-600 " style="font-family: 'Fira sans Condensed', sans-serif">1-р төлөлт - 25%</li>
                        <li class="list-disc list-inside marker:text-red-700 py-3 text-[17px] font-light text-gray-600 " style="font-family: 'Fira sans Condensed', sans-serif">2-р төлөлт - 20%</li>
                        <li class="list-disc list-inside marker:text-red-700 py-3 text-[17px] font-light text-gray-600 " style="font-family: 'Fira sans Condensed', sans-serif">3-р төлөлт - 22%</li>
                        <li class="list-disc list-inside marker:text-red-700 py-3 text-[17px] font-light text-gray-600 " style="font-family: 'Fira sans Condensed', sans-serif">4-р төлөлт - 3%</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="my-16 px-[8%]">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-4 border-t border-gray-600">
        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <img class="pr-4 w-12 stroke-rose-800" src="http://localhost/tsoba/wp-content/uploads/2022/03/radiator.png" alt=""><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Халаалт</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
               Карборобот Унгар улсын нам даралтын уурын зуух 8 ширхэг суурилуулагдсан бөгөөд айл бүр нэгдсэн халаалтын шугамд холбогдсон.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-signs-post pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Зам</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                СБД Бэлхийн засмал замаар 16 км яваад, Бэлх Хадатын амаар 4.0 км асфальтан замаар явж хотхонд хүрнэ
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-plug pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Цахилгаан</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                КТПН 400 кВа 8 ш суурилуулагдана.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-faucet pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Цэвэр ус</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
                Гүний худаг 120 м, 6 ш эх үүсвэртэй. 200 тн нөөцийн савтай, нэгдсэн байдлаар халаалтын шугамтай зэрэгцэн угсрагдаж айл бүртэй холбогдсон.
            </p>
        </div>

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-toilet pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Бохирын систем</li>
            </div>
            <p class="text-justify px-4 pb-3 text-gray-600 text-[16px] leading-[30px] font-light" style="font-family: 'Fira sans Condensed', sans-serif">
               Септик системээр бохирын асуудлыг шийдсэн бөгөөд айл бүр бохирын системтэй холбогдоно.
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

<section class="px-[8%] my-6">
    <div class="my-2">
        <h1 class="text-5xl mt-4 font-normal text-center border-b border-gray-600" style="font-family: 'Fira sans Condensed', sans-serif; color: #345734">Байршил</h1> 

        <div>
            <iframe class="m-4 w-full h-[550px] !mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2666.6184892317124!2d107.0366144153056!3d48.059703564561026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d968bda0a3da51f%3A0x427d1ac7922bbf8!2z0KXQsNC00LDRgiDQktC40LvQu9CwIDI!5e0!3m2!1smn!2smn!4v1646198307681!5m2!1smn!2smn" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section> -->

<?php
    $args = array('post_type' => 'khadat_villa_2', 'posts_per_page' => 5, 'order' => 'ASC');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

    <?php the_content()?>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>