<?php include 'includes/header.php'; ?>
<?php if($posts) : ?>
    <ul id="posts">
    <?php foreach($posts as $post) : ?>
        <li class="blog-post">
            <h2 class="blog-post-title"><?php echo $post->title; ?></h2>
            <p class="blog-post-meta"><?php echo dateFormat($post->date); ?> <span><?php echo $post->author; ?></span> Category: <a href="<?php echo BASE_URI; ?>posts.php?category=<?php echo $post->category; ?>"><?php echo $post->name; ?></a></p>
            <div class="body">
                <?php echo shortenText($post->body); ?>
            </div>
            <a class="readmore" href="post.php?id=<?php echo $post->id; ?>">Read more</a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No Post to display</p>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>