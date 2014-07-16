	<div class="col-sm-4">
		<h2>Recent Posts</h2>
		<?php
			foreach($recentPosts as $post)
			{
		?>
				<p><a href="/blog/<?php echo $post->URL ?>"><?php echo $post->Title ?></a></p>
		<?php
			}
		?>
		<p><a href="/blog/archive">Blog Archive</a>
	</div>
</div>