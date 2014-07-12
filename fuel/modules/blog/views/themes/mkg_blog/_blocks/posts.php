<section class="posts">
	<?=fuel_edit('create', 'Create Post', 'blog/posts')?>
	<?php if (!empty($posts)) : ?>
		<?php foreach($posts as $post) : ?>
		<article class="post">
			<?=fuel_edit($post)?>
			<?=blog_block('post_unpublished', array('post' => $post))?>
			<?php if ($post->get_image_path()) : ?>
			<img src="<?php echo $post->get_image_path(); ?>" alt="<?=$post->title?>" />
			<?php endif; ?>
			<header>
				<h3><?=$post->title?></h3>
			</header>
			<p><?=$post->excerpt_formatted?></p>
			<a href="<?=$post->url?>" class="readmore">Read more <i class="entypo-right-open" ></i></a>
			<footer>
				<span><i class="entypo-pencil" ></i><?=$post->author_name?></span>
				<span><i class="entypo-calendar" ></i><?=$post->get_date_formatted('F')?> <?=$post->get_date_formatted('d')?>, <?=$post->get_date_formatted('Y')?>  </span>
			</footer>
		</article>
		<?php endforeach; ?>
	<?php else: ?>
	<div class="no_posts">
		<p>There are no posts available.</p>
	</div>
	<?php endif; ?> 
</section>