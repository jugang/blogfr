<?php

class User{
    // Init DB Variable
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    /*
     * Upload User Avatars

    public function uploadAvatar(){
        $allowedExts = array("gif","jpeg", "jpg", "png");
        $temp = explode('.', $_FILES["avatar"]["name"]);
        $extension = end($temp); //End string in $temp(gif or jpg or png ....)

        if(($_FILES["avatar"]["type"] == "image/gif") ||
            ($_FILES["avatar"]["type"] == "image/jpeg") ||
            ($_FILES["avatar"]["type"] == "image/jpg") ||
            ($_FILES["avatar"]["type"] == "image/pjpeg") ||
            ($_FILES["avatar"]["type"] == "image/x-png") ||
            ($_FILES["avatar"]["type"] == "image/png")
            && ($_FILES["avatar"]["size"] < 900000)
            && (in_array($extension, $allowedExts))){ //in_array(search,array,type) - function searches an array for a specific value.
            if($_FILES["avatar"]["error"] > 0){
                redirect('register.php', $_FILES["avatar"]["error"], 'error');
            }else{
                if(file_exists("img/avatars/".$_FILES["avatar"]["name"])){ //function checks whether or not a file or directory exists.
                    redirect("register.php", 'File already exists','error');
                }else{
                    move_uploaded_file($_FILES["avatar"]["tmp_name"],"img/avatars/".$_FILES["avatar"]["name"]); //move_uploaded_file(file,newloc)
                    return true;
                }
            }
        }else{
            redirect("register.php", "invalid file type " , "error");
        }
    }
     */
    /*
     * Register User

    function register($data){
        // Insert Query
        $this->db->query("INSERT INTO users(name, username, email, avatar, password, about, last_activity)
    VALUES(:name, :username, :email, :avatar, :password, :about, :last_activity) ");
        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':avatar', $data['avatar']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':about', $data['about']);
        $this->db->bind(':last_activity', $data['last_activity']);
        //Execute
        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    }
*/
    /*
     * User Login
     */
    public function login($username, $password){
        $this->db->query("SELECT * FROM user
                                WHERE username = :username
                                AND password = :password
                                ");
        //Bind Value
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);

        $row = $this->db->single();

        //Check Rows
        if ($this->db->rowCount()>0){
            $this->setUserData($row);
            return true;
        }else{
            return false;
        }
    }

    /*
     * Set User Data
     */
    public function setUserData($row){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_id'] = $row->id;
        $_SESSION['username'] = $row->username;
    }

    /*
 * Get Logged Out
 */

    public function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        return true;
    }

}
