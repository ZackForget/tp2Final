<?php

//get_header();
get_template_part('header');
?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
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
       

        while ($query0->have_posts()){
            $query0->the_post();

            echo "<div id=confDiv>";
            echo "<section id=confDesc><h2>" . get_the_title();
            echo "  -  ";
            echo get_the_date() . "</h2>";
            the_post_thumbnail('thumbnail');
            
        }

        

        $args1 = array(
            "category_name" => "evenement",
            "posts_per_page" => 3,
            "orderby" => "date", 
            "order" => "ASC"

        );

        $query1 = new WP_Query($args1);

        



//Affichage des Evenement
    echo "<h1>" .category_description(get_category_by_slug('evenement')) . "</h1>";

    echo "<div id='nouvDivFull'>";

    
        while ($query1->have_posts()){
            $query1->the_post();
            
                echo "<div id='nouvDiv'>
                    <section id='nouvTitre'>
                         <h2>" . get_the_title() . "</h2>";
                    echo "<p>" . get_the_excerpt() . "</p></section>";
                    echo "<section='nouvImg'>";
                     the_post_thumbnail('thumbnail');
            echo "</section> </div>";
       
        }
        echo "</div>";



















		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();
