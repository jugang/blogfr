<?php
class Post{
    private $db;
    /*
      * Constructor
      */
    public function __construct()
    {
        $this->db = new Database;
    }

    /*
     * Get Post By ID
     */
    public function getPost($id){
        $this->db->query("SELECT posts.* FROM posts
                          WHERE posts.id = :id");
        //Bind post ID
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
    //Get Category by ID
    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind(':category_id', $category_id);
        //Assign Row
        $row = $this->db->single();
        return $row;
    }
    public function getCategoryC(){
        $this->db->query("SELECT categories.* FROM categories");
        //Assign Row
        $results = $this->db->resultset();
        return $results;
    }
    public function getCategoryId(){
        $this->db->query("SELECT posts.*, categories.name FROM posts
                          INNER JOIN categories
                          ON posts.category = categories.id");
        $results = $this->db->resultset();
        return $results;
    }

    public function test($id){
        $this->db->query("SELECT posts.*, categories.name FROM posts
                           INNER JOIN categories
                           ON posts.category = categories.id
                           WHERE posts.category = :id
                          ");
        $this->db->bind(':id', $id);
        //Assign Resut set
        $results = $this->db->resultset(); // resultset() is metod from PDO
        return $results;
    }

    public function create($data){
        //Insert Query
        $this->db->query("INSERT INTO posts (category, title, body) 
                                VALUES (:category, :title, :body)");
        //Bind Values
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    /*
     * Create Topic
     */
    public function update($data, $id){
        //Insert Query
        $this->db->query("UPDATE posts
                                SET category = :category, title = :title, body = :body, author = :author, tags = :tags
                                WHERE id = :id");
        //Bind Values
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':tags', $data['tags']);
        $this->db->bind(':id', $id);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function insertPost($data){
        //Insert Query
        $this->db->query("INSERT INTO posts (category, title, body, author, tags) 
                                 VALUES (:category, :title, :body ,:author, :tags)");
        //Bind Values
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':tags', $data['tags']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        //Insert Query
        $this->db->query("DELETE FROM posts
                    WHERE id = :id");
        //Bind Values
        $this->db->bind(':id', $id);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}