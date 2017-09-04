<!DOCTYPE html>
<html lang="en">
<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin area</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="../templates/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../templates/css/admin.css">
    <script src="../templates/js/ckeditor/ckeditor.js"></script>
    <script src="../templates/js/bootstrap.js"></script>

</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
        <?php if (isLoggedIn()) : ?>
            <a class="blog-nav-item <?php if ($current_page == "index.php"){ echo "active "; }?>" href="index.php">Dashboard</a>
            <a class="blog-nav-item <?php if ($current_page == "add_post.php"){ echo "active "; }?>" href="add_post.php">Add Post</a>
            <a class="blog-nav-item <?php if ($current_page == "add_category.php"){ echo "active "; }?>" href="add_category.php">Add Category</a>
            <a class="blog-nav-item pull-right " href=".."  target="_blank">Visit Blog</a>
        <?php endif; ?>
        </nav>
    </div><!-- End container -->
</div>

<div class="container">
    <div class="blog-header">
        <?php if (isLoggedIn()) : ?>
        <form role="form" method="post" action="logout.php">
            <input name="do_logout" value="Logout" type="submit" class="btn btn-primary">
        </form>
        <?php endif; ?>
        <h2>Admin Area</h2>

    </div>
    <div class="row">
        <div class="col-sm-12 blog-main">
<?php displayMessage(); ?>