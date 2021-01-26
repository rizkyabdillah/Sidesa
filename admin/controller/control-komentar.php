<?php
require('../../db/Aksi-Komentar.php');
$con = new Aksi();
$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$status = null;
if (isset($_POST['id_komentar'])) {
    $data = $con->read_data1($_POST['id_komentar']);
    echo (json_encode($data->fetch_array()));
} else {
    if ($_GET['status'] == "set_aproved") {
        $con->set_aproved($id);
        $status = "APROVED";
    }
    if ($_GET['status'] == "set_draft") {
        $con->set_draft($id);
        $status = "DRAFT";
    }
    if ($_GET['status'] == "set_hapus") {
        $con->set_hapus($id);
        $status = $_GET['back'];
    }

    echo ('<script>document.location = "../index.php?page=komentar&status=' . $status . '";</script>');
}
