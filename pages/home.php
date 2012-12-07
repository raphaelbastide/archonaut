<?php include __DIR__.'/header.php' ?>
	<ol>
	<?php foreach ($posts as $slug => $post): ?>
		<li>
			<article>
        <ul>
          <li>
            <label>Title</label>
            <p><?php echo $post->archurl->title ?></p>
          </li>
          <li>
            <label>Author</label>
            <p><?php echo $post->archurl->authorname ?></p>
          </li>
          <li>
            <label>Creation date</label>
            <p><?php echo $post->archurl->creation_date ?></p>
          </li>
          <li>
            <label>File</label>
            <p><img src="<?php echo $post->archurl->files_url ?>" /></p>
          </li>
          <li>
            <label>Sources</label>
            <ul class="sources">
              <li><a href="<?php echo $post->archurl->doc_url ?>">URL source</a></li>
              <li><a href="<?php echo $post->archurl->xml_url ?>">XML source</a></li>
            </ul>
          </li>
			</article>
		</li>
	<?php endforeach ?>
	</ol>
	<?php include __DIR__.'/pagination.php' ?>
<?php include __DIR__.'/footer.php' ?>
