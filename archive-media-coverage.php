<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();

    // Retrieves the coverage URL stored from the database
    $meta_value = get_post_meta( get_the_ID(), 'coverage-url', true );
    // Checks and displays the retrieved value
    if( !empty( $meta_value ) ) {

       echo '<h1 class="entry-title"><a href="', $meta_value ,'">';
          the_title();
       echo '</a></h1>';
    }
 // echo '<div class="entry-content">';

 //   the_content();
 //   echo '</div>';

endwhile; endif;
get_footer();
?>
