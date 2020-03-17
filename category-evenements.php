<?php


get_header();
?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
<?php


while ( have_posts() ) :
    the_post();
//get_template_part( 'template-parts/content', 'page' );
  // echo'  <h3>' . get_the_title() . '</h3>';


endwhile; // End of the loop.


$args2 = array(
  "category_name" => "evenements",
  "posts_per_page" => 16,
 

);

$query2 = new WP_Query($args2);

//Affichage des Événements
echo '<h2>' .category_description(get_category_by_slug('evenements')) . '</h2>';


echo '<div id="grilleevenement">';




 while ( $query2->have_posts()) :
  $query2->the_post();

    $jour = (int)get_the_date('j');
    $mois = (int)get_the_date('m');

    $gridArea = $jour . '/' . $mois . '/' . ($jour+1) . '/' . ($mois+1) ;


    echo "<script>console.log(" . $jour . " );</script>";
    echo "<script>console.log(" . $mois . " );</script>";
    echo "<script>console.log(" . $gridArea . " );</script>";

 echo '<div> <p style="grid-area: '.$gridArea . '">' . 
 get_the_title() . ' <br> ' .get_the_date('j / m / Y')
 ."</p> </div>";

 endwhile;


echo '</div>';
 
get_template_part('description-evenement');

?>