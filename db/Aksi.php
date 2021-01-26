<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function login($email, $password) {
            $sql = "SELECT * FROM DATA_USER WHERE email ='".$email."' AND password = md5(sha1('".$password."'))";
            return $this->con->execute($sql);
        }      
    }
?>
