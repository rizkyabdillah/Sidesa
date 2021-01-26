<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data() {
            $sql = "SELECT * FROM VIEW_RW";
            return $this->con->execute($sql);
        }

        public function read_rw() {
            $sql = "SELECT * FROM VIEW_RW";
            return $this->con->execute($sql);
        }

        public function read_rw_filter_id($id_rw) {
            $sql = "SELECT * FROM VIEW_RW WHERE id_rw ='" . $id_rw . "'";
            return $this->con->execute($sql);
        }

        public function read_rw_filter_id1($id_rw) {
            $sql = "SELECT * FROM DATA_RW WHERE id_rw ='" . $id_rw . "'";
            return $this->con->execute($sql);
        }

        public function read_rw_filter_dusun($id_dusun) {
            $sql = "SELECT * FROM VIEW_RW WHERE id_dusun ='" . $id_dusun . "'";
            return $this->con->execute($sql);
        }

        public function read_rt_filter_rw($id_rw) {
            $sql = "SELECT * FROM VIEW_RT WHERE id_rw ='" . $id_rw . "'";
            return $this->con->execute($sql);
        }

        public function read_rt_filter_id($id_rt) {
            $sql = "SELECT * FROM DATA_RT WHERE id_rt ='" . $id_rt . "'";
            return $this->con->execute($sql);
        }

        public function read_nama_dusun($id_dusun) {
            $sql = "SELECT * FROM DATA_DUSUN WHERE id_dusun ='" . $id_dusun . "'";
            $data = $this->con->execute($sql)->fetch_array(MYSQLI_BOTH);
            return ucwords(strtolower($data['nama_dusun']));
        }

        public function read_nomor_rw($id_rw) {
            $sql = "SELECT * FROM DATA_RW WHERE id_rw ='" . $id_rw . "'";
            $data = $this->con->execute($sql)->fetch_array(MYSQLI_BOTH);
            return sprintf("%'.03d", $data['nomor_rw']);
        }

        public function hapus_rt($id_rt) {
            $sql = "DELETE FROM DATA_RT WHERE id_rt ='" . $id_rt . "'";
            return $this->con->execute($sql);
        }

        public function hapus_rw($id_rw) {
            $sql = "DELETE FROM DATA_RW WHERE id_rw ='" . $id_rw . "'";
            return $this->con->execute($sql);
        }
        
        public function tambah_rt($id_rt, $id_ketua, $id_rw, $no_rt) {
            $sql = "INSERT INTO DATA_RT VALUES('" . $id_rt . "','" . $id_ketua . "','" . $id_rw . "','" . $no_rt . "')";
            return $this->con->execute($sql);
        }

        public function tambah_rw($id_rw, $id_ketua, $id_dusun, $no_rw) {
            $sql = "INSERT INTO DATA_RW VALUES('" . $id_rw . "','" . $id_ketua . "','" . $id_dusun . "','" . $no_rw . "')";
            return $this->con->execute($sql);
        }

        public function validasi_rt($id_ketua, $no_rt) {
            $sql = "SELECT * FROM DATA_RT WHERE id_ketua_rt ='" . $id_ketua . "' OR nomor_rt ='" . $no_rt . "'";
            return $this->con->execute($sql);
        }

        public function validasi_rw($id_ketua, $no_rw) {
            $sql = "SELECT * FROM DATA_RW WHERE id_ketua_rw ='" . $id_ketua . "' OR nomor_rw ='" . $no_rw . "'";
            return $this->con->execute($sql);
        }

        public function validasi_edit_rw($id_rw, $id_ketua, $no_rw) {
            $sql = "SELECT * FROM DATA_RW WHERE id_rw <> '" . $id_rw . "' AND (id_ketua_rw = '" . $id_ketua . "' OR nomor_rw = '" . $no_rw . "')";
            return $this->con->execute($sql);
        }

        public function edit_rw($id_rw, $id_ketua, $no_rw) {
            $sql = "UPDATE DATA_RW SET id_ketua_rw ='" . $id_ketua . "', nomor_rw ='" . $no_rw . "' WHERE id_rw ='" . $id_rw . "'";
            return $this->con->execute($sql);
        }

        public function validasi_edit_rt($id_rt, $id_ketua, $no_rt) {
            $sql = "SELECT * FROM DATA_RT WHERE id_rt <> '" . $id_rt . "' AND (id_ketua_rt = '" . $id_ketua . "' OR nomor_rt = '" . $no_rt . "')";
            return $this->con->execute($sql);
        }

        public function edit_rt($id_rt, $id_ketua, $no_rt) {
            $sql = "UPDATE DATA_RT SET id_ketua_rt ='" . $id_ketua . "', nomor_rt ='" . $no_rt . "' WHERE id_rt ='" . $id_rt . "'";
            return $this->con->execute($sql);
        }

        public function read_data_penduduk() {
            $sql = "SELECT * FROM DATA_PENDUDUK";
            return $this->con->execute($sql);
        }
    }
?>