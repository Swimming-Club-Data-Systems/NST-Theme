<?php get_header(); ?>
<?php get_template_part('pageheader'); ?>
<div class="container">
    <div class="row">

        <div class="col-lg-8 blog-main">

            <?php if (have_posts()) : ?>

                <!--<h1>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php if (is_category()) { ?>
			<?php echo single_cat_title(); ?>

		<?php } elseif (is_tag()) { ?>
			<?php _e('Posts Tagged:', 'nst'); ?> <?php single_tag_title(); ?>

		<?php } elseif (is_day()) { ?>
			<?php _e('Archive for', 'nst'); ?> <?php echo get_the_date(); ?>

		<?php } elseif (is_month()) { ?>
			<?php _e('Archive for', 'nst'); ?> <?php echo get_the_date(_x('F Y', 'monthly archives date format', 'nst')) ?>

		<?php } elseif (is_year()) { ?>
			<?php _e('Archive for', 'nst'); ?> <?php echo get_the_date(_x('Y', 'yearly archives date format', 'nst')) ?>

		<?php } elseif (is_search()) { ?>
			<?php _e('Search Results', 'nst'); ?>

		<?php } elseif (is_author()) { ?>
			<?php _e('Author Archive', 'nst'); ?>

		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<?php _e('Blog Archives', 'nst'); ?>

		<?php } ?>

			</h1>-->

                <?php while (have_posts()) : the_post(); ?>

                    <div class="cell">
                        <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"
                                                       rel="bookmark"><?php the_title(); ?></a></h2>
                        <p class="blog-post-meta"><?php the_time('j F Y'); ?> - <?php the_category(', '); ?></p>

                        <?php the_content('Read more'); ?>
                    </div>
                <?php endwhile; endif; ?>

            <?php
            if (function_exists('wp_bootstrap_pagination'))
                wp_bootstrap_pagination();
            ?>

        </div><!-- /.blog-main -->

        <div class="col-lg-4"><?php get_sidebar(); ?></div>
    </div>
</div>
<?php get_footer(); ?>
