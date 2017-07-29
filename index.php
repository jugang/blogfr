<?php require('core/init.php'); ?>

<?php
//Create Topic object
$topic = new Topic();

//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');


//Assign Vars
$template->topics = $topic->getAllTopics();
$template->totalUsers = $topic->getTotalUsers();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

echo $template;