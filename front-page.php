<?php

//get_header();
get_template_part('header');
?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');
</style>
		<?php


		while ( have_posts() ) :
			the_post();
		get_template_part( 'template-parts/content', 'page' );
           // echo get_the_title();


        endwhile; // End of the loop.
        

        
        $args0 = array(
            "category_name" => "nouvelle",
            "posts_per_page" => 3,
            "orderby" => "date", 
            "order" => "DESC"
        );

        $query0 = new WP_Query($args0);



        //Affichage Nouvelles
        echo '<h1>' .category_description(get_category_by_slug('nouvelle')) . '</h1>';
       

        echo "<div id=containNouv>";

        while ($query0->have_posts()){
            $query0->the_post();

            echo "<div id=nouvDiv>";
            echo "<section id=nouvDesc><h2>" . get_the_title();
            echo "  <br> ";
            echo get_the_date() . "</h2> </section>";
            the_post_thumbnail('thumbnail');
            echo "</div>";
            
        }

        echo "</div>";

        wp_reset_postdata();








        $args = array(
            "category_name" => "evenements",
            "posts_per_page" => 3,
            "orderby" => "date", 
            "order" => "ASC"

        );

        $query1 = new WP_Query($args);


//Affichage des Evenement
    echo "<h1 id='titreEve'>" .category_description(get_category_by_slug('evenements')) . "</h1>";

    

        
    echo "<div id=containEve>";
    
        while ($query1->have_posts()){
            $query1->the_post();
            
                echo "<div id='containDiv'>
                    <h2>" . get_the_title() . "</h2>";
                        echo "<section  id='eveDiv'>";
                            the_post_thumbnail('thumbnail');
                            echo "<p>" . get_the_excerpt() . "</p> </section>";
                   
                echo "</div>";
       
        }

        echo "</div>"






		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
