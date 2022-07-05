<?php
/*
template name: Анкет
*/
get_header(); ?>

<section class="px-[6%] bg-slate-50">
    <div class="flex flex-col">
        <div class="my-8 flex items-center justify-center">
            <a  href="<?php the_permalink( get_page_by_title('Анкет') );?>">			
                <button class="py-[12px] px-[24px] rounded-md bg-rose-800 active:bg-rose-900 text-white" style="font-family: 'Fira sans Condensed', sans-serif">
                    Анкет татах
                </button>
            </a>
        </div>
    </div>
</section>

<?php get_footer();?>