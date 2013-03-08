<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class('leftaside'); ?>>
	<header class="post-header">
		<h1 class="post-title">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</h1>
	</header>
	<div class="row">
		<section class="post-content">
			<p><?php echo get_the_excerpt(); ?> <span class='more-link'><a href="<?php the_permalink(); ?>">Read On&hellip;</a></span></p>
		</section>
		<footer class="post-info">
                        <?php //the_post_thumbnail( 'thumbnail' ); 
                              frank_the_post_thumbnail()
                        ?>
			<?php get_template_part('partials/post-metadata'); ?>
		</footer>
	</div>
</article>