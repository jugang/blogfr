<?php require('core/init.php'); ?>

<?php
//Create topic object
$topic = new Topic;

//Get ID from URL
$topic_id = $_GET['id'];

//Get Template & Assign Vars
$template = new Template('templates/topic.php');

//Assign Vars
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

//Assign Total Vars
$template->totalUsers = $topic->getTotalUsers();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display Template
echo $template;