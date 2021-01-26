<?php
require('../../db/Aksi-Perangkat.php');
$con = new Aksi();
$id = (isset($_GET['id'])) ? $_GET['id'] : '';

if (isset($_POST['id_perangkat'])) {
    $data = $con->read_data($_POST['id_perangkat']);
    echo (json_encode($data->fetch_array()));
} else {

    if ($_GET['status'] == "set_hapus") {
        $con->hapus_data($id);
    }

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $niap = $_POST['niap'];
        $nip = $_POST['nip'];
        $no_sk_a = $_POST['no_sk_angkat'];
        $tgl_sk_a = $_POST['date_angkat'];
        $no_sk_b = $_POST['no_sk_berhenti'];
        $tgl_sk_b = $_POST['date_berhenti'];
        $jabatan = $_POST['jabatan'];
        $masa = $_POST['masa'];
        $pangkat = $_POST['pangkat'];
        $status = $_POST['status'];

        if ($_GET['status'] == "set_tambah") {
            $cek = $con->validasi_tambah($id);
            if ($cek->num_rows > 0) {
                $data = $cek->fetch_array();
                echo ("<script>alert('Nama Perangkat (" . $data['nama']. ") sudah terdaftar sebelumnya sebagai " . $data['jabatan'] . "');</script>");
            } else {
                $cek = $con->validasi_tambah_filter_jabatan($jabatan);
                if ($cek->num_rows > 0) {
                    echo ("<script>alert('Jabatan " . $jabatan . " sudah terisi, mohon pilih jabatan yang benar!');</script>");
                } else {
                    $con->tambah_data($id, $niap, $nip, $pangkat, $no_sk_a, $tgl_sk_a, $no_sk_b, $tgl_sk_b, $masa, $jabatan, $status);
                }
            }
            
        } else if ($_GET['status'] == "set_ubah") {
            $cek = $con->validasi_ubah($id, $jabatan);
            if($cek->num_rows > 0) {
                $data = $cek->fetch_array();
                echo ("<script>alert('Jabatan " . $jabatan . " sudah terisi dengan Nama Perangkat (" . $data['nama'] . "), mohon cek kembali!');</script>");
            } else {
                $con->ubah_data($id, $niap, $nip, $pangkat, $no_sk_a, $tgl_sk_a, $no_sk_b, $tgl_sk_b, $masa, $jabatan, $status);
            }
        }
    }

    echo ('<script> document.location = "../index.php?page=perangkat"; </script>');
}
