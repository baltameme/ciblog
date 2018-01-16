<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
	<h3><?php echo $post['body']; ?></h3>

	<small class="post-date">Posted On: <?php echo $post['created_at']; ?></small><br>

	<?php echo $post['body']; ?>

	<!--Breakline -->
	<br><br>

	<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a> </p>

<?php endforeach;?>