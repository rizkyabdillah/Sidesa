<?php
require('../../db/Aksi-Administratif.php');
$con = new Aksi();
if (isset($_POST['id_dusun'])) {
    $data = $con->filter_data_dusun($_POST['id_dusun']);
    echo (json_encode($data->fetch_array()));
} else  {
    if ($_GET['status'] == "set_hapus") {
        $con->hapus_dusun($_GET['id']);
    }
    
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $id_ketua = $_POST['id_ketua'];
        $luas = $_POST['luas'];
        if ($_GET['status'] == "set_tambah") {
            if ($con->validasi_tambah_dusun($id_ketua, $nama)->num_rows > 0) {
                echo ('<script>alert("Ketua Dusun atau Nama Dusun yang anda isi sudah terdaftar sebelumnya");</script>');
            } else {
                $con->tambah_dusun($id, $id_ketua, $nama, $luas);
            }
        } else if ($_GET['status'] == "set_ubah") {
            if ($con->validasi_edit_dusun($id, $id_ketua, $nama)->num_rows > 0) {
                echo ('<script>alert("Ketua Dusun atau Nama Dusun yang anda isi sudah terdaftar sebelumnya");</script>');
            } else {
                $con->edit_dusun($id, $id_ketua, $nama, $luas);
            }
        }
    }

    echo ('<script>document.location = "../index.php?page=administratif";</script>');
}
