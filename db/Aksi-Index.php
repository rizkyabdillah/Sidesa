<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data() {
            $sql = "SELECT * FROM DATA_POSTINGAN WHERE status_post ='PUBLISH'";
            return $this->con->execute($sql);
        }

        public function read_data_new() {
            $sql = "SELECT * FROM VIEW_POSTINGAN WHERE status_post ='PUBLISH' ORDER BY(tanggal_post) DESC LIMIT 5";
            return $this->con->execute($sql);
        }

        public function read_data_limit($limit_start, $limit) {
            $sql = "SELECT * FROM DATA_POSTINGAN WHERE status_post ='PUBLISH' LIMIT ".$limit_start.",".$limit;
            return $this->con->execute($sql);
        }

        public function count_postingan() {
            return $this->read_data()->num_rows;
        }

        public function read_data_filter($id_post) {
            $sql = "SELECT * FROM VIEW_POSTINGAN WHERE status_post ='PUBLISH' AND id_post ='" . $id_post . "'";
            return $this->con->execute($sql);
        }

        public function read_komentar($id_post) {
            $sql = "SELECT * FROM DATA_KOMENTAR WHERE status_komentar ='APROVED' AND id_post ='" . $id_post . "'";
            return $this->con->execute($sql);
        }

        public function insert_komentar($id_post, $nama, $email, $isi) {
            require('admin/assets/library.php');
            $lib = new library();
            $sql = "INSERT INTO DATA_KOMENTAR VALUES('" . $lib->getRandomID5() . "','" . $id_post . "','" . $nama . "','" . $email . "','" . $isi . "','" . date("Y-m-d h:i:sa") . "','DRAFT')";
            return $this->con->execute($sql);
        }

        public function get_date_diff($data, $index) {
            $tanggal_post = new DateTime($data[$index]);
            $tanggal_sekarang = new DateTime(date("Y-m-d h:i:sa"));
            $interval = $tanggal_post->diff($tanggal_sekarang);
            return $interval->format('%d Hari yang lalu');
        }

        public function get_date_diff_new($data, $index) {
            $tanggal_post = new DateTime($data[$index]);
            $tanggal_sekarang = new DateTime(date("Y-m-d h:i:sa"));
            $interval = $tanggal_post->diff($tanggal_sekarang);
            if($interval->format('%i') < 60 && $interval->format('%h') < 1) {
                return $interval->format('%i M');
            } else if($interval->format('%h') < 24 && $interval->format('%d') < 1) {
                return $interval->format('%h J');
            } else {
                return $interval->format('%d H');
            }
        }

        public function get_date_diff_komentar($data, $index) {
            $tanggal_post = new DateTime($data[$index]);
            $tanggal_sekarang = new DateTime(date("Y-m-d h:i:sa"));
            $interval = $tanggal_post->diff($tanggal_sekarang);
            if($interval->format('%i') < 60 && $interval->format('%h') < 1) {
                return $interval->format('%i Menit yang lalu');
            } else if($interval->format('%h') < 24 && $interval->format('%d') < 1) {
                return $interval->format('%h Jam yang lalu');
            } else {
                return $interval->format('%d Hari yang lalu');
            }
        }

    }
