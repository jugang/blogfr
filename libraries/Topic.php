<?php
class Topic{
    // Init DB Variable
    private $db;

     /*
      * Constructor
      */
     public function __construct()
     {
         $this->db = new Database;
     }

     /*
      * Get All Topics
      */
     public function getAllTopics(){
         $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                           INNER JOIN users
                           ON topics.user_id = users.id
                           INNER JOIN categories
                           ON topics.category_id = categories.id
                           ORDER BY create_date DESC");

         //Assign Resut set
         $results = $this->db->resultset(); // resultset() is metod from PDO
         return $results;
     }

     //Get # of Users
     public function getTotalUsers(){
         $this->db->query('SELECT * FROM users');
         $row = $this->db->resultset();
         return $this->db->rowCount();
     }

    //Get # of Categories
    public function getTotalCategories(){
        $this->db->query('SELECT * FROM categories');
        $row = $this->db->resultset();
        return $this->db->rowCount();
    }

    public function getByCategory($category_id){
        $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                           INNER JOIN users
                           ON topics.user_id = users.id
                           INNER JOIN categories
                           ON topics.category_id = categories.id
                           WHERE topics.category_id = :category_id");
        $this->db->bind(':category_id', $category_id);
        $results = $this->db->resultset();
        return $results;
    }

    //Get Category by ID
    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind(':category_id', $category_id);
        //Assign Row
        $row = $this->db->single();
        return $row;
    }

    public function getByUser($user_id){
        $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                          INNER JOIN categories
                          ON topics.category_id = categories.id
                          INNER JOIN users
                          ON topics.user_id = users.id
                          WHERE topics.user_id = :user_id");
        $this->db->bind(':user_id', $user_id);
        $results = $this->db->resultset();
        return $results;
    }

    //Get # of Replies
    public function getTotalTopics(){
        $this->db->query('SELECT * FROM topics');
        $row = $this->db->resultset();
        return $this->db->rowCount();
    }

    // Get topic by ID
    public function getTopic($id){
        $this->db->query("SELECT topics.*, users.username, users.name, users.avatar FROM topics
                          INNER JOIN users ON topics.user_id = users.id WHERE topics.id = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    //Get Topic Replies
    public function getReplies($topic_id){
        $this->db->query("SELECT replies.*, users.* FROM replies 
                          INNER JOIN users 
                          ON replies.user_id = users.id 
                          WHERE replies.topic_id = :topic_id
                          ORDER BY create_date ASC
                          ");
        $this->db->bind(':topic_id', $topic_id);

        //Assign resut set
        $results = $this->db->resultset();
        return $results;
    }

}