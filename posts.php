<?php require('core/init.php'); ?>

<?php
//Create Topic object
$post = new Post;

//Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get Template & Assign Vars
$template = new Template('templates/posts.php');
//Assign Vars
if(isset($category)) {
    $template->posts = $post->test($category);
    $template->title = $post->getCategory($category)->name;
}else {
    //$template->title = $post->getCategory($category)->name;
    //$template->postsCat = $post->getAllPosts($category);
//$template->postsCat = $post->getByCategory($category);
   $template->posts = $post->getCategoryId();
    //$template->title = $post->getCategory($category)->name;
    //$template->postsCat = $post->test($id);
}

echo $template;