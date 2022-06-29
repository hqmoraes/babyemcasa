<?php get_header();
	get_template_part('template-parts/navigation/nav_superior');
	echo '<h1 style="text-align: center; font-weight: bolder">'. get_the_category()[0]->name . ' com Baby em Casa</h1>';
    get_template_part('template-parts/content/sections');
	get_template_part('template-parts/navigation/paginar');
	get_footer(); ?>