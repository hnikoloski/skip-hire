<?php

/**
 * Template Name: Home SP Template
 * 
 * @package Skip_Hire
 */

get_header();

?>
<?php
require('template-parts/hero.php');
require('template-parts/benefits-section.php');
require('template-parts/how-it-works.php');
require('template-parts/cta-form.php');

?>

<?php get_footer(); ?>