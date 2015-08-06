<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>

<h2>That page doesn't exist!</h2> 
<p>Try doing a search:</p>

<?php
	get_search_form(); 
?>

<?php get_footer(); ?>
