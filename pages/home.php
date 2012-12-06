<?php include __DIR__.'/header.php' ?>
	<ol>
	<?php foreach ($posts as $slug => $post): ?>
		<li>
			<article>
				<h1><?php echo $post->archurl->title ?></h1>
        				<ul>
                  <li>Title: <?php echo $post->archurl->title ?></li>
                  <li>Author: <?php echo $post->archurl->authorname ?></li>
                  <li>File : <img src="<?php echo $post->archurl->files_url ?>" /></li>
                  
                  <li><a href="<?php echo $post->archurl->doc_url ?>">URL source</a></li>
                  <li><a href="<?php echo $post->archurl->xml_url ?>">XML source</a></li>
                </ul>
			</article>
		</li>
	<?php endforeach ?>
	</ol>
	<?php include __DIR__.'/pagination.php' ?>
<?php include __DIR__.'/footer.php' ?>
