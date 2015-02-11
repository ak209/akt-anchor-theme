<?php theme_include('header'); ?>
<section class="content wrap" id="article-<?php echo article_id(); ?>">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1><?php echo article_title(); ?></h1>
                    <h5 class="byline">Written on <?php echo article_date(); ?></h5>
                    <?php if (($img = article_custom_field('sidebar_image')) || ($img = page_custom_field('sidebar_image'))): ?>
                        <div class="article-pic" style="background-image: url('<?php echo $img; ?>');">
                        </div>
                    <?php endif; ?>
                    <div class="guts">
                        <?php echo article_markdown(); ?>
                        <hr />
                    </div>
                 </div>
                    
                    </div>
                </div>
            </div>
    </article>
    <hr />
</section>
<?php theme_include('footer'); ?>
