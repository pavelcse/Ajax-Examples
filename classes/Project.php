<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');

class Project{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function checkUsername($username){
            $query = "SELECT * FROM tbl_username WHERE username='$username'";
            $getUserData = $this->db->select($query);

            if($username == ""){
                echo "<span class='error'>Please enter Username</span>";
                exit();
            }elseif ($getUserData) {
                    echo "<span class='error'> &#10005; <b>$username</b> already taken..!</span>";
                exit();
            }else{
                    echo "<span class='success'> &#10004; <b>$username</b> is available</span>";
                exit();
            }
    }

    public function autoComplete($skill){
            $query = "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%'";
            $getUserData = $this->db->select($query);

            $data = '';
            $data .=  '<div class="skill"> <ul>' ; 

            if ($getUserData) {
                    while ($getData = $getUserData->fetch_assoc()) {
                            $data .= '<li>'.$getData['skill'].'</li>';
                    }
            } else {
                    $data .= '<li> No Suggestion..!</li>';
            }

            $data .= '</ul> </div>';
            echo $data;
    }
        
        public function autoRefresh($body){
            $query = "INSERT INTO tbl_refresh(body) VALUES('$body')";
            $data = $this->db->insert($query);
        }
        
        public function autoRefreshGet(){
            $query = "SELECT * FROM tbl_refresh ORDER BY id DESC";
            $value = $this->db->select($query);
            
            $data = '';
            $data .=  '<div class="data"> <ul>' ; 
            if ($value) {
                    while ($getData = $value->fetch_assoc()) {
                            $data .= '<li>'.$getData['body'].'</li>';
                    }
            } else {
                    $data .= '<li> No Data Found..!</li>';
            }

            $data .= '</ul> </div>';
            echo $data;
        }
        
        public function liveSearch($searchVal){
            $query = "SELECT * FROM tbl_search WHERE name LIKE '%$searchVal%' OR username LIKE '%$searchVal%' OR email LIKE '%$searchVal%' ORDER BY id DESC";
            $value = $this->db->select($query);
            if($value){
                $data = "";
                $data .= '<table class="tblone"><tr><th>Name</th><th>Username</th><th>Email</th></tr>';
                while ($result = $value->fetch_assoc()){
                    $data .= '<tr><td>'.$result['name'].'</td><td>'.$result['username'].'</td><td>'.$result['email'].'</td></tr>';
                }
                echo $data;
            }else{
                echo 'Data Not Found..!!';
            }
        }
        
        public function dataAutoSave($content, $contentid){
            if($contentid != ''){
                $query = "UPDATE tbl_save SET content = '$content' WHERE contentid = '$contentid'";
                $update_query = $this->db->update($query);
            }else{
                $query = "INSERT INTO tbl_save(content, status) VALUES('$content', 'draft')";
                $insert_query = $this->db->insert($query);
                $lastid = $this->db->link->insert_id;
                echo $lastid;
                exit();
            }
        }
}
?>