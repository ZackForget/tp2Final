<?php

while ( have_posts() ) :
    the_post();

endwhile;


//JAVASCRIPT POUR AFFICHER ON CLICK

echo '<h2>' .category_description(get_category_by_slug('evenements')) . '</h2>';


$args3 = array(
    "category_name" => "evenements",
    "posts_per_page" => 1
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