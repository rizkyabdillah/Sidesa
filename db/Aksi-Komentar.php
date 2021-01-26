<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data($status) {
            $prefix = null;
            switch($status) {
                case 0 : 
                    $prefix = "DRAFT";
                    break;
                default :
                    $prefix = "APROVED";
                    break;
            }
            $sql = "SELECT * FROM DATA_KOMENTAR WHERE status_komentar ='" . $prefix . "'";
            return $this->con->execute($sql);
        }

        public function read_data1($id_komentar) {
            $sql = "SELECT * FROM DATA_KOMENTAR WHERE id_komentar ='" . $id_komentar . "'";
            return $this->con->execute($sql);
        }

        public function count_komentar($status) {
            return $this->read_data($status)->num_rows;
        }

        public function set_aproved($id_komentar) {
            $sql = "UPDATE DATA_KOMENTAR SET status_komentar='APROVED' WHERE id_komentar ='" . $id_komentar . "'";
            return $this->con->execute($sql);
        }

        public function set_draft($id_komentar) {
            $sql = "UPDATE DATA_KOMENTAR SET status_komentar='DRAFT' WHERE id_komentar ='" . $id_komentar . "'";
            return $this->con->execute($sql);
        }

        public function set_hapus($id_komentar) {
            $sql = "DELETE FROM DATA_KOMENTAR WHERE id_komentar ='" . $id_komentar . "'";
            return $this->con->execute($sql);
        }
    }
