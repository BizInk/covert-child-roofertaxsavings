<?php
/**
 * Template Name: Front page
 */
?>

<?php luca()->getModule('hero')->renderBlock('front-hero', 'default', ['wrapper' => 'section section-forSolidBlocks section-frontHero']); ?>

<?php luca()->getModule('banners')->renderBlock('front-banner', 'default', ['wrapper' => 'section section-frontBanner', 'container' => true, 'isFirst' => true]); ?>

<?php luca()->getModule('columns')->renderBlock('front-columns', 'default', ['wrapper' => 'section section-frontColumns', 'container' => true]); ?>

<?php luca()->getModule('banners')->renderBlock('front-banner2', 'default', ['wrapper' => 'section section-frontBanner2', 'container' => true]); ?>

<?php luca()->getModule('textarea')->renderBlock('front-textarea', 'default', ['wrapper' => 'section section-frontTextarea', 'container' => true]); ?>

<?php luca()->getModule('blog')->renderBlock('front-blog', 'default', ['wrapper' => 'section section-frontBlog', 'container' => true]); ?>

<?php luca()->getModule('fixed-price-packages')->renderBlock('front-packages', 'default', ['wrapper' => 'section section-frontPackages', 'container' => true]); ?>

<?php luca()->getModule('testimonials')->renderBlock('front-testimonials', 'default', ['wrapper' => 'section section-frontTestimonials', 'container' => true]); ?>


