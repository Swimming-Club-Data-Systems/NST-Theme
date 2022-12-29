<?php /* Template Name: Guidance */ ?>
<?php get_header(); ?>
<div class="row d-none d-print-block" style="margin-top:-50px">
    <div class="col-xs-12">
        <img class="img-fluid logo center-block" style="display: block;"
             src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Newcastle Swim Team Logo"/>
    </div>
</div>

<?php

$guidance;
if ($post->post_parent == 0) {
    $guidance = "Guidance";
} else {
    $parents = get_post_ancestors($post->ID);
    $guidance = apply_filters("the_title", get_the_title(end($parents)));
}

?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
            <div class="h4 text-muted mb-3"><?= $guidance ?></div>
            <div class="bg-primary text-white p-4 mb-4 d-inline-block">
                <?php if (have_posts()) : while (have_posts()) :
                the_post(); ?>
                <h1 class="entry entry-title"><?php the_title(); ?></h1>
                <time id="time" class="blog-post-meta mb-0" datetime="<?php the_modified_time('c'); ?>">Last updated
                    <span id="dtOut"><noscript><?php the_modified_time('j F Y'); ?></noscript></span></time>
                <!--<time id="time" class="published blog-post-meta" datetime="<?php the_time('c'); ?>"><i class="fa fa-clock-o" aria-hidden="true"></i> <span id="dtOut"><noscript><?php the_time('j F Y'); ?></noscript></span></time>-->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <main class="blog-main mb-5">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumb">
                        <?php the_post_thumbnail('big-thumb'); ?>
                    </div>
                <?php endif; ?>
                <div class="entry clearfix">
                    <?php the_content(); ?>
                </div>
                <?php wp_link_pages(); ?>
                <?php comments_template(); ?>
            </main>
            <?php endwhile;
            endif; ?>
        </div><!-- /.col -->
    </div>
</div>
<?php get_footer(); ?>
