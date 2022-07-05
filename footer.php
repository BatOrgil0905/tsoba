<?php?>

<?php wp_footer(); ?>

<!-- ---Footer--- -->

<footer class="bg-[#161c24] w-full h-auto relative z-0 bottom-0">
    <div class="px-[8%]">
        <div class="flex pt-20 lg:pt-32 flex-col md:flex-row items-center justify-between">
            <div class="flex flex-col items-center">
                <a href="http://localhost/tsoba" title="Нүүр Хуудас руу очих...">
                    <img class="max-w-full h-auto" src="http://localhost/tsoba/wp-content/uploads/2022/02/logo1.png" alt="logo">
                </a>

                <ul class="text-center mt-2 md:text-end">
                    <li class="mx-1 inline leading-7 text-sm"><a class="text-black text-small" href="https://www.facebook.com/Tsobahouse"><i class="fab fa-facebook-f mx-3 text-white mt-2 text-lg cursor-pointer duration-300 hover:text-blue-800"></i></a></li>
                    <li class="mx-1 inline leading-7 text-sm"><a class="text-black text-small" href=""><i class="fab fa-youtube mx-3 text-white mt-2 text-lg cursor-pointer duration-300 hover:text-red-600"></i></a></li>
                    <li class="mx-1 inline leading-7 text-sm"><a class="text-black text-small" href=""><i class="fab fa-instagram mx-3 text-white mt-2 text-lg cursor-pointer duration-300 hover:text-fuchsia-600"></i></a></li>
                </ul>
            </div>
            <div class="flex flex-col items-center lg:items-start w-[26rem]">
                <h1 class="text-white text-[16px] ml-7 mt-4 leading-[24px] font-thin" style="font-family: 'Fira Sans Condensed', sans-serif !important;">Холбоо барих</h1>
                <div class="!px-[5%] md:!px-[3%] flex flex-col my-4">
                    <div class="flex flex-row items-center justify-center mx-2">
                        <a href="<?php the_permalink( get_page_by_title('Холбоо барих') );?>">
                            <i class="fa-solid fa-location-dot text-3xl text-white my-1 mx-4 duration-300 active:text-red-500"></i>
                        </a>
                        <p class="text-white text-[16px] leading-[24px] font-thin" style="font-family: 'Fira Sans Condensed', sans-serif !important;">
                        Монгол улс, Улаанбаатар хот, Банязүрх дүүрэг, 2-р хороо, Сөүл Бизнес Төвийн 3 давхарт
                        </p>
                    </div>
                    <div class="flex flex-row items-center justify-start mx-2 mb-4 mt-6">
                        <a href="<?php the_permalink( get_page_by_title('Холбоо барих') );?>">
                            <i class="fa-solid fa-phone-volume text-3xl text-white my-1 mx-4 duration-300 active:text-green-500"></i>
                        </a>
                        <p class="text-white text-[16px] leading-[24px] font-thin" style="font-family: 'Fira Sans Condensed', sans-serif !important;">
                        +976-7733355<br>
                        +976-9401205
                        </p>
                    </div>
                    <div class="flex flex-row items-center justify-start m-2">
                        <a href="<?php the_permalink( get_page_by_title('Холбоо барих') );?>">
                            <i class="fa-solid fa-comment text-3xl text-white my-1 mx-4"></i>
                        </a>
                        <p class="text-white text-[16px] leading-[24px] font-thin" style="font-family: 'Fira Sans Condensed', sans-serif !important;">
                        sales@tsoba.mn
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-300">
            <div class="flex items-center justify-between mt-4 pb-6">
                <h1 class="text-white text-[16px] leading-[24px] font-thin" style="font-family: 'Fira Sans Condensed', sans-serif !important;">
                    ЦОБА ХХК © 2022. Хуулиар хамгаалагдсан
                </h1>

                <h1 class="text-gray-300 text-[16px] leading-[24px] font-thin" style="font-family: 'Fira Sans Condensed', sans-serif !important;">
                    COPIED FROM: tsoba.mn 
                </h1>
            </div>
        </div>
    </div>
</footer>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper undsen swiper heseg -->
<script>
    const swiperMain = new Swiper(".myMainSwiper", {
        grabCursor: true,
        // sliderPerView: 3,
        spaceBetween: 10,
        effect: "fade",
        autoplay: true,
        loop: true,
        // pagination: {
        //     el: ".swiper-pagination",
        //     dynamicBullets: true,
        // },
    });
</script>

<!-- ---Swiper hamtragch baiguulga heseg-- -->
<script>
    const sliderSwipe = new Swiper('.sliderSwiper', {
        autoplay: true,
        loop: true,
        slidesPerView: 6,
        spaceBetween: 10,
         breakpoints: {
            // when window width is >= 320px
            320: {
            slidesPerView: 1,
            spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
            slidesPerView: 2,
            spaceBetween: 30
            },
            // when window width is >= 640px
            720: {
            slidesPerView: 3,
            spaceBetween: 40
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 10
            }
        }
    })
</script>

<!-- --Swiper News-- -->
<script>
    const swiperSliderNews = new Swiper('.newsSwiper', {
        slidesPerView: 3,
        grabCursor: true,
        effect: "fade",
        autoplay: true,
        loop: true,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 10
            }
        }
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
    })
</script>


<!-- --Tab-- -->
<script>
function openCity(evt, building){
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(building).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script>
function openBuild(evtf, secondBuild){
    var i, content, links;
    content = document.getElementsByClassName("content");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
    }
    links = document.getElementsByClassName("links");
    for (i = 0; i < links.length; i++) {
        links[i].className = links[i].className.replace(" active", "");
    }
    document.getElementById(secondBuild).style.display = "block";
    evtf.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("default").click();
</script>

<!-- --AOS-- -->
<script>
    // Initialize AOS
    AOS.init();
</script>

<!-- --Scroll top to the page-- -->

<script>
const btn = document.querySelector("#myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1300 || document.documentElement.scrollTop > 1300) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<!-- --SidePanel-- -->
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "35%";
//   document.body.style.opacity = "70";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
  document.body.style.backgroundColor = "inherit";
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        document.getElementById("mySidepanel").style.width = "0";
    } 
}
</script>
<!-- --Side Hamburger menu (responsive)-- -->
<script>
    function openResMenu(){
        const myOpenMenu = document.querySelector(".myOpenMenu");
        myOpenMenu.style.width = "60%";
        document.body.style.backgroundColor = "rgba(49,49,49,0.5)"
        document.body.style.overflow = "hidden";
    }
    function closeMenu(){
        const myOpenMenu = document.querySelector(".myOpenMenu");
        myOpenMenu.style.width = "0%";
        document.body.style.backgroundColor = "inherit"
        document.body.style.overflow = "auto";
    }

    // --Search Bar--
   const icon = document.querySelector("#closeIcon");
        document.addEventListener("click", ()=> {
        icon.classList.toggle("fa-solid fa-xmark");
    })

</script>

<!-- --Modal Images-- -->
<script>
// Get the modal
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
//   document.body.style.overflow = "hidden";
}
function closeModal(){
    const modal = document.querySelector("#modal01");
    modal.style.display = "none"
}
</script>
</body>
</html>
