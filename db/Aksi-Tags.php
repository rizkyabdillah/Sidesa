<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data_tags() {
            $sql = "SELECT * FROM VIEW_TAGS";
            return $this->con->execute($sql);
        }

        public function read_data_tags1($id_tags) {
            $sql = "SELECT * FROM DATA_TAGS WHERE id_tags ='" . $id_tags . "'";
            return $this->con->execute($sql);
        }

        public function read_data_kategori() {
            $sql = "SELECT * FROM DATA_KATEGORI";
            return $this->con->execute($sql);
        }

        public function set_aktif($id_tags) {
            $sql = "UPDATE DATA_TAGS SET status_aktif ='AKTIF' WHERE id_tags ='" . $id_tags . "'";
            return $this->con->execute($sql);
        }

        public function set_nonaktif($id_tags) {
            $sql = "UPDATE DATA_TAGS SET status_aktif ='TIDAK AKTIF' WHERE id_tags ='" . $id_tags . "'";
            return $this->con->execute($sql);
        }

        public function hapus_data($id_tags) {
            $sql = "DELETE FROM DATA_TAGS WHERE id_tags ='" . $id_tags . "'";
            return $this->con->execute($sql);
        }

        public function tambah_data($id_tags, $id_kategori, $nama_tags, $detail_tags, $status_aktif) {
            $sql = "INSERT INTO DATA_TAGS VALUES('" . $id_tags . "','" . $id_kategori . "','" . strtoupper($nama_tags) . "','" . $detail_tags . "','" . $status_aktif . "')";
            return $this->con->execute($sql);
        }

        public function ubah_data($id_tags, $id_kategori, $nama_tags, $detail_tags, $status_aktif) {
            $sql = "UPDATE DATA_TAGS SET id_kategori ='" . $id_kategori . "',
                    nama_tags ='" . strtoupper($nama_tags) . "', detail_tags ='" . $detail_tags . "',
                    status_aktif ='" . $status_aktif . "' WHERE id_tags ='" . $id_tags . "'";
            return $this->con->execute($sql);
        }

        public function read_data_tags_filter($post) {
            $prefix = null;
            switch($post) {
                case 0 :
                    $prefix = "AKTIF";
                    break;
                default :
                    $prefix = "TIDAK AKTIF";
                    break;

            }            
            $sql = "SELECT * FROM VIEW_TAGS WHERE status_aktif ='" . $prefix . "'";
            return $this->con->execute($sql);
        }

        public function count_tags($post) {
            return $this->read_data_tags_filter($post)->num_rows;
        }
    }
