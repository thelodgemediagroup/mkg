
	<?=fuel_edit($post)?>
	
	<?=blog_block('post_unpublished', array('post' => $post))?>
	
   <h2 class="article-title" ><?=$post->title?></h2>
    <span class="line" >
        <span class="sub-line" ></span>
    </span>

	<!-- begin Post -->
    <section class="row">
        <article class="post">
			<?php if ($post->get_image_path()) : ?>
			<img src="<?php echo $post->get_image_path(); ?>" alt="<?=$post->title?>" />
			<?php endif; ?>
 			<p><?=$post->get_date_formatted()?></p>
 			<?=$post->content_formatted?>
        </article>
    </section>
    <!-- end Post -->
<?php /*

	<?php if ($post->comments_count > 0) : ?>
        <h2 class="article-title" >Comments (2)</h2>
        <span class="line" >
            <span class="sub-line" ></span>
        </span>
        <section class="row container-comments">
        	<?php foreach($post->comments as $comment) : ?>
            <article class="single-comment">
                <header>
                    <h4><?=$comment->author_and_link?> <small> / <?=$comment->get_date_formatted('h:iA / M d, Y')?></small></h4>
                </header>
                <div class="comment-bubble">
					<?=$comment->content_formatted?>
                </div>
            </article>
        	<?php endforeach; ?>
	<?php endif; ?>

<?php if ($post->allow_comments) : ?>
	<div class="comment_form">
	<a name="comments_form"></a>

	<?php if ($post->is_within_comment_time_limit()) : ?>
		<?php if (empty($thanks)) : ?>
		<h3>Leave a Comment</h3>
		<?php else: ?>
		<?=$thanks?>
		<?php endif;
		 ?>
		<?=$comment_form?>
	<?php else: ?>
		<p>Comments have been turned off for this post.</p>
	<?php endif; ?>
	</div>

<?php else: ?>
	<p>Comments have been closed.</p>
<?php endif; ?>
*/ ?>