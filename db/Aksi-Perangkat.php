<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data($id_perangkat) {
            $sql = "SELECT * FROM DATA_PERANGKAT WHERE id_perangkat ='" . $id_perangkat . "'";
            return $this->con->execute($sql);
        }

        public function read_data_perangkat() {
            $sql = "SELECT * FROM VIEW_PERANGKAT";
            return $this->con->execute($sql);
        }

        public function hapus_data($id_perangkat) {
            $sql = "DELETE FROM DATA_PERANGKAT WHERE id_perangkat ='" . $id_perangkat . "'";
            return $this->con->execute($sql);
        }

        public function read_data_penduduk() {
            $sql = "SELECT * FROM DATA_PENDUDUK";
            return $this->con->execute($sql);
        }

        public function validasi_tambah($id_perangkat) {
            $sql = "SELECT * FROM VIEW_PERANGKAT WHERE id_perangkat ='" . $id_perangkat . "'" ;
            return $this->con->execute($sql);
        }

        public function validasi_tambah_filter_jabatan($jabatan) {
            $sql = "SELECT * FROM VIEW_PERANGKAT WHERE jabatan ='" . $jabatan . "'";
            return $this->con->execute($sql);
        }

        public function tambah_data($id_perangkat, $niap, $nip, $pangkat, $no_sk_angkat, $tgl_sk_angkat, $no_sk_berhenti, $tgl_sk_berhenti, $masa_jabatan, $jabatan, $status) {
            $sql = "INSERT INTO DATA_PERANGKAT SET 
            id_desa ='D281', niap ='" . $niap . "', nip ='" . $nip . "', pangkat ='" . $pangkat . "', no_sk_angkat ='" . $no_sk_angkat . "', 
            tanggal_sk_angkat ='" . $tgl_sk_angkat . "', no_sk_berhenti ='" . $no_sk_berhenti . "', tanggal_sk_berhenti ='" . $tgl_sk_berhenti . "', 
            masa_jabatan ='" . $masa_jabatan . "', jabatan ='" . $jabatan . "', status_pegawai ='" . $status . "', id_perangkat ='" . $id_perangkat . "'";
            return $this->con->execute($sql);
        }

        public function validasi_ubah($id_perangkat, $jabatan) {
            $sql = "SELECT * FROM VIEW_PERANGKAT WHERE id_perangkat <>'" . $id_perangkat . "' AND jabatan ='" . $jabatan . "'";
            return $this->con->execute($sql);
        }

        public function ubah_data($id_perangkat, $niap, $nip, $pangkat, $no_sk_angkat, $tgl_sk_angkat, $no_sk_berhenti, $tgl_sk_berhenti, $masa_jabatan, $jabatan, $status) {
            $sql = "UPDATE DATA_PERANGKAT SET niap ='" . $niap . "', nip ='" . $nip . "', pangkat ='" . $pangkat . "', no_sk_angkat ='" . $no_sk_angkat .
                "', tanggal_sk_angkat ='" . $tgl_sk_angkat . "', no_sk_berhenti ='" . $no_sk_berhenti . "', tanggal_sk_berhenti ='" . $tgl_sk_berhenti . 
                "', masa_jabatan ='" . $masa_jabatan . "', jabatan ='" . $jabatan . "', status_pegawai ='" . $status . "' WHERE id_perangkat ='" . $id_perangkat . "'";
            return $this->con->execute($sql);
        }
    }
