<?php echo '<section class="grid-container flex-content">';
   if ( have_posts() ) : while ( have_posts() ) : the_post();  // FLEX CONTENT - Content Section

          // check if the flexible content field has rows of data
          if( have_rows('flex_content') ):
               // loop through the rows of data
              while ( have_rows('flex_content') ) : the_row();
              // Load Flex Content Section
              if( get_row_layout() == 'content_section' ): get_template_part('includes/flex/section-content');
              // Load Flex Accordion Section
              elseif( get_row_layout() == 'accordion_section' ): get_template_part('includes/flex/section-accordion');
              // Load Flex Accordion Section
              elseif( get_row_layout() == 'gallery_section' ): get_template_part('includes/flex/section-gallery');
              // Load Flex Staff Content
              elseif( get_row_layout() == 'staff_section' ): get_template_part('includes/flex/section-staff');
             endif; endwhile;  else :
              // no layouts found
          endif; // Flex Layouts Ends
         endwhile; else : endif; wp_reset_query (); // Loop Ends
echo '</section>'; ?>
