<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data() {
            $sql = "SELECT * FROM VIEW_DUSUN";
            return $this->con->execute($sql);
        }

        public function filter_data_dusun($id_dusun) {
            $sql = "SELECT * FROM DATA_DUSUN WHERE id_dusun ='" . $id_dusun . "'";
            return $this->con->execute($sql);
        }

        public function read_desa() {
            $sql = "SELECT * FROM DATA_DESA";
            return $this->con->execute($sql);
        }

        public function read_data_penduduk() {
            $sql = "SELECT * FROM DATA_PENDUDUK";
            return $this->con->execute($sql);
        }

        public function hapus_dusun($id_dusun) {
            $sql = "DELETE FROM DATA_DUSUN WHERE id_dusun ='" . $id_dusun . "'";
            return $this->con->execute($sql);
        }
        
        public function tambah_dusun($id_dusun, $id_ketua, $nama_dusun, $luas_wilayah) {
            $sql = "INSERT INTO DATA_DUSUN VALUES('" . $id_dusun . "','" . $id_ketua . "','D281','" . strtoupper($nama_dusun) . "','" . $luas_wilayah . "')";
            return $this->con->execute($sql);
        }

        public function validasi_tambah_dusun($id_ketua, $nama) {
            $sql = "SELECT * FROM DATA_DUSUN WHERE id_ketua_dusun ='" . $id_ketua . "' OR nama_dusun ='" . strtoupper($nama) . "'";
            return $this->con->execute($sql);
        }

        public function edit_dusun($id_dusun, $id_ketua, $nama_dusun, $luas_wilayah) {
            $sql = "UPDATE DATA_DUSUN SET id_ketua_dusun ='" . $id_ketua . "', nama_dusun ='" . strtoupper($nama_dusun) . "', luas_wilayah ='" . $luas_wilayah . "' WHERE id_dusun ='" . $id_dusun . "'";
            return $this->con->execute($sql);
        }

        public function validasi_edit_dusun($id, $id_ketua, $nama) {
            $sql = "SELECT * FROM DATA_DUSUN WHERE id_dusun <> '" . $id . "' AND (id_ketua_dusun = '" . $id_ketua . "' OR nama_dusun = '" . $nama . "')";
            return $this->con->execute($sql);
        }
    }
