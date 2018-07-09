<section class="grid-x grid-margin-x" id="flex-section-staff">
<?php if( get_sub_field('heading')) { ?>
	
<div class="cell small-12 medium-12 large-12">
	<h3><?php the_sub_field('heading'); ?></h3>
</div>
          <?php } ?>
             <?php if( have_rows('staff_group_flex') ): ?>
                   <?php while( have_rows('staff_group_flex') ): the_row(); ?>
                     <div class="cell small-4 medium-3 large-2">
                       <img src="<?php the_sub_field('staff_picture'); ?>" alt="<?php the_sub_field('staff_name'); ?>" class="thumbnail" />
                     </div>
                     <div class="cell small-8 medium-9 large-10">
                      <h4 class="subheader"><?php the_sub_field('staff_name'); ?></h4>
                      <p><?php the_sub_field('staff_about'); ?></p>
                    </div>
              <?php endwhile; ?> 
          <?php else : endif; ?> 
</section>