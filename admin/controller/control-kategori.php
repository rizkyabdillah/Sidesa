<?php
require('../../db/Aksi-Kategori.php');
$con = new Aksi();
$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$status = null;
if (isset($_POST['id_kategori'])) {
    $data = $con->read_data_kategori1($_POST['id_kategori']);
    echo (json_encode($data->fetch_array()));
} else {
    if ($_GET['status'] == "set_aktif") {
        $con->set_aktif($id);
        $status = "nonaktif";
    }
    if ($_GET['status'] == "set_nonaktif") {
        $con->set_nonaktif($id);
        $status = "aktif";
    }
    if ($_GET['status'] == "set_hapus") {
        $con->hapus_data($id);
        $status = "aktif";
    }

    if (isset($_POST['submit'])) {
        $id_kategori = $_POST['id_kategori1'];
        $nama = $_POST['nama'];
        $detail = $_POST['detail_kategori'];
        $status_kategori = $_POST['status'];

        if ($_GET['status'] == "set_tambah") {
            $con->tambah_data($id_kategori, $nama, $detail, $status_kategori);
            $status = ($status_kategori == "AKTIF") ? 'aktif' : 'nonaktif';
        } else if ($_GET['status'] == "set_ubah") {
            $con->ubah_data($id_kategori, $nama, $detail, $status_kategori);
            $status = "aktif";
        }
    }
    echo ('<script>document.location = "../index.php?page=kategori&pills=' . $status . '";</script>');
}
