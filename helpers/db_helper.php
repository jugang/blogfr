<?php

//Get number of replies per topic
function replyCount($topic_id){
    $db = new Database();
    $db->query("select * from replies where topic_id = :topic_id");
    $db->bind(':topic_id', $topic_id);
    //Assign Rows
    $rows = $db->resultset();
    //Get Count
    return $db->rowCount();
}

//Get all categories
function getCategories(){
    $db = new Database();
    $db->query('SELECT * FROM categories');
    //Assign resutsset
    $results = $db->resultset();
    return $results;
}


function userPostCount($user_id){
    $db = new Database();
    $db->query("SELECT * FROM topics 
                WHERE user_id = :user_id
                ");
    $db->bind(':user_id', $user_id);
    //Assing Row
    $row = $db->resultset();
    //Get count
    $topic_count = $db->rowCount();

    $db->query("SELECT * FROM topics 
                WHERE user_id = :user_id
                ");
    $db->bind(':user_id', $user_id);
    //Assing Row
    $row = $db->resultset();
    //Get count
    $reply_count = $db->rowCount();

    return $topic_count + $reply_count;
}