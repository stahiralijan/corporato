<div class="article">
	<h1 class="title">Search Results</h1>
	<div class="article-content">
		<?php if($search_results) : ?>
		<ol><?php print render($search_results); ?></ol>
		<?php else :

			echo '<h2>Nothing matches your query.</h2>';

		endif; ?>
	</div><!--/article-content-->
</div>
<?php if(isset($img)) : ?>
	<div class="category-image"><?php echo $img; ?></div><!--/category-image-->
<?php endif; ?>