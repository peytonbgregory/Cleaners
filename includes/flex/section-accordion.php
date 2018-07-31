<section class="grid-x grid-margin-x" id="flex-section-accordion">


    <div class="cell small-12">
<h3><?php the_sub_field('heading'); ?></h3>
<?php if( have_rows('accordion_group') ):
echo '<ul class="accordion" data-accordion>';
// loop through the rows of data
while ( have_rows('accordion_group') ) : the_row(); ?>
<li class="accordion-item" data-accordion-item>
  <a href="#" class="accordion-title"><?php the_sub_field('accordion_heading'); ?></a>
  <div class="accordion-content" data-tab-content>
    <p><?php the_sub_field('accordion_content'); ?></p>
  </div>
</li>
<?php endwhile; echo '</ul>'; endif; // Repeater End / Accordion End ?>
</div>

</section>
