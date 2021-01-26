<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function count_data_dusun() {
            $sql = "SELECT * FROM DATA_DUSUN";
            return $this->con->execute($sql)->num_rows;
        }

        public function count_data_rt() {
            $sql = "SELECT * FROM DATA_RT";
            return $this->con->execute($sql)->num_rows;
        }

        public function count_data_rw() {
            $sql = "SELECT * FROM DATA_RW";
            return $this->con->execute($sql)->num_rows;
        }

        public function grup_by_pekerjaan() {
            $sql = "SELECT COUNT(pekerjaan) as data, pekerjaan FROM DATA_PENDUDUK GROUP BY pekerjaan";
            return $this->con->execute($sql);
        }

        public function grup_by_agama() {
            $sql = "SELECT COUNT(agama) as data, agama FROM DATA_PENDUDUK GROUP BY agama";
            return $this->con->execute($sql);
        }

        public function grup_jenis_kelamin() {
            $sql = "SELECT COUNT(jenis_kelamin) as data, jenis_kelamin FROM DATA_AKTE GROUP BY jenis_kelamin";
            return $this->con->execute($sql);
        }
    }
?>