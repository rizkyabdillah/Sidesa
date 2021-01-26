<?php
require('../../db/Aksi-Postingan.php');
$con = new Aksi();
$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$status = "aktif";

if (isset($_POST['id_postingan'])) {
    $data = $con->read_view_post($_POST['id_postingan']);
    echo (json_encode($data->fetch_array()));
} else {
    if ($_GET['status'] == "set_publish") {
        $con->set_publish($id);
    } else if ($_GET['status'] == "set_draft") {
        $con->set_draft($id);
    } else if ($_GET['status'] == "set_hapus") {
        $con->hapus_data($id);
    }
    echo ('<script>document.location = "../index.php?page=post&pills=all";</script>');
}