<?php
class Aksi {

    private $con = null;

    public function __construct() {
        require('Koneksi.php');
        $this->con = new Koneksi();
    }

    public function read_data() {
        $sql = "SELECT * FROM VIEW_KK";
        return $this->con->execute($sql);
    }

    public function read_data_detail() {
        $sql = "SELECT * FROM VIEW_DETAIL_KK";
        return $this->con->execute($sql);
    }

    public function read_data_detail_filter($no_kk) {
        $sql = "SELECT * FROM VIEW_DETAIL_KK WHERE no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    public function read_data_penduduk($nik) {
        $sql = "SELECT * FROM DATA_PENDUDUK WHERE nik ='" . $nik . "'";
        return $this->con->execute($sql);
    }

    public function read_dusun() {
        $sql = "SELECT * FROM DATA_DUSUN";
        return $this->con->execute($sql);
    }

    public function read_rw($id_dusun) {
        $sql = "SELECT * FROM DATA_RW WHERE id_dusun ='" . $id_dusun . "'";
        return $this->con->execute($sql);
    }

    public function read_rt($id_rw) {
        $sql = "SELECT * FROM DATA_RT WHERE id_rw ='" . $id_rw . "'";
        return $this->con->execute($sql);
    }

    public function read_detail_kk($no_kk) {
        $sql = "SELECT * FROM VIEW_FULL_DATA_KK WHERE no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    // ======== DATA KK ========

    public function validasi_data_kk($no_kk) {
        $sql = "SELECT * FROM DATA_KK WHERE no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    public function insert_data_kk($no_kk, $id_rt, $tanggal_cetak_kk, $kelas_sosial) {
        $sql = "INSERT INTO DATA_KK SET id_rt ='" . $id_rt . "', tanggal_cetak_kk ='" . $tanggal_cetak_kk . "', 
                kelas_sosial ='" . $kelas_sosial . "', no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    public function update_data_kk($no_kk, $id_rt, $tanggal_cetak_kk, $kelas_sosial) {
        $sql = "UPDATE DATA_KK SET id_rt ='" . $id_rt . "', tanggal_cetak_kk ='" . $tanggal_cetak_kk . "', 
                kelas_sosial ='" . $kelas_sosial . "' WHERE no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    public function insert_detail_kk($no_kk, $nik, $hubungan_dalam_kk) {
        $sql = "INSERT INTO DETAIL_KK SET nik ='" . $nik . "', hubungan_dalam_kk ='" . $hubungan_dalam_kk . "', no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    public function update_detail_kk($no_kk, $nik, $hubungan_dalam_kk) {
        $sql = "UPDATE DETAIL_KK SET hubungan_dalam_kk ='" . $hubungan_dalam_kk . "' WHERE no_kk ='" . $no_kk . "' AND nik ='" . $nik . "'";
        return $this->con->execute($sql);
    }

    // ======== DATA AKTE ========

    public function validasi_data_akte($id_akte) {
        $sql = "SELECT * FROM DATA_AKTE WHERE id_akte ='" . $id_akte . "'";
        return $this->con->execute($sql);
    }

    public function insert_data_akte($id_akte, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $waktu_kelahiran, $tempat_dilahirkan, $jenis_kelahiran, $anak_ke, $penolong_kelahiran, $berat_lahir, $panjang_lahir) {
        $sql = "INSERT INTO DATA_AKTE SET tempat_lahir ='" . $tempat_lahir . "', 
                    tanggal_lahir ='"       . $tanggal_lahir        . "', jenis_kelamin ='"     . $jenis_kelamin        . "', 
                    waktu_kelahiran ='"     . $waktu_kelahiran      . "', tempat_dilahirkan ='" . $tempat_dilahirkan    . "', 
                    jenis_kelahiran ='"     . $jenis_kelahiran      . "', anak_ke ='"           . $anak_ke              . "', 
                    penolong_kelahiran ='"  . $penolong_kelahiran   . "', berat_lahir ='"       . $berat_lahir          . "', 
                    panjang_lahir ='"       . $panjang_lahir        . "', id_akte ='"           . $id_akte              . "'";
        return $this->con->execute($sql);
    }

    public function update_data_akte($id_akte, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $waktu_kelahiran, $tempat_dilahirkan, $jenis_kelahiran, $anak_ke, $penolong_kelahiran, $berat_lahir, $panjang_lahir) {
        $sql = "UPDATE DATA_AKTE SET tempat_lahir ='" . $tempat_lahir . "', 
                    tanggal_lahir ='"       . $tanggal_lahir        . "', jenis_kelamin ='"     . $jenis_kelamin        . "', 
                    waktu_kelahiran ='"     . $waktu_kelahiran      . "', tempat_dilahirkan ='" . $tempat_dilahirkan    . "', 
                    jenis_kelahiran ='"     . $jenis_kelahiran      . "', anak_ke ='"           . $anak_ke              . "', 
                    penolong_kelahiran ='"  . $penolong_kelahiran   . "', berat_lahir ='"       . $berat_lahir          . "', 
                    panjang_lahir ='"       . $panjang_lahir        . "' WHERE id_akte ='"      . $id_akte              . "'";
        return $this->con->execute($sql);
    }

    // ======== DATA PERKAWINAN ========

    public function insert_data_perkawinan($id_perkawinan, $no_akta_nikah, $tanggal_perkawinan, $no_akta_perceraian, $tanggal_perceraian, $status_perkawinan) {
        $sql = "INSERT INTO DATA_PERKAWINAN SET no_akta_nikah ='" . $no_akta_nikah . "', 
                    tanggal_perkawinan ='"  . $tanggal_perkawinan   . "', no_akta_perceraian ='"    . $no_akta_perceraian   . "', 
                    tanggal_perceraian ='"  . $tanggal_perceraian   . "', status_perkawinan ='"     . $status_perkawinan    . "', 
                    id_perkawinan ='"       . $id_perkawinan        . "'";
        return $this->con->execute($sql);
    }

    public function update_data_perkawinan($id_perkawinan, $no_akta_nikah, $tanggal_perkawinan, $no_akta_perceraian, $tanggal_perceraian, $status_perkawinan) {
        $sql = "UPDATE DATA_PERKAWINAN SET no_akta_nikah ='" . $no_akta_nikah . "', 
                    tanggal_perkawinan ='"  . $tanggal_perkawinan   . "', no_akta_perceraian ='"    . $no_akta_perceraian   . "', 
                    tanggal_perceraian ='"  . $tanggal_perceraian   . "', status_perkawinan ='"     . $status_perkawinan    . "' 
                    WHERE id_perkawinan ='"       . $id_perkawinan        . "'";
        return $this->con->execute($sql);
    }

    // ======== DATA PENDUDUK ========

    public function validasi_data_penduduk($nik) {
        $sql = "SELECT * FROM DATA_PENDUDUK WHERE nik ='" . $nik . "'";
        return $this->con->execute($sql);
    }

    public function insert_data_penduduk($nik, $id_akte, $id_perkawinan, $nama, $status_wajib_ktp, $agama, $pendidikan_dalam_kk, $pendidikan_sekarang, $pekerjaan, $status_warga_negara, $status_penduduk, $alamat_sebelumnya, $alamat_sekarang) {
        $sql = "INSERT INTO DATA_PENDUDUK SET id_akte ='"       . $id_akte . "', 
                    id_perkawinan ='"       . $id_perkawinan        . "', nama ='"                  . $nama                 . "', 
                    status_wajib_ktp ='"    . $status_wajib_ktp     . "', agama ='"                 . $agama                . "', 
                    pendidikan_dalam_kk ='" . $pendidikan_dalam_kk  . "', pendidikan_sekarang ='"   . $pendidikan_sekarang  . "', 
                    pekerjaan ='"           . $pekerjaan            . "', status_warga_negara ='"   . $status_warga_negara  . "', 
                    status_penduduk ='"     . $status_penduduk      . "', alamat_sebelumnya ='"     . $alamat_sebelumnya    . "', 
                    alamat_sekarang ='"     . $alamat_sekarang      . "', nik ='"                   . $nik                  . "'";
        return $this->con->execute($sql);
    }

    public function update_data_penduduk($nik, $nama, $status_wajib_ktp, $agama, $pendidikan_dalam_kk, $pendidikan_sekarang, $pekerjaan, $status_warga_negara, $status_penduduk, $alamat_sebelumnya, $alamat_sekarang) {
        $sql = "UPDATE DATA_PENDUDUK SET nama ='" . $nama . "', 
                    status_wajib_ktp ='"    . $status_wajib_ktp     . "', agama ='"                 . $agama                . "', 
                    pendidikan_dalam_kk ='" . $pendidikan_dalam_kk  . "', pendidikan_sekarang ='"   . $pendidikan_sekarang  . "', 
                    pekerjaan ='"           . $pekerjaan            . "', status_warga_negara ='"   . $status_warga_negara  . "', 
                    status_penduduk ='"     . $status_penduduk      . "', alamat_sebelumnya ='"     . $alamat_sebelumnya    . "', 
                    alamat_sekarang ='"     . $alamat_sekarang      . "' WHERE nik ='"              . $nik                  . "'";
        return $this->con->execute($sql);
    }

    public function hapus_penduduk($nik) {
        $sql = "DELETE FROM DATA_PENDUDUK WHERE nik ='" . $nik . "'";
        return $this->con->execute($sql);
    }

    public function hapus_akte($id_akte) {
        $sql = "DELETE FROM DATA_AKTE WHERE id_akte ='" . $id_akte . "'";
        return $this->con->execute($sql);
    }

    public function hapus_perkawinan($id_perkawinan) {
        $sql = "DELETE FROM DATA_PERKAWINAN WHERE id_perkawinan ='" . $id_perkawinan . "'";
        return $this->con->execute($sql);
    }

    public function hapus_kk($no_kk) {
        $sql = "DELETE FROM DATA_KK WHERE no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    public function hapus_detail($no_kk) {
        $sql = "DELETE FROM DETAIL_KK WHERE no_kk ='" . $no_kk . "'";
        return $this->con->execute($sql);
    }

    public function hapus_detail_penduduk($nik) {
        $sql = "DELETE FROM DETAIL_KK WHERE nik ='" . $nik . "'";
        return $this->con->execute($sql);
    }

    
}
