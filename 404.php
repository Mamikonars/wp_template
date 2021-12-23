<?php get_header(); ?>

</div>

<div class="not-found">
	<h1 class="not-found_info"><?php esc_html_e('Page not found', 'ski') ?></h1>
	<div class="not-found_description"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Go to HomePage', 'ski') ?></a></div>
</div>
<?php get_footer(); ?>