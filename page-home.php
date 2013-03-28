<?php
/*
Template Name: Home
*/
?><?php $t =& peTheme(); ?>
<?php get_header(); ?>

<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>


<section  class="row-fluid banner">
<div id="home-slide-auto">
<h1>Auto accident care</h1>
<p>We are expert at chiropractic adjustments, massage therapy, rehabilitation and other pain relief techniques.<br>We will also assist you and help you with billing questions and insurance issues.</p>
</div>
</section>
</div><!--container-->
<!-- home contact -->
<div id="home-contact">
	<div class="container">
	<div class="row-fluid">
		<div class="span3 home-contact-address">
			<p class="home-contact-title">
			Bellevue
			</p>
			<p class="home-contact-desc">
			1601 116th Ave NE, Suite 111<br>Bellevue, WA 98004
			</p>
			<p class="home-contact-foot">
			<a class="home-contact-learnMore" href="/contact/">Learn More</a>
			</p>
			<div class="home-contact-div"></div>
		</div>
		<div class="span3 home-contact-address">
			<p class="home-contact-title">
			Seattle
			</p>
			<p class="home-contact-desc">
			1601 116th Ave NE, Suite 111<br>Bellevue, WA 98004
			</p>
			<p class="home-contact-foot">
			<a class="home-contact-learnMore" href="/contact/">Learn More</a>
			</p>
			<div class="home-contact-div"></div>
		</div>
		<div class="span3 home-contact-phone">
			<p class="home-contact-title">
			Call Us
			</p>
			<p class="home-contact-desc">
			Start living happier<br>and healther today!
			</p>
			<p class="home-contact-foot">
			(425)285-9304
			</p>

		</div>
	</div>
	<div id="home-contact-img-alt">
	</div>
	</div>
	
</div>
<div class="site-wrapper container">

<?php while ($content->looping()): ?>

<div class="row-fluid">
	
	<!--whychooseus sidebar-->
	<aside class="span5 whychooseus-sidebar">

		<h3>Why Choose Us?</h3>
		
		<ul class="whychooseus">
			
			<li>				
				<a href="http://best.king5.com/austin-d-hsu-d-c/biz/537977" class="thebestof">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/thebestofwashington.png" alt="the Best of Western Washington" />
				</a>
			</li>
			<li>				
				<a href="http://best.king5.com/austin-d-hsu-d-c/biz/537977" class="thebestof">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/thebestof425.png" alt="the Best of 425 Washington" />
				</a>
			</li>
			<li id="whychooseus-certified">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/trans200_hi.gif" id="trans" />
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/certifiedpostureexercisepro.png" id="certifiedPostureExercisePro" />
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/impulseadjusting.png" id="impulseAdjusting" />
			</li>
		</ul>
	</aside>
	<!--end whychooseus sidebar-->
		
	<!--main content-->
	<section class="span7 home-content">
		
		<div class="row-fluid">
			<div class="inner-spacer-left">
				<!--who are we-->
				<div class="span12 upper">
					<div class="row-fluid">
						<?php $content->content(); ?>
					</div>
					
				</div>
				<!--end who are we-->
			</div>
			
		</div>

		<?php $projects = $meta->projects; ?>

		<?php if (count($projects->items) > 0) : ?>
		<div class="row-fluid">
			
			<div class="inner-spacer-left">
				<!--office-->
				<div class="span12 lower">
					<h3>
						Our Office
					</h3>

					<?php if ($content->customLoop("project",-1,null,null,false)): ?>
					<?php while ($content->looping(2)): ?>
					<?php $content->beginRow('<div class="row-fluid">') ?>
					<div class="span6 feat-<?php echo $content->idx() % 2 ? "right" : "left"; ?>">
						<a href="<?php $content->link(); ?>">
							<?php $content->img(460,300); ?>
						</a>
						<a class="caption" href="<?php $content->link(); ?>">
							<span class="icon-right-open"></span>
							<?php $content->title(); ?>
						</a>
					</div>
					<?php $content->endRow('</div>'); ?>
					<?php endwhile; ?>
					<?php $content->resetLoop(); ?>
					<?php endif; ?>
					
					

				</div>
				<!--end office-->
			</div>			
		</div>
		<?php endif; ?>

		
	</section>
	<!--end main content-->
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
