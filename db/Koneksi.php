<?php
    class Koneksi {
        private $HOST = 'localhost';
        private $USER = 'root';
        private $PASS = '';
        private $DB   = 'sidesa';
        private $con = null;

        public function __construct() {
            $this->con = new mysqli($this->HOST, $this->USER, $this->PASS, $this->DB);
            if($this->con->connect_errno) {
                echo("Koneksi Error : ".$this->con->connect_error);
            }
            return $this->con;
        }

        public function execute($query) {
            return $this->con->query($query);
        }
    }
?>
