<?php
error_reporting(0);

require('../assets/library.php');
$lib = new library();
$id_random = $lib->getRandomID4();

if (isset($_POST['nik1'])) {
    require('../../db/Aksi-Penduduk.php');
    $con = new Aksi();
    $data = $con->read_all_data($_POST['nik1']);
    echo (json_encode($data->fetch_array()));
} else {
    require('../../db/Aksi-Keluarga.php');
    $con = new Aksi();
    if (isset($_POST['submit'])) {

        // DATA KK
        $no_kk = $_POST['no_kk'];
        $hubungan_keluarga = $_POST['hubungan_keluarga'];

        // DATA PENDUDUK
        $nik = $_POST['nik'];
        $nama_penduduk = strtoupper($_POST['nama_penduduk']);
        $status_wajib_ktp = $_POST['status_wajib_ktp'];
        $agama = $_POST['agama'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $status_penduduk = $_POST['status_penduduk'];
        $pendidikan_kk = $_POST['pendidikan_kk'];
        $pendidikan_sekarang = $_POST['pendidikan_sekarang'];
        $pekerjaan = $_POST['pekerjaan'];
        $alamat_sebelumnya = $_POST['alamat_sebelumnya'];
        $alamat_sekarang = $_POST['alamat_sekarang'];

        // DATA AKTA
        $no_akta_kelahiran = $_POST['no_akta_kelahiran'];
        $tempat_lahir = strtoupper($_POST['tempat_lahir']);
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $waktu_kelahiran = date("H:i", strtotime($_POST['waktu_kelahiran']));
        $tempat_dilahirkan = $_POST['tempat_dilahirkan'];
        $jenis_kelahiran = $_POST['jenis_kelahiran'];
        $anak_ke = $_POST['anak_ke'];
        $berat_lahir = $_POST['berat_lahir'];
        $panjang_lahir = $_POST['panjang_lahir'];
        $penolong_kelahiran = $_POST['penolong_kelahiran'];

        // DATA PERKAWINAN
        $id_perkawinan = $_POST['id_perkawinan'];
        $status_perkawinan = $_POST['status_perkawinan'];
        $no_akta_nikah = $_POST['no_akta_nikah'];
        $tanggal_perkawinan = $_POST['tanggal_perkawinan'];
        $no_akta_perceraian = $_POST['no_akta_perceraian'];
        $tanggal_perceraian = $_POST['tanggal_perceraian'];

        if ($_GET['status'] == "set_tambah") {
            $validasi = $con->validasi_data_akte($no_akta_kelahiran);
            if ($validasi->num_rows > 0) {
                $data = $validasi->fetch_array(MYSQLI_BOTH);
                echo ("<script>alert('Nomor Akta (" . $data['id_akte'] . ") sudah terdaftar sebelumnya mohon periksa kembali');</script>");
            } else {
                $validasi = $con->validasi_data_penduduk($nik);
                if ($validasi->num_rows > 0) {
                    $data = $validasi->fetch_array(MYSQLI_BOTH);
                    echo ("<script>alert('NIK (" . $data['nik'] . ") sudah terdaftar sebelumnya mohon periksa kembali');</script>");
                } else {
                    $con->insert_data_akte($no_akta_kelahiran, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $waktu_kelahiran, $tempat_dilahirkan, $jenis_kelahiran, $anak_ke, $penolong_kelahiran, $berat_lahir, $panjang_lahir);
                    $con->insert_data_perkawinan("PK" . $id_random, $no_akta_nikah, $tanggal_perkawinan, $no_akta_perceraian, $tanggal_perceraian, $status_perkawinan);
                    $con->insert_data_penduduk($nik, $no_akta_kelahiran, "PK" . $id_random, $nama_penduduk, $status_wajib_ktp, $agama, $pendidikan_kk, $pendidikan_sekarang, $pekerjaan, $kewarganegaraan, $status_penduduk, $alamat_sebelumnya, $alamat_sekarang);
                    $con->insert_detail_kk($no_kk, $nik, $hubungan_keluarga);
                }
            }
        } else if ($_GET['status'] == "set_ubah") {
            $con->update_data_akte($no_akta_kelahiran, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $waktu_kelahiran, $tempat_dilahirkan, $jenis_kelahiran, $anak_ke, $penolong_kelahiran, $berat_lahir, $panjang_lahir);
            $con->update_data_perkawinan($id_perkawinan, $no_akta_nikah, $tanggal_perkawinan, $no_akta_perceraian, $tanggal_perceraian, $status_perkawinan);
            $con->update_detail_kk($no_kk, $nik, $hubungan_keluarga);
            $con->update_data_penduduk($nik, $nama_penduduk, $status_wajib_ktp, $agama, $pendidikan_kk, $pendidikan_sekarang, $pekerjaan, $kewarganegaraan, $status_penduduk, $alamat_sebelumnya, $alamat_sekarang);
        }
    }
    echo ('<script>document.location = "../index.php?page=penduduk";</script>');
}
