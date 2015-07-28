<?php
	if(isset($items))
	{
		foreach($items as $delta => $item)
		{
			if(is_string($item))
			{
				echo '<div class="category-image">';
				echo $item;
				echo '</div><!--/category-image-->';
			}
		}
	}
?>