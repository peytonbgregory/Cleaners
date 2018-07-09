<?php /* Grid Layout with hover effects for archive and category pages */ ?>
<section class="grid-container" id="thumbnail-grid">
<div class="grid-x grid-margin-x">
<?php if ( have_posts() ) : ?> 
    <div class="cell small-12">
       <header class="entry-header text-center">
      <h1 class="entry-title"><?php bloginfo('name'); ?> <?php $post_type = get_post_type( $post->name );
echo $post_type; ?>s</h1>
		  </header>
	</div>
    <?php while ( have_posts() ) : the_post(); ?>
     
       <div class="small-12">
       
        <div class="grid-container">
         <div class="callout small">
        <div class="grid-x grid-margin-x">
        
         <?php if ( has_post_thumbnail()) { ?>
            <div class="cell shrink">
              <?php the_post_thumbnail('thumbnail', array('class'=>'thumbnail')); ?>
            </div>
          <?php } ?>
          <div class="cell auto">
             <small>     
                  	<h4 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
               
                  <div class="entry-content">
                      <?php the_excerpt(); ?>
                  </div>
			  <a class="button small primary float-right" href="<?php the_permalink(); ?>">Learn More</a>
			  </small>
          </div>
			
      </div><!-- grid-x -->
			</div>
	</div><!-- small-12 med-6 -->
	</div><!-- well -->
    <?php endwhile; else : get_template_part( 'no-results', 'index' ); endif; ?>
	</div>
</section>
