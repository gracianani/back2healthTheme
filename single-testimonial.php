<?php $t =& peTheme(); ?>
<?php get_header(); ?>
<?php get_template_part("tagline"); ?>
<?php $content =& $t->content; ?>

<?php while ($content->looping()): ?>

<div class="row-fluid">
	<div class="span12">
		<h1><?php $content->title(); ?></h1>
		<?php $content->content(); ?>
	</div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
