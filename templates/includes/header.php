<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to TalkingSpace</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI; ?>templates/css/custom.css" rel="stylesheet">
    <?php if(!isset($title)) $title = SITE_TITLE ?>
    <title><? echo  $title?></title>
    <script src="<?php echo BASE_URI; ?>templates/js/ckeditor/ckeditor.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URI; ?>">Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php echo is_active(null); ?>"><a href="<?php echo BASE_URI; ?>">Home</a></li>
                <?php foreach (getCategories() as $category) : ?>
                    <li class="<?php echo is_active($category->id); ?>"><a href="posts.php?category=<?php echo $category->id; ?>"><?php echo $category->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="blog-header">
        <div class="logo"><img src="images/logo.png" alt="logo"></div>
        <h1 class="blog-title"><?php echo $title; ?></h1>
        <p class="lead blog-description">PHP News, tutorials, videos & more</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
<?php displayMessage(); ?>