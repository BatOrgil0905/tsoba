<?php?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- --FontAwesome-- -->
	<script src="https://kit.fontawesome.com/19e3167d97.js" crossorigin="anonymous"></script>
	<!-- --TailwindCSS-- -->
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- ---Bootstrap--- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<!-- ---Google Font--- -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Fira+Sans+Condensed:wght@300;400&family=PT+Sans&display=swap" rel="stylesheet">
	<!-- --AOS-- -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<?php wp_head(); ?>
	<style>
		#open{
			position: relative;
			display: inline-block;
		}
		#backdrop{
			display: none;
			position: absolute;
			min-width: 280px;
			top: calc(100%);
			white-space: nowrap;
			margin-top: 0 !important;
			border: unset;
			padding: 2rem 1rem;
			text-align: left;
			left: calc(15%);
			background-color: rgba(22,28,36,0.69);
			transition: all .5s ease;
			z-index: 999;
		}
		#open:hover #backdrop{
			display: block;
			transition: all .5s ease;
		}

		/* --GoToTheTopBtn-- */
		#myBtn {
			display: none;
			position: fixed;
			bottom: 18px;
			right: 18px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #A60E1C;
			color: white;
			cursor: pointer;
			padding: 1rem;
			border-radius: 1px;
			width: 50px;
			transition: all .3s ease-in;
			}

		#myBtn:hover {
			background-color: #555;
		}

		/* --SidePanels-- */
		.sidepanel  {
			width: 0;
			position: fixed;
			z-index: 100;
			height: 100%;
			top: 0;
			right: 0;
			background-color: rgba(22,28,36,0.69);
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
			opacity: 1;
		}

		.sidepanel a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidepanel a:hover {
			color: #f1f1f1;
		}

		.sidepanel .closebtn {
			position: absolute;
			top: 34px;
			right: 34px;
			font-size: 45px;
		}
		/* --Hamburger menu-- */
		.myOpenMenu {
			width: 0;
			position: fixed;
			z-index: 100;
			height: 100%;
			top: 0;
			left: 0;
			background-color: rgba(49, 49, 49, 1);
			overflow-x: hidden;
			transition: 0.5s;
			opacity: 1;
		}
		::-webkit-scrollbar{
			width: 0px;
		}
		.myOpenMenu a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 16px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.myOpenMenu a:hover {
			color: #f1f1f1;
		}

		.closeModalBtn{
			position: absolute;
			top: 25px;
			left: 50px;
			font-size: 50px;
			color: red;
		}
		#openSearch{
			position: relative;
			display: inline-block;
		}
		#dropSearch{
			display: none;
			position: absolute;
			min-width: 280px;
			top: calc(100%);
			white-space: nowrap;
			margin-top: 0 !important;
			border: unset;
			padding: 25px 12px;
			text-align: left;
			left: -215px;
			background-color: rgba(22,28,36,0.69);
			transition: all .5s ease;
			z-index: 999;
		}
		#openSearch:hover #dropSearch{
			display: block;
			transition: all .5s ease;
		}		
	</style>
</head>

<body class="!overflow-x-hidden" <?php body_class(); ?>>

<div id="mySidepanel" class="sidepanel">
	<a href="javascript:void(0)" class="closebtn hidden" onclick="closeNav()">×</a>
	<div>
		<img class="mx-auto mt-10 w-44" src="http://localhost/tsoba/wp-content/uploads/2022/02/logo1.png" alt="">
	</div>
	<div class="mt-6 mb-4 flex flex-col items-center justify-center gap-4">
		<div class="flex flex-row items-center justify-center gap-4">
			<img class="myImg w-[85px] duration-300 cursor-pointer hover:opacity-60" src="http://localhost/tsoba/wp-content/uploads/2022/03/side1.jpg" onclick="onClick(this)" alt="bla">
			<img class="myImg w-[85px] duration-300 cursor-pointer hover:opacity-60" src="http://localhost/tsoba/wp-content/uploads/2022/03/side2.jpg" onclick="onClick(this)" alt="bla">
			<img class="myImg w-[85px] duration-300 cursor-pointer hover:opacity-60" src="http://localhost/tsoba/wp-content/uploads/2022/03/side3.jpg" onclick="onClick(this)" alt="bla">
		</div>
		<div class="flex flex-row items-center justify-center gap-4">
			<img class="myImg w-[85px] duration-300 cursor-pointer hover:opacity-60" src="http://localhost/tsoba/wp-content/uploads/2022/03/side4.jpg" onclick="onClick(this)" alt="bla">
			<img class="myImg w-[85px] duration-300 cursor-pointer hover:opacity-60" src="http://localhost/tsoba/wp-content/uploads/2022/03/side5.png" onclick="onClick(this)" alt="bla">
			<img class="myImg w-[85px] duration-300 cursor-pointer hover:opacity-60" src="http://localhost/tsoba/wp-content/uploads/2022/03/side6.jpg" onclick="onClick(this)" alt="bla">
		</div>
	</div>
</div>

<div class="myOpenMenu">
	<div class="flex items-center justify-between mb-4 py-4 pl-6 bg-[#313131] border-b border-gray-600 sticky top-0 z-40">
		<a href="javascript:void(0)" class="absolute right-1 !pr-6 !text-4xl" onclick="closeMenu()">×</a>
		<img class="w-12" src="http://localhost/tsoba/wp-content/uploads/2022/03/tsoba_icon_small.png" alt="">
	</div>
	
	<div class="flex flex-col mt-6">
		<ul class="!my-auto block flex flex-col items-start font-light text-[8px]" id="menu">
			<?php wp_nav_menu(array('theme location' => 'primary', 'container' => false, 'items_wrap' => '%3$s')); ?>
		</ul>
	</div>
</div>

<!-- --Header-- -->
<header id="header" class="relative z-40" style="background-color: rgba(22,28,36,0.69);color: rgba(255,255,255,1)">
	<div class="flex flex-row justify-between relative">
		<!-- --Hamburger toggle starts-- -->
			<label for="menu-toggle" onclick="openResMenu()" class="block !my-auto !mx-auto cursor-pointer xl:ml-12 xl:hidden">
				<div class="ease-in duration-500">
					<div class="h-[2px] w-5 bg-white mt-1"></div>
					<div class="h-[2px] w-5 bg-white mt-1"></div>
					<div class="h-[2px] w-5 bg-white mt-1"></div>
				</div>
			</label>
			<input class="hidden duration-300" type="checkbox" id="menu-toggle" />
		<!-- --Hamburger toggle ends-- -->
		<div class="">
			<a href="http://www.localhost/tsoba">
				<img class="!my-auto !mx-auto p-4" src="<?php echo get_template_directory_uri(); ?>/images/tsoba_icon_w.png" alt="">
			</a>
		</div>
	
		<div>
			<ul class="hidden ml-0 xl:block xl:flex xl:flex-row xl:justify-between xl:items-center xl:font-light xl:leading-8 xl:text-[18px] xl:ml-8" id="menu">
				<?php wp_nav_menu(array('theme location' => 'primary', 'container' => false, 'items_wrap' => '%3$s')); ?>
			</ul>
		</div>

		<div id="openSearch" class="!my-auto px-4 py-8 mx-auto xl:mr-24 cursor-pointer">
			<!-- <div class="w-[17px] mt-2 h-[17px] border border-white rounded-full duration-300 group-active:w-[1px] group-active:h-[25px] group-active:rotate-45 group-active:translate-y-4 group-active:translate-x-2"></div>
			<div class="h-[10px] ml-4 w-[1px] bg-white text-white -translate-y-1/2 translate-x-1/2 -rotate-45 duration-300 group-active:h-[25px] group-active:-translate-x-2 group-active:-translate-y-2 group-active:w-[1.5px]"></div> -->
			<div id="closeIcon">
				<div class="w-[17px] mt-2 h-[17px] border border-white rounded-full"></div>
				<div class="h-[10px] ml-4 w-[1px] bg-white text-white -translate-y-1/2 translate-x-1/2 -rotate-45"></div>
			</div>
			<ul id="dropSearch">
				<?php echo do_shortcode('
					[ivory-search id="162" title="Default Search Form"]
				')?>
			</ul>
		</div>

		<button class="openbtn hidden xl:block " onclick="openNav()">
			<div class="block h-full px-10 flex items-center absolute right-0 top-0 cursor-pointer group" style="background-color:rgba(22,28,36,0.69); color:rgba(255,255,255,1)">
				<div class="inline-block align-middle cursor-ponter w-[24px] h-[24px] mt-0 relative">
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute left-0 duration-300 group-hover:left-[18px]"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute left-[9px]"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute duration-300 left-[18px] group-hover:left-0"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute left-0 top-[9px]"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute top-[9px] left-[9px]"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute top-[9px] left-[18px]"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute duration-300 top-[18px] left-0 group-hover:left-[18px]"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute top-[18px] left-[9px]"></div>
					<div class="bg-transparent inline-block w-[6px] h-[6px] rounded-full border border-white align-top absolute duration-300 top-[18px] left-[18px] group-hover:left-0"></div>
				</div>
			</div>
		</button>
	</div>
</header>

<!-- The Modal -->
<div id="modal01" class="modal overflow-hidden" style="z-index:999;">
	<div class="modal-content relative w-full h-full overflow-hidden" style="background-color:rgba(0,0,0,0.9);">
		<a href="javascript:void(0)" class="closeModalBtn" onclick="closeModal()">×</a>
		<img id="img01" class="w-auto h-auto lg:h-[50vh] lg:w-[50vh] mx-auto my-auto" style="">
	</div>
</div>

<!-- -- Go to top button-- -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up-long"></i></button>

