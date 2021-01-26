<?php
error_reporting(0);
require('../../db/Aksi-Keluarga.php');
$con = new Aksi();

require('../assets/library.php');
$lib = new library();
$id_random = $lib->getRandomID4();

if (isset($_POST['no_kk1'])) {
    $data = $con->read_detail_kk($_POST['no_kk1']);
    echo (json_encode($data->fetch_array()));
} else {
    if (isset($_POST['submit'])) {

        // DATA KK
        $no_kk = $_POST['no_kk'];
        $id_rt = $_POST['id_rt'];
        $tanggal_cetak = $_POST['tanggal_cetak'];
        $kelas_sosial = $_POST['kelas_sosial'];

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
                    $validasi = $con->validasi_data_kk($no_kk);
                    if ($validasi->num_rows > 0) {
                        $data = $validasi->fetch_array(MYSQLI_BOTH);
                        echo ("<script>alert('Nomor KK (" . $data['no_kk'] . ") sudah terdaftar sebelumnya mohon periksa kembali');</script>");
                    } else {
                        $con->insert_data_akte($no_akta_kelahiran, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $waktu_kelahiran, $tempat_dilahirkan, $jenis_kelahiran, $anak_ke, $penolong_kelahiran, $berat_lahir, $panjang_lahir);
                        $con->insert_data_perkawinan("PK" . $id_random, $no_akta_nikah, $tanggal_perkawinan, $no_akta_perceraian, $tanggal_perceraian, $status_perkawinan);
                        $con->insert_data_penduduk($nik, $no_akta_kelahiran, "PK" . $id_random, $nama_penduduk, $status_wajib_ktp, $agama, $pendidikan_kk, $pendidikan_sekarang, $pekerjaan, $kewarganegaraan, $status_penduduk, $alamat_sebelumnya, $alamat_sekarang);
                        $con->insert_data_kk($no_kk, $id_rt, $tanggal_cetak, $kelas_sosial);
                        $con->insert_detail_kk($no_kk, $nik, "KEPALA KELUARGA");
                    }
                }
            }
        } else if ($_GET['status'] == "set_ubah") {
            $con->update_data_kk($no_kk, $id_rt, $tanggal_cetak, $kelas_sosial);
            $con->update_detail_kk($no_kk, $_POST['temp_nik'], "LAIN LAIN");
            $con->update_detail_kk($no_kk, $nik, "KEPALA KELUARGA");
        }
    } else {
        if ($_GET['status'] == "set_hapus") {
            $no_kk = $_GET['id'];
            $query = $con->read_data_detail_filter($no_kk);
            if ($query->num_rows > 0) {
                $con->hapus_kk($no_kk);
                foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                    $data1 = $con->read_data_penduduk($data['nik'])->fetch_array(MYSQLI_BOTH);
                    $con->hapus_akte($data1['id_akte']);
                    $con->hapus_perkawinan($data1['id_perkawinan']);
                    $con->hapus_penduduk($data['nik']);
                }
                $con->hapus_detail($no_kk);
            }
        } else if ($_GET['status'] == "set_hapus_") {
            $data = $con->read_data_penduduk($_GET['id'])->fetch_array(MYSQLI_BOTH);
            $con->hapus_akte($data['id_akte']);
            $con->hapus_perkawinan($data['id_perkawinan']);
            $con->hapus_penduduk($_GET['id']);
            $con->hapus_detail_penduduk($_GET['id']);
        }
    }
    echo ('<script>document.location = "../index.php?page=keluarga";</script>');
}
