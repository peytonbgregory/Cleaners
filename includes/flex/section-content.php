<section class="grid-x grid-margin-x align-strech" id="flex-section-content">
    <?php if( get_sub_field('show_heading') == 'Yes' ): ?>
    <div class="cell small-12 medium-12">
    <h2><?php the_sub_field('heading'); ?></h2>
    </div>
      <?php endif; ?>
<?php if( get_sub_field('column_format') == 'full-col' ): ?>
<div class="cell small-12 medium-12">
<?php the_sub_field('text_full'); ?>
</div>
  <?php endif; ?>
<?php if( get_sub_field('column_format') == 'two-col' ): ?>
<div class="cell small-12 medium-6">
<?php the_sub_field('text_two_col_1'); ?>
</div>
<div class="cell small-12 medium-6">
<?php the_sub_field('text_two_col_2'); ?>
</div>
<?php endif; ?>
<?php if( get_sub_field('column_format') == 'three-col' ): ?>

<div class="cell small-12 medium-4">
<?php the_sub_field('text_three_col_1'); ?>
</div>
<div class="cell small-12 medium-4">
<?php the_sub_field('text_three_col_2'); ?>
</div>
<div class="cell small-12 medium-4">
<?php the_sub_field('text_three_col_3'); ?>
</div>
<?php endif; ?>
<?php if( get_sub_field('column_format') == 'four-col' ): ?>

<div class="cell small-12 medium-3">
<?php the_sub_field('text_four_col_1'); ?>
</div>
<div class="cell small-12 medium-3">
<?php the_sub_field('text_four_col_2'); ?>
</div>
<div class="cell small-12 medium-3">
<?php the_sub_field('text_four_col_3'); ?>
</div>
<div class="cell small-12 medium-3">
<?php the_sub_field('text_four_col_4'); ?>
</div>
<?php endif; ?>
<?php if( get_sub_field('column_format') == 'right-sidebar' ): ?>

<div class="cell small-12 medium-8">
<?php the_sub_field('text_sidebar_right_1'); ?>
</div>
<div class="cell small-12 medium-4">
<?php the_sub_field('text_sidebar_right_2'); ?>
</div>

<?php endif; ?>
<?php if( get_sub_field('column_format') == 'left-sidebar' ): ?>
<div class="cell small-12 medium-4">
<?php the_sub_field('text_sidebar_left_1'); ?>
</div>
<div class="cell small-12 medium-8">
<?php the_sub_field('text_sidebar_left_2'); ?>
</div>

<?php endif; ?>
<?php if( get_sub_field('column_format') == 'right-sidebar-slim' ): ?>

<div class="cell small-12 medium-9">
<?php the_sub_field('text_slimbar_right_1'); ?>
</div>
<div class="cell small-12 medium-3">
<?php the_sub_field('text_slimbar_right_2'); ?>
</div>

<?php endif; ?>
<?php if( get_sub_field('column_format') == 'left-sidebar-slim' ): ?>
<div class="cell small-12 medium-3">
<?php the_sub_field('text_slimbar_left_1'); ?>
</div>
<div class="cell small-12 medium-9">
<?php the_sub_field('text_slimbar_left_2'); ?>
</div>
<?php endif; ?>
</section>