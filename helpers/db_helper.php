<?php

//Get all categories
function getCategories(){
    $db = new Database();
    $db->query('SELECT * FROM categories');
    //Assign resutsset
    $results = $db->resultset();
    return $results;
}
//Izbacuje kagtegoriju Samo ako postoji post u kategoriji:
/*
function getCategoriesTest(){
    $db = new Database();
    $db->query('SELECT categories.*, posts.category FROM categories
                INNER JOIN posts
                ON categories.id = posts.category');
    //Assign resutsset
    $results = $db->resultset();
    return $results;
}

function testCat($id){
    $db = new Database();
    $db->query('SELECT posts.*, categories.id FROM posts
                INNER JOIN categories
                ON posts.category = cagetories.id
                WHERE posts.category = :id');
    $db->bind(':id', $id);
    $results = $db->resultset();
    return $results;
}
*/
    function deleteCat($id){
        $db = new Database();
    //Insert Query
    $db->query("DELETE FROM categories
                    WHERE id = :id");
    //Bind Values
    $db->bind(':id', $id);

    //Execute
    if($db->execute()){
        return true;
    }else{
        return false;
    }
}
function updateCat($name, $id){
    $db = new Database();
    //Insert Query
    $db->query("UPDATE categories 
                SET name = :name
                WHERE id = :id");
    //Bind Values
    $db->bind(':id', $id);
    $db->bind(':name', $name);

    //Execute
    if($db->execute()){
        return true;
    }else{
        return false;
    }
}
    function insertCat($name){
        $db = new Database();
    $db->query("INSERT INTO categories (name)
                    VALUES (:name)");
    $db->bind(':name', $name);
    //Execute
    if($db->execute()){
        return true;
    }else{
        return false;
    }

}