<div class="article">
	<h1 class="title"><?php print $title; ?></h1>
	<div class="article-content">
	<?php

		$img = render($content['field_category_image']);

		//hide($content['field_category_image']);

		echo render($content);
	?>
	</div><!--/article-content-->
</div>
<div class="category-image"><?php echo $img; ?></div><!--/category-image-->