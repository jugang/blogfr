<?php include 'includes/header.php'; ?>
    <div class="blog-post">
    <?php if ($posts) : ?>
        <?php foreach ($posts as $post) : ?>
        <h2 class="blog-post-title"><?php echo $post->title; ?></h2>
            <p class="blog-post-meta"><?php echo dateFormat($post->date); ?> <a href="#"><?php echo $post->author; ?></a></p>
            <div class="body">
                <?php echo shortenText($post->body); ?>
            </div>
            <a class="readmore" href="post.php?id=<?php echo $post->id; ?>">Read more</a>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts to display</p>
    <?php endif; ?>
    </div><!-- /.blog-post -->
<?php include 'includes/footer.php'; ?>