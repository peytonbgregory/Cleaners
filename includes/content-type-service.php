

  <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="cell small-12"><?php // pgthrottle_breadcrumbs(); ?></div>
        <div class="cell small-12 medium-8 large-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        echo '<div class="post-wrapper">';
        if ( is_front_page() && is_home() ) {

        	echo '<div class="entry-content">';
        		echo the_content();
        	echo '</div>';

         } elseif ( is_front_page()) {

        	echo '<div class="entry-content">';
         		echo the_content();
         	echo '</div>';

         } elseif ( is_home()) {

        	echo '<div class="entry-content">';
             echo the_content();
           echo '</div>';

         } else {

        	echo '<h1 class="entry-title">';
        		echo the_title();
        	echo '</h1><div class="entry-content">';
        		echo the_content();
        	echo '</div>';
        	echo '</div>'; //post wrapper
         } endwhile; else :



        endif; wp_reset_query (); ?>
      </div>
      <div class="cell auto">
        <?php get_sidebar(); ?>
      </div>

</div>

    </div>
