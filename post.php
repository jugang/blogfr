<?php require('core/init.php'); ?>

<?php
//Create Topic object
$post = new Post;

//Get ID from URL
$post_id = $_GET['id'];

//Get Template & Assign Vars
$template = new Template('templates/post.php');

//Assign Vars
//$template->posts = $post->getAllPosts();
$template->singlePost = $post->getPost($post_id);
$template->title = $post->getPost($post_id)->title;
//$template->test = $post->getAllId($id);

echo $template;