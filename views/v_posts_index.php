<pre>
   <?php print_r($posts); ?>
</pre>

<?php foreach($posts as $post): ?>
<article>
	<h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>
	<p><?=$post['content']?></p>

   <!-- View the post -->
	<form method = 'POST' action = '/posts/view/<?=$post['post_id']?>'>
	<input type = 'submit' value = 'View post'>
	</form>

	<time datetime="<?Time::display($post['created'],'Y-m-d G:i')?>">
	   <?=Time::display($post['created'])?>
	</time>
</article>
<?php endforeach; ?>