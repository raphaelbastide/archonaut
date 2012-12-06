<?php include __DIR__.'/header.php' ?>
	<ol>
	<?php foreach ($posts as $slug => $post): ?>
		<li>
			<article>
				<h1><?php echo $post->archurl->title ?></h1>
        <!-- <img src="<?php echo $post->image->src ?>" alt="<?php echo $post->title ?>" width="<?php echo $post->image->width ?>" height="<?php echo $post->image->height ?>" /> -->
        				<ul>
                  <li>Title: <?php echo $post->archurl->title ?></li>
                  <li>Author: <?php echo $post->archurl->authorname ?></li>
                  <li><a href="<?php echo $post->archurl->doc_url ?>">URL source</a></li>
                  <li><a href="<?php echo $post->archurl->xml_url ?>">XML source</a></li>
                </ul>
			</article>
		</li>
	<?php endforeach ?>
	</ol>
	<?php include __DIR__.'/pagination.php' ?>
<?php include __DIR__.'/footer.php' ?>
