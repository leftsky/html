<?php
    session_start(); 
    // ini_set("display_errors", 0);
    // error_reporting(E_ALL ^ E_NOTICE);
    // error_reporting(E_ALL ^ E_WARNING);

    class mysqlCon{

        private $mysqli = null;

        public function __construct() {
            require_once('mysqlcon.php');
            $this->mysqli = $mysqlcon;
        }

        public function insert_one_post($postJ){
            $sqlStr = "INSERT INTO posts (post_author,post_date,"
            . "post_date_gmt,post_content,post_title,post_excerpt,post_status,"
            . "comment_status,ping_status,post_password,post_name,to_ping,pinged,"
            . "post_modified,post_modified_gmt,post_parent,guid,menu_order,"
            . "post_type,post_mime_type,comment_count,post_main_url) VALUES('"
            . $postJ['post_author'] . "','" 
            // . $postJ['post_date'] . "','" 
            . date("Y-m-d H:i:s") . "','" 
            . $postJ['post_date_gmt'] . "','" 
            . $postJ['post_content'] . "','" 
            . $postJ['post_title'] . "','" 
            . $postJ['post_excerpt'] . "','" 
            . $postJ['post_status'] . "','" 
            . $postJ['comment_status'] . "','" 
            . $postJ['ping_status'] . "','" 
            . $postJ['post_password'] . "','" 
            . $postJ['post_name'] . "','" 
            . $postJ['to_ping'] . "','" 
            . $postJ['pinged'] . "','" 
            . $postJ['post_modified'] . "','" 
            . $postJ['post_modified_gmt'] . "','" 
            . $postJ['post_parent'] . "','" 
            . $postJ['guid'] . "','" 
            . $postJ['menu_order'] . "','" 
            . $postJ['post_type'] . "','" 
            . $postJ['post_mime_type'] . "','" 
            . $postJ['comment_count'] . "','" 
            . $postJ['post_main_url']
            . "')";
            if ($this->mysqli->query($sqlStr) === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

        public function add_tag($tagName, $tagFather) {
            if($tagName == "")
                exit(1);
            // echo 'add-tag';
            {
                $sqlStr = "SELECT id FROM term WHERE tagName='" . $tagName . "'";
                $query = $this->mysqli->query($sqlStr);
                if ($query === false) {
                    echo mysqli_error($this->mysqli) . "\r\n";
                    echo $sqlStr;
                }
                if($query->num_rows != 0) {
                    exit(1);
                }
            }
            $sqlStr = "SELECT id FROM term WHERE tagName='" . $tagFather . "'";
            $query = $this->mysqli->query($sqlStr);
            if ($query === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
            $FatherId = "0";
            $arr = $query->fetch_array();
            if($query->num_rows == 0) {
                $FatherId = "0";
            }
            else {
                $FatherId = $arr['id'];
            }
            $sqlStr = "INSERT INTO term(tagName,tagFatherId) VALUES('"
            . $tagName . "','"
            . $FatherId
            . "')";
            if ($this->mysqli->query($sqlStr) === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

        public function getAllTags() {
            $sqlStr = "SELECT * FROM term";
            $query = $this->mysqli->query($sqlStr);
            while ($row = $query->fetch_object()){
                $user_arr[] = $row;
            }
            // $arr = $query->fetch_array();
            // print_r($user_arr);
            echo json_encode($user_arr, JSON_UNESCAPED_UNICODE);
        }

        function delTagById($id) {
            $sqlStr = "DELETE FROM term WHERE id =" 
                        . $id . " OR " . "tagFatherId=" . $id;
            $query = $this->mysqli->query($sqlStr);
            if ($query === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

        function getAllLinks() {
            $sqlStr = "SELECT * FROM friendlink";
            $query = $this->mysqli->query($sqlStr);
            while ($row = $query->fetch_object()){
                $user_arr[] = $row;
            }
            echo json_encode($user_arr, JSON_UNESCAPED_UNICODE);
        }

        function add_friendlink($name, $url) {
            $sqlStr = "INSERT INTO friendlink(name,url) VALUES('"
                        . $name . "','"
                        . $url . "')";
            echo $sqlStr;
            $query = $this->mysqli->query($sqlStr);
            if ($query === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

        function delLinkById($id) {
            $sqlStr = "DELETE FROM friendlink WHERE id =" . $id;
            $query = $this->mysqli->query($sqlStr);
            if ($query === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

        function getAllArtcles() {
            $sqlStr = "SELECT id,post_title FROM posts";
            $query = $this->mysqli->query($sqlStr);
            while ($row = $query->fetch_object()){
                $user_arr[] = $row;
            }
            echo json_encode($user_arr, JSON_UNESCAPED_UNICODE);
        }

        function delArtcleById($id) {
            $sqlStr = "DELETE FROM posts WHERE id =" . $id;
            $query = $this->mysqli->query($sqlStr);
            if ($query === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

        function update_post($postJ) {
            
            $sqlStr = "UPDATE posts SET "
                . "post_author='" . $postJ['post_author'] . "',"
                . "post_date='" . date("Y-m-d H:i:s") . "',"
                . "post_main_url='" . $postJ['main_url'] . "',"
                . "post_content='" . $postJ['post_content'] . "',"
                . "post_title='" . $postJ['post_title'] . "',"
                . "post_mime_type='" . $postJ['post_mime_type'] . "' "
                . " WHERE id=" . $postJ['artId'];
            if ($this->mysqli->query($sqlStr) === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

        function login($userName, $password) {
            $sqlStr = "SELECT password FROM user WHERE user='" 
                        . $userName . "' AND password='" . $password . "'";
            $query = $this->mysqli->query($sqlStr);
            echo $sqlStr;
            if ($query === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
            if($query->num_rows != 0) {
                $_SESSION['userName'] = $userName;
            }
            else {
                unset($_SESSION['userName']);
            }
        }

        function letter_new($name, $phone, $email, $address, $letter) {
            $sqlStr = "INSERT INTO msg (name,tell,"
            . "e_mail,address,date,msg,is_read) VALUES('"
            . $name . "','" 
            . $phone . "','" 
            . $email . "','" 
            . $address . "','" 
            . date("Y-m-d H:i:s") . "','" 
            . $letter . "','" 
            . "1"
            . "')";
            if ($this->mysqli->query($sqlStr) === false) {
                echo mysqli_error($this->mysqli) . "\r\n";
                echo $sqlStr;
            }
        }

    } // class mysqlCon end


    function post_new() {
        $postJ = $_POST['postJ'];
        if(!$postJ)
            exit(1);
        $con = new mysqlCon();
        $con->insert_one_post($postJ);
        exit(1);
    }

    function add_tag() {
        $tagName = $_POST['tagName'];
        $tagFather = $_POST['tagFather'];
        $con = new mysqlCon();
        $con->add_tag($tagName, $tagFather);
        exit(1);
    }

    function getAllTags() {
        $con = new mysqlCon();
        $con->getAllTags();
        exit(1);
    }

    function delTagById() {
        $con = new mysqlCon();
        $id = $_POST['id'];
        $con->delTagById($id);
        exit(1);
    }

    function getAllLinks() {
        $con = new mysqlCon();
        $con->getAllLinks();
        exit(1);
    }

    function add_friendlink() {
        $name = $_POST['fl_name'];
        $url = $_POST['fl_url'];
        $con = new mysqlCon();
        $con->add_friendlink($name, $url);
        exit(1);
    }

    function delLinkById() {
        $con = new mysqlCon();
        $id = $_POST['id'];
        $con->delLinkById($id);
        exit(1);
    }

    function getAllArtcles() {
        $con = new mysqlCon();
        $con->getAllArtcles();
        exit(1);
    }

    function delArtcleById() {
        $con = new mysqlCon();
        $id = $_POST['id'];
        $con->delArtcleById($id);
        exit(1);
    }

    function update_post() {
        $con = new mysqlCon();
        $postJ = $_POST['postJ'];
        $con->update_post($postJ);
        exit(1);
    }

    function login() {
        $con = new mysqlCon();
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $con->login($userName, $password);
        exit(1);
    }

    function letter_new() {
        $con = new mysqlCon();
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $letter = $_POST['letter'];
        $con->letter_new($name, $phone, $email, $address, $letter);
        exit(1);
    }

    if($_POST['type']) {
        switch($_POST['type']) {
            case 'post-new':
                post_new();
                break;
            case 'add-tag':
                add_tag();
                break;
            case 'getAllTags':
                getAllTags();
                break;
            case 'delTagById':
                delTagById();
                break;
            case 'getAllLinks':
                getAllLinks();
                break;
            case 'add-friendlink':
                add_friendlink();
                break;
            case 'delLinkById':
                delLinkById();
                break;
            case 'getAllArtcles':
                getAllArtcles();
                break;
            case 'delArtcleById':
                delArtcleById();
                break;
            case 'update-post':
                update_post();
                break;
            case 'login':
                login();
                break;
            case 'session_destroy':
                session_destroy();
                break;
            case 'letter-new':
                letter_new();
                break;
            default:
                exit(1);
        }
    }

    if($_POST['ss'] == null){
        echo 'no';
    }
    else{
        echo 'yes';
    }
    // echo $_POST['artStr'];
?>