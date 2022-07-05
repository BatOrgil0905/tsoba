<?php
/*
template name: Villa1
*/
get_header(); ?>

<div class="w-full" style="height: 100vh; object-fit: cover;">
    <div class="w-full h-full lg:absolute lg:top-1 z-0">		
        <div class="relative">
            <img class="w-full h-[100vh] object-cover bg-fixed bg-center bg-cover bg-no-repeat" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa1.2.jpg">		
            <h1 class="absolute text-3xl lg:text-4xl text-center top-[50%] left-[50%] font-normal uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff">Хадат Вилла 1</h1>	 
            <p class="absolute text-xl text-center top-[55%] w-full left-0 text-white font-light uppercase">Итали Архитектур - Классик загварын хаус хотхон</p>
        </div>
    </div>
</div>


<!-- <section class="px-[8%]">
    <div class="relative">
        <div class="absolute h-[100px] w-[.5px] border border-red-600 !mx-auto -mt-8 z-50 "></div>
    </div> -->
    <!-- <div class="mb-8 mt-4 lg:mt-0 flex flex-col lg:flex-row items-center justify-between gap-4">
        <div class="flex flex-col">
            <h1 class="text-3xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #000">Танилцуулга</h1>
            <p class="my-2 text-justify text-gray-600 text-[16px] leading-[24px] font-light w-[450px]" style="font-family: 'Fira sans Condensed', sans-serif">
                Итали загварын Канад технологиор барьсан энэхүү төслийн гол зорилго нь хэрэглэгчдийг хотоос гадуур, эрүүл аюулгүй, тогтмол амьдрах хэв маягт уриалан дуудах байсан.
                Алсад харагдах гайхалтай харц, өндөр уулсыг гэр дотроосоо та өглөө бүр хараа бэлчээх боломжийг олгосон нь төслийн гол үнэ цэнэ юм.
            </p>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex gap-2">
                    <img class="w-[50px] h-[50px] mt-3" src="http://localhost/tsoba/wp-content/uploads/2022/03/icon1.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-md font-light py-2 px-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #000">Хаусын тоо</h1>
                        <p class="text-justify text-gray-600 text-md leading-[20px] font-light px-2" style="font-family: 'Fira sans Condensed', sans-serif">
                            50 Хаус <br> Сингл 39. Твин 11
                        </p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <img class="w-[50px] h-[50px] mt-2" src="http://localhost/tsoba/wp-content/uploads/2022/03/icon2.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-md font-light py-2 px-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #000">Архитектур дизайн</h1>
                        <p class="text-justify text-gray-600 text-md leading-[20px] font-light px-2" style="font-family: 'Fira sans Condensed', sans-serif">
                            Итали
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-4 grid grid-cols-2 gap-4">
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
                            3.8 га
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full lg:w-[7/12]">
            <img class="w-full h-auto shadow-md shadow-black rounded-sm" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa1.3.jpg" onclick="onClick(this)" alt="">
        </div>
    </div>

    <div class="content-['ХАДАТ ВИЛЛА 1'] flex justify-center text-gray-100">
        <div data-aos="fade-down" data-aos-duration="500">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">Х</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="500">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">А</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">Д</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">А</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="1500">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">Т</span>
        </div>

        <div data-aos="fade-down" data-aos-duration="1500">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] pl-3 md:pl-6 lg:pl-12 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">В</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="2000">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">И</span>
        </div>        
        <div data-aos="fade-down" data-aos-duration="2000">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">Л</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="2500">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">Л</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="2500">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-0 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">А</span>
        </div>
        <div data-aos="fade-down" data-aos-duration="3000">
            <span class="inline-block text-[3rem] md:text-[5rem] lg:text-[10rem] px-3 md:px-6 lg:px-12 font-extralight indent-0" style="font-family: 'Fira Sans Condensed', sans-serif; opacity: 1; transform: translateY(0px) translateZ(0px)">1</span>
        </div>
	</div>
</section>
<section class="-mt-1 md:-mt-5 lg:-mt-10 bg-[#222A34] px-[8%]">
    <div class="pt-8 grid grid-cols-1 lg:grid-cols-3 gap-4">
        <iframe class="py-1 " width="100%" height="250px"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>  
        <iframe class="py-1 " width="100%" height="250px"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        <iframe class="py-1 " width="100%" height="250px"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
    </div>
    <div class="py-8 w-full h-auto lg:h-[70vh] overflow-hidden">
        <img class="w-full h-auto lg:h-[70vh] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa1.4.jpg" onclick="onClick(this)" alt="">
    </div>
    <div class="py-8">
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-white" style="font-family: 'Fira sans Condensed', sans-serif">
            Итали загварын Канад технологиор барьсан энэхүү төслийн гол зорилго нь хэрэглэгчдийг хотоос гадуур, эрүүл аюулгүй, тогтмол амьдрах хэв маягт уриалан дуудах байсан. Алсад харагдах гайхалтай харц, өндөр уулсыг гэр дотроосоо та өглөө бүр хараа бэлчээх боломжийг олгосон нь төслийн гол үнэ цэнэ юм.
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-white" style="font-family: 'Fira sans Condensed', sans-serif">
            Төслийнхөө байршлыг утаа орж ирэх боломжгүй, харц сайтай газар сонгосон. Төслийн бүтээн байгуулалт эхэлснээс эхний 3 сард 27 сингл хаус зарагдсан нь салбартаа урьд хожид байгаагүй борлуулалтын амжилт тогтоосон. Хадат 1 төслийн байршлын сонголтыг зөв хийсэн гэж үздэг. Энэ нь бидний борлуулалт болон хандалтын тооноос харагдаж байгаа.
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-white" style="font-family: 'Fira sans Condensed', sans-serif">
            Төслийн сингл хаус нь зарагдаж дууссанаас хойш өдийг хүртэл хэрэглэгчид дахин сингл хаус авах сонирхол, хүсэлтээ илэрхийлж байсан.
        </p>
        <p class="mt-2 pb-4 text-justify text-[16px] leading-[24px] font-light text-white" style="font-family: 'Fira sans Condensed', sans-serif">
            Энэ нь Улаанбаатар хотод цэнгэг агаарт байгалийн үзэсгэлэнт газарт нэгдсэн зөв төлөвлөлт, нэгдсэн дэд бүтэц бүхий сингл хаусанд амьдрах эрэлт хэрэгцээ ямар их байгааг харуулсан.
        </p>
    </div>
</section>
<section class="bg-[#222A34] pt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
    <div class="overflow-hidden">
        <img class="w-full h-[200px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa1.5.jpg" onclick="onClick(this)" alt="">
    </div>
    <div class="overflow-hidden">
        <img class="w-full h-[200px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa1.6.jpg" onclick="onClick(this)" alt="">
    </div>
    <div class="overflow-hidden">
        <img class="w-full h-[200px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa1.7.jpg" onclick="onClick(this)" alt="">
    </div>
    <div class="overflow-hidden">
        <img class="w-full h-[200px] object-fit duration-500 hover:scale-110" src="http://localhost/tsoba/wp-content/uploads/2022/03/villa1.8.jpg" onclick="onClick(this)" alt="">
    </div>
</section>

<section class="my-24 px-[8%]">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-4">

        <div class="bg-white h-auto w-full">
            <div class="flex flex-row items-center justify-start px-4">
                <i class="fa-solid fa-container-storage pr-4 text-2xl text-[#a41221]"></i><li class="list-none py-3 text-[18px] font-medium text-[#a41221] uppercase" style="font-family: 'Fira sans Condensed', sans-serif">Халаалт</li>
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
</section>  -->

<?php
    $args = array('post_type' => 'khadat_villa_1', 'posts_per_page' => 5, 'order' => 'ASC');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

    <?php the_content()?>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>