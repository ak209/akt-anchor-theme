<?php theme_include('header'); ?>
<div class="container posts"> 
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">  
    <?php while(categories()): ?>
        blarg
      <?php endwhile; ?>

    <?php if(has_posts()) : while(posts()) : ?>
      <div class="post-preview">
        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
          <div class="thumb-block">
          <?php if (($img = article_custom_field('sidebar_image')) || ($img = page_custom_field('sidebar_image'))): ?>
            <img class="home-thumb" src="<?php echo $img; ?>">
          <?php endif; ?>
          </div>
          <div class="title-block">
            <h2 class="post-title"><?php echo article_title(); ?></h2>
            <h3 class="post-subtitle"><?php echo article_description(); ?></h3>
            <h5 class="byline">Written; <?php echo article_date(); ?></h5>
          </div>
        </a>
    </div>
    <?php endwhile; endif; ?>
    <?php if(has_pagination()) : ?>
    <!-- Pager -->
    <ul class="pager">
      <li class="previous"><?php echo posts_prev(); ?></li>
      <li class="next"><?php echo posts_next(); ?></li>
    </ul>
    <?php endif; ?>
    </div>
  </div>       
</div>
<hr>
<?php theme_include('footer'); ?>