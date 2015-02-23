<?php theme_include('header'); ?>
<section class="content wrap" id="article-<?php echo article_id(); ?>">
  <article>
    <div id="indy-article" class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <h2 clas="article_category-title"><?php echo article_category(); ?></h2>
          <div class="marquis-block">
            <h1><?php echo article_title(); ?></h1>
            <h3 class="post-subtitle"><?php echo article_description(); ?></h3>
            <h5 class="byline">Written on <?php echo article_date(); ?></h5>
            <?php if (($img = article_custom_field('sidebar_image')) || ($img = page_custom_field('sidebar_image'))): ?>
              <div class="article-pic" style="background-image: url('<?php echo $img; ?>');"></div>
            <?php endif; ?>
          </div>
          <div class="guts">
            <?php echo article_markdown(); ?>
            <hr />
          </div>
        </div> 
      </div>
    </div>
  </article>
  <hr />
</section>
<?php theme_include('footer'); ?>
