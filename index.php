<?php require('core/init.php'); ?>

<?php
//Create Topic object
$post = new Post;

//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Vars
$template->posts = $post->getCategoryId();
//$template->category = $post->getAllCategories();

echo $template;