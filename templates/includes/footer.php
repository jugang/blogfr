</div>
</div>
</div>
<div class="col-md-4">
    <div class="sidebar">
        <div class="block">
            <h3>Login form</h3>
            <form role="form">
                <div class="form-group">
                    <label>Username</lable>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" />
                </div>
                <div class="form-group">
                    <label>Password</lable>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" />
                </div>
                <button name="do_login" type="submit" class="btn btn-primary">Login</button><a href="register.php" class="btn btn-default">Create an account</a>
            </form>
        </div>
        <div class="block">
            <h3>Categories</h3>
            <div class="list-group">
                <a href="topics.php" class="list-group-item <?php echo is_active(null); ?>">All Topics<span class="badge pull-right"><?php echo $totalTopics; ?></span></a>
                    <?php foreach (getCategories() as $category) : ?>
                        <a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>"><?php echo $category->name?><span class="badge pull-right"><?php echo $totalCategories; ?></span></a>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>