<?php $t =& peTheme(); ?>
<?php $meta = $t->content->meta(); ?>

<?php $show = $t->options->get("taglineShow") === "yes" ?>
<?php $show = $show && (empty($meta->tagline->show) || $meta->tagline->show === "yes");  ?>
<?php $borderClass = (empty($meta->tagline->border) || $meta->tagline->border === "no") ? "" : "border-bottom";  ?>

<?php if ($show): ?>
<?php $content = empty($meta->tagline->tagline) ? $t->options->get("taglineContent") : $meta->tagline->tagline; ?>

</div><!-- end of container-->
<!-- tagline-->
<section class="tagline <?php echo $borderClass; ?>">

	<div class="container">
		<?php $t->shortcode->run($content); ?>
	</div>
	
</section>
<!--end tagline-->
<div class="container">
<?php endif; ?>