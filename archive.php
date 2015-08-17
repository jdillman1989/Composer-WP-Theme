<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>

<h1><?php single_cat_title(); ?></h1>
<br>


<?php
$args = array( 'orderby'=> 'title', 'order' => 'ASC' );
$productposts = get_posts( $args ); 
// here comes The Loop!
foreach( $productposts as $post ) :	setup_postdata($post);  ?>

	<div class="product">

		<?php the_post_thumbnail(); ?> 

		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>
	</div>
<?php endforeach; ?>

<?php get_footer(); ?>