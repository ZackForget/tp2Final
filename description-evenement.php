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
 * @package underscore
 */


while ( have_posts() ) :
    the_post();

endwhile;

//JAVASCRIPT POUR AFFICHER ON CLICK

//Je n'ai pas réussi a faire marcher l'API Rest, donc j'ai juste mis la description d'un événement en bas de la grille
//Mon objectif était d'afficher la description de l'événement cliqué

//echo '<h2>' .category_description(get_category_by_slug('evenements')) . '</h2>';

$args3 = array(
    "category_name" => "evenements",
    "posts_per_page" => 1,
  "orderby" => "date", 
  "order" => "ASC"
);

$query5 = new WP_Query($args3);


while ($query5->have_posts()){
    $query5->the_post();

    echo "<div id=descDiv>";
    echo "<h2>" . get_the_title() . "</h2>";
    echo "  <br>  ";
    echo "<p>" . get_the_excerpt() . "</p>";
    echo "  <br>  ";
    echo "<p>" . get_the_author() . "</p> <br>";

    
    //echo get_the_date() . "</h2>";
    //the_post_thumbnail('thumbnail');
    
}


wp_reset_postdata();




?>
