<?php
/*
template name: Customer
*/
get_header(); ?>

<div class="w-full" style="height: 70vh; object-fit: cover;">
    <div class="w-full h-full lg:absolute lg:top-1 z-0">		
        <div class="relative">
            <img class="w-full h-[70vh] object-cover " src="http://localhost/tsoba/wp-content/uploads/2022/03/customer1.jpg">		
            <h1 class="absolute text-4xl top-[60%] left-[75%] font-normal uppercase" style="transform: translate(-50%, -50%); font-family: 'Fira Sans Condensed', sans-serif; color: #fff">Санал хүсэлт</h1>				
        </div>
    </div>
</div>

<section class="px-[8%]">
    <div class="mb-8 border-b border-gray-600">
        <h1 class="text-3xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538">Түгээмэл, асуулт хариултууд</h1>
    </div>

    <div class="mb-8 flex items-center justify-center w-full h-full shadow-purple-700 shadow-md duration-300 hover:shadow-pink-500 hover:shadow-md rounded-md bg-white ">
        <?php echo do_shortcode('
            [WPSM_AC id=209]
        ')?> 
    </div>

    <div class="mb-2 border-b border-gray-600">
        <h1 class="text-3xl font-normal py-2" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538">Хэрэглэгчийн санал хүсэлт</h1>
    </div>
    <div class="mb-8 border-b border-gray-600">
        <p class="text-justify text-gray-600 text-[16px] leading-[30px] font-light pb-2" style="font-family: 'Fira sans Condensed', sans-serif">
            Бидний хамгийн чухал зарчмын нэг бол хэрэглэгч бүртэйгээ ойрхон ажиллаж, тэдний хэрэгцээ шаардлага, тулгарч буй асуудлыг цаг тухай бүрд нь сонсож, шийдвэрлэж өгөх юм. Иймд хэрэглэгч таны өгч буй санал, хүсэлт бүр бидэнд маш том үнэ цэнтэй бөгөөд танд илүү тав тухтай амьдрах орчныг бүрдүүлж өгөх болно.
        </p>
    </div>

    <div class="my-8">
        <form class="flex flex-col" action="">
            <!-- <label class="flex justify-start" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538" for="name">Таны нэр</label>
                <input class="w-full py-2 px-2 bg-gray-50 rounded-xl outline outline-1 outline-gray-600 mb-2 focus:outline-2 focus:outline-rose-800" type="text" id="name">

            <label class="flex justify-start" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538" for="number">Утасны дугаар</label>
                <input class="w-full py-2 px-2 bg-gray-50 rounded-xl outline outline-1 outline-gray-600 mb-2 focus:outline-2 focus:outline-rose-800" type="text" id="number">

            <label class="flex justify-start" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538" for="email">Имэйл хаяг</label>
                <input class="w-full py-2 px-2 bg-gray-50 rounded-xl outline outline-1 outline-gray-600 mb-2 focus:outline-2 focus:outline-rose-800" type="text" id="email">

            <label class="flex justify-start" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538" for="address">Гэрийн хаяг</label>
                <input class="w-full py-2 px-2 bg-gray-50 rounded-xl outline outline-1 outline-gray-600 mb-2 focus:outline-2 focus:outline-rose-800" type="text" id="address">

            <div class="flex flex-row w-full">
                <div class="flex flex-row w-1/2">
                    <label class="flex justify-start flex-col" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538" for="feedback">Санал хүсэлт
                       <textarea class="w-full py-2 px-2 bg-gray-50 rounded-xl outline outline-1 outline-gray-600 mb-2 focus:outline-2 focus:outline-rose-800 resize" type="text" id="feedback"></textarea>
                    </label>
                </div>
                <div class="flex flex-col w-1/2">
                    <label class="flex justify-start" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538" for="picture">Зураг оруулах</label>
                    <input class="my-2 focus:outline-2 focus:outline-rose-800" type="file" id="picture">
                </div>
            </div>
            <input class="mt-8 py-2 px-4 bg-[#a63538] rounded-xl text-white duration-300 hover:bg-rose-800" style="font-family: 'Fira Sans Condensed', sans-serif; color: #a63538" type="submit" value="Илгээх"> -->

            
            <?php echo do_shortcode('
                [contact-form-7 id="179" title="feedback1"]
            ')?>
        </form>
    </div>
</section>

<?php get_footer(); ?>