<?php

get_header();

if (have_posts()): 
    while (have_posts()) : the_post();
    
?>
    <article class="post">
        <a href="<?php the_permalink();?>"><h2><?php  the_title(); ?></h2></a>
        <p><?php  the_content(); ?></p>
    </article>

<?php 
    endwhile;

else:
    echo '<p>No content!</p>';
endif;


get_footer();


?>