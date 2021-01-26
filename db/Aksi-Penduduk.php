<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data() {
            $sql = "SELECT * FROM VIEW_PENDUDUK";
            return $this->con->execute($sql);
        }

        public function read_desa() {
            $sql = "SELECT * FROM DATA_DESA";
            return $this->con->execute($sql);
        }

        public function read_dusun() {
            $sql = "SELECT * FROM DATA_DUSUN";
            return $this->con->execute($sql);
        }

        public function read_all_data($nik) {
            $sql = "SELECT * FROM DATA_PENDUDUK, DATA_AKTE, DATA_PERKAWINAN, DETAIL_KK 
            WHERE DATA_PENDUDUK.nik = DETAIL_KK.nik AND DATA_PENDUDUK.id_akte = DATA_AKTE.id_akte 
            AND DATA_PENDUDUK.id_perkawinan = DATA_PERKAWINAN.id_perkawinan
            AND DATA_PENDUDUK.nik ='" . $nik . "'";
            return $this->con->execute($sql);
        }

        public function read_kk() {
            $sql = "SELECT * FROM VIEW_KK";
            return $this->con->execute($sql);
        }

        public function is_detail_exist($nik) {
            $sql = "SELECT * FROM DETAIL_KK WHERE nik ='" . $nik . "' AND hubungan_dalam_kk ='KEPALA KELUARGA'";
            return $this->con->execute($sql)->num_rows;
        }
    }
?>