<?php
require('../../db/Aksi-Tags.php');
$con = new Aksi();
$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$status = "aktif";
if (isset($_POST['id_tags'])) {
    $data = $con->read_data_tags1($_POST['id_tags']);
    echo (json_encode($data->fetch_array()));
} else {

    if ($_GET['status'] == "set_aktif") {
        $con->set_aktif($id);
        $status = "nonaktif";
    } else if ($_GET['status'] == "set_nonaktif") {
        $con->set_nonaktif($id);
        $status = "aktif";
    } else if ($_GET['status'] == "set_hapus") {
        $con->hapus_data($id);
        $status = "aktif";
    }

    if (isset($_POST['submit'])) {
        $id_tags = $_POST['id_tags1'];
        $nama = $_POST['nama'];
        $detail = $_POST['detail_tags'];
        $id_kategori = $_POST['id_kategori'];
        $status_tags = $_POST['status'];

        if ($_GET['status'] == "set_tambah") {
            $con->tambah_data($id_tags, $id_kategori, $nama, $detail, $status_tags);
            $status = ($status_tags == "AKTIF") ? 'aktif' : 'nonaktif';
        } else if ($_GET['status'] == "set_ubah") {
            $con->ubah_data($id_tags, $id_kategori, $nama, $detail, $status_tags);
            $status = "aktif";
        }
    }

    echo ('<script>document.location = "../index.php?page=tags&pills=' . $status . '";</script>');
}
