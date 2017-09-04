</div><!-- /.blog-main -->


<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
            <p><?php echo ABOUT; ?></p>
    </div>

    <div class="sidebar-module list-group">
        <h4 class="list-group-item <?php echo is_active(null); ?>">Categories</h4>
        <ul class="list-unstyled">
            <?php foreach (getCategories() as $category) : ?>
                <?php if ($category) : ?>
                <li><a href="posts.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>"><?php echo $category->name; ?></a></li>
                 <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>PHP Starter Blog &copy; 2017<p>
        <a href="#">Back to top</a>
    </p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo BASE_URI; ?>templates/js/bootstrap.js"></script>
</body>
</html>