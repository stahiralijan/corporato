<div class="container">
	<header>
		<div class="logo">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php else: ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $base_path . $directory .'/images/logo.gif'; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php endif; ?>
		</div><!--/logo-->
		<div class="right search-form">
			<form action="<?php print base_path().'search/node'; ?>" method="post" accept-charset="UTF-8">
				<input type="text" id="edit-keys" name="keys" value="" size="30" maxlength="255" class="form-text" placeholder="Search...">
			</form>
		</div><!--/search-form-->
		<?php if($corporato_main_menu) : ?>
		<nav><?php print $corporato_main_menu; ?></nav>
		<?php endif; ?>
	</header>
	<article>
		<?php if(drupal_is_front_page()) : ?>
			<?php
			drupal_add_js(drupal_get_path('theme', 'corporato') . '/js/cycle2.js');
			drupal_add_js(drupal_get_path('theme', 'corporato') . '/js/center2.js');
			drupal_add_js(drupal_get_path('theme', 'corporato') . '/js/slide.js'); ?>

		<div class="carousel-container">

			<div class="home-slider">
				<div class="cycle-slideshow"
				     data-cycle-caption-plugin='caption2'
				     data-cycle-slides="li"
				     data-cycle-fx='scrollHorz'
				     data-cycle-speed='700'
				     data-cycle-timeout='8000'
				     data-cycle-center-horz=true
				     data-cycle-center-vert=true
				     data-cycle-prev=".prev"
				     data-cycle-next=".next"
				     data-cycle-caption-template=""
				     data-cycle-pause-on-hover="true" >
					<div class="cycle-caption custom"></div>
					<a href="javascript:void(0);" class="prev" title="Previous"></a>
					<a href="javascript:void(0);" class="next" title="Next"></a>
					<ul class="carousel">
						<li data-cycle-ptitle="Phony Title 1"
							data-cycle-ptext=""
							data-cycle-pmore=""
							class="cycle-slide"
							data-cycle-plink="#">
							<h2>Phony title 1</h2>
							<p>Phony Description 1</p>
							<img style="width: 1170px" src="<?php print theme_get_setting('slide_1_url'); ?>"/>
						</li>
						<li data-cycle-ptitle="Phony Title 2"
						    data-cycle-ptext=""
						    data-cycle-pmore=""
						    class="cycle-slide"
						    data-cycle-plink="#">
							<h2>Phony title 2</h2>
							<img src="<?php print theme_get_setting('slide_2_url'); ?>"/>
						</li>
						<li data-cycle-ptitle="Phony Title 3"
						    data-cycle-ptext=""
						    class="cycle-slide"
						    data-cycle-pmore=""
						    data-cycle-plink="#">
							<h2>Phony title 3</h2>
							<img src="<?php print theme_get_setting('slide_3_url'); ?>"/>
						</li>
					</ul>
				</div>
			</div>

		</div><!-- /carousel-container -->

		<div class="sidebar left">
			<?php print _social_address(); ?>
		</div><!--/sidebar-->

		<div class="content">
			<div class="features">
				<?php

				echo theme_get_setting('features_item_1','corporato');
				echo theme_get_setting('features_item_2','corporato');
				echo theme_get_setting('features_item_3','corporato');
				echo theme_get_setting('features_item_4','corporato');

				?>
			</div><!--/features-->

			<div class="quick-links">
				<div class="link-item">
					<img class="left" src="<?php echo theme_get_setting('quicklink_1_url'); ?>">
					<div class="left">
						<?php echo theme_get_setting('quicklink_1_text'); ?>
					</div>
				</div><!--/link-item-->
				<div class="link-item">
					<img src="<?php echo theme_get_setting('quicklink_2_url'); ?>">
					<div>
						<?php echo theme_get_setting('quicklink_2_text'); ?>
					</div>
				</div><!--/link-item-->
				<div class="link-item">
					<img src="<?php echo theme_get_setting('quicklink_3_url'); ?>">
					<div>
						<?php echo theme_get_setting('quicklink_3_text'); ?>
					</div>
				</div><!--/link-item-->
				<div class="link-item">
					<img src="<?php echo theme_get_setting('quicklink_4_url'); ?>">
					<div>
						<?php echo theme_get_setting('quicklink_4_text'); ?>
					</div>
				</div><!--/link-item-->
			</div><!--/quick-links-->
		</div><!--/content-->

		<?php else : ?>

		<div class="sidebar left">
			<?php echo _sidebar_menu(); ?>
			<?php print _social_address(); ?>
		</div><!--/sidebar-->

		<?php print(drupal_render($page['content'])); ?>

		<?php endif; ?>
	</article>
	<footer>
		<p><?php print theme_get_setting('footer_text'); ?></p>
	</footer>
</div><!--/container-->