<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data_kategori() {
            $sql = "SELECT * FROM DATA_KATEGORI";
            return $this->con->execute($sql);
        }

        public function read_data_kategori1($id_kategori) {
            $sql = "SELECT * FROM DATA_KATEGORI WHERE id_kategori ='" . $id_kategori . "'";
            return $this->con->execute($sql);
        }

        public function set_aktif($id_kategori) {
            $sql = "UPDATE DATA_KATEGORI SET status_aktif ='AKTIF' WHERE id_kategori ='" . $id_kategori . "'";
            return $this->con->execute($sql);
        }

        public function set_nonaktif($id_kategori) {
            $sql = "UPDATE DATA_KATEGORI SET status_aktif ='TIDAK AKTIF' WHERE id_kategori ='" . $id_kategori . "'";
            return $this->con->execute($sql);
        }

        public function hapus_data($id_tags) {
            $sql = "DELETE FROM DATA_KATEGORI WHERE id_kategori ='" . $id_tags . "'";
            return $this->con->execute($sql);
        }

        public function tambah_data($id_kategori, $nama_kategori, $detail_kategori, $status_aktif) {
            $sql = "INSERT INTO DATA_KATEGORI VALUES('" . $id_kategori . "','" . strtoupper($nama_kategori) . "','" . $detail_kategori . "','" . $status_aktif . "')";
            return $this->con->execute($sql);
        }

        public function ubah_data($id_kategori, $nama_kategori, $detail_kategori, $status_aktif) {
            $sql = "UPDATE DATA_KATEGORI SET nama_kategori ='" . strtoupper($nama_kategori) . "', 
                    detail_kategori ='" . $detail_kategori . "', status_aktif ='" . $status_aktif . "' 
                    WHERE id_kategori ='" . $id_kategori . "'";
            return $this->con->execute($sql);
        }

        public function read_data_kategori_filter($post) {
            $prefix = null;
            switch($post) {
                case 0 :
                    $prefix = "AKTIF";
                    break;
                default :
                    $prefix = "TIDAK AKTIF";
                    break;

            }            
            $sql = "SELECT * FROM DATA_KATEGORI WHERE status_aktif ='" . $prefix . "'";
            return $this->con->execute($sql);
        }

        public function count_kategori($post) {
            return $this->read_data_kategori_filter($post)->num_rows;
        }
    }
?>