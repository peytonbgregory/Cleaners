<form action="/" method="get" class="pg-search-wrapper" id="search-form">
<div class="input-group">
  <input class="search-box input-group-field" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search <?php echo bloginfo(); ?>" />
  <div class="input-group-button">
    <input type="submit" class="button" value="Search">
  </div>
</div>
</form>