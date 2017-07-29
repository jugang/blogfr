<?php require('core/init.php'); ?>

<?php
//Create topic object
$topic = new Topic;

//Get Template & Assign Vars
$template = new Template('templates/topics.php');

//Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get User from URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;



//Assign Template Variable.
if(isset($category)){
$template->topics = $topic->getByCategory($category);
$template->title = 'Posts In '.$topic->getCategory($category)->name;
}

//Assign for user Template
if(isset($user_id)){
    $template->topics = $topic->getByUser($user_id);
    //$template->title = 'Posts In '.$topic->getUser($user_id)->name;
}

if(!isset($category) && !isset($user_id)){
    $template->topics = $topic->getAllTopics();
}

//Assign Vars
$template->totalUsers = $topic->getTotalUsers();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display Template
echo $template;