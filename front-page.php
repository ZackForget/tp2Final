<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

//get_header();
?>

		<?php


		while ( have_posts() ) :
			the_post();
		get_template_part( 'template-parts/content', 'page' );
           // echo get_the_title();


        endwhile; // End of the loop.
        


echo '<h2>' .category_description(get_category_by_slug('nouvelle')) . '</h2>';

$args = array(
    "category_name" => "nouvelle",
    "posts_per_page" => 3
);

    $query = new WP_Query($args);

    while ($query->have_posts()){
        $query->the_post();
        echo "<h2>" . get_the_title() . "</h2>";
        echo "<p>" . get_the_excerpt() . "</p>";
        the_post_thumbnail('thumbnail');
    }



    echo '<h2>' .category_description(get_category_by_slug('Événement')) . '</h2>';

    $args = array(
        "category_name" => "Événement",
        "posts_per_page" => 3
    );
    
        $query = new WP_Query($args);
    
        while ($query->have_posts()){
            $query->the_post();
            echo "<h2>" . get_the_title() . "</h2>";
            echo "<p>" . get_the_excerpt() . "</p>";
            the_post_thumbnail('thumbnail');
        }
    
    
    

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();