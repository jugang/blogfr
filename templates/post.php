<?php include 'includes/header.php'; ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $singlePost->title; ?></h2>
        <p class="blog-post-meta"><?php echo dateFormat($singlePost->title); ?> <a href="#"><?php echo $singlePost->author; ?></a></p>
        <div class="post"><?php echo $singlePost->body; ?></div>
    </div><!-- /.blog-post -->
<?php include 'includes/footer.php'; ?>