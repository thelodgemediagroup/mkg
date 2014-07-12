<?php $categories = $CI->fuel->blog->get_published_categories(); ?>
<?php if ( ! empty($categories)) : ?>
	<h3 class="article-title" >Categories</h3>
	<span class="line" >
		<span class="sub-line" ></span>
	</span>
	<ul class="custom-icon-list categories" >
		<?php foreach ($categories as $category) : 
		$cat_cnt = $category->posts_count;
		?>
		<?php if (!empty($cat_cnt)) : ?>
		<li><i class="entypo-cd" ></i>
			<?=fuel_edit($category)?>
			<a href="<?=$category->url?>"><?=$category->name?></a> (<?=$cat_cnt?>)
		</li>
		<?php endif; ?>
		<?php endforeach; ?>
	</ul>

<?php endif; ?>