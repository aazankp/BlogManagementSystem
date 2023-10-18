<?php
class Database{
    private $host_name = "localhost";
    private $rootname = "root";
    private $password = "";
    private $dbname = "blog_system_management";
    private $conn = null;
    private $query = null;
    private $result = null;

    public function __construct(){
        $this->conn = mysqli_connect($this->host_name, $this->rootname, $this->password, $this->dbname);
        if (mysqli_connect_errno()) {
            die("Connection Failed!");
        }
    }

    public function fetch_signup($username, $password){
        $this->query = "SELECT * FROM admin_panel WHERE email='$username' AND password='$password'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_user($email) {
        $this->query = "SELECT * FROM admin_panel WHERE email='$email'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function add_posts($img_name, $desc, $date, $category, $status) {
        $this->query = "INSERT INTO posts (image, description, date, category, status) values ('$img_name', '$desc', '$date', '$category', '$status')";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_posts() {
        $this->query = "SELECT * FROM posts";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_post_by_id($post_id) {
        $this->query = "SELECT * FROM posts WHERE id='$post_id'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function update_post($post_id,$img_name, $desc, $date, $category, $status) {
        $this->query = "UPDATE posts SET image='$img_name', description='$desc', date='$date', category='$category', status='$status' WHERE id='$post_id'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function Delete_post($post_id) {
        $this->query = "DELETE FROM posts WHERE id='$post_id'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_student_posts() {
        $this->query = "SELECT * FROM posts WHERE Category='Student News' AND status='Active'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_seminars_posts() {
        $this->query = "SELECT * FROM posts WHERE Category='Seminars and Workshops News' AND status='Active'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_affiliated_posts() {
        $this->query = "SELECT * FROM posts WHERE Category='Affiliated Campus News' AND status='Active'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_notices_posts() {
        $this->query = "SELECT * FROM posts WHERE Category='Notices - Circulars - Announcements News' AND status='Active'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_scholarships_posts() {
        $this->query = "SELECT * FROM posts WHERE Category='Scholarships News' AND status='Active'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

    public function fetch_stages_event_posts() {
        $this->query = "SELECT * FROM posts WHERE Category='STAGS Events and News' AND status='Active'";
        $this->result = mysqli_query($this->conn, $this->query);
        return $this->result;
    }

}

?>