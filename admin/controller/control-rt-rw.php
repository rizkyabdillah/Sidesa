<?php
require('../../db/Aksi-rt-rw.php');
$con = new Aksi();
$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$id_now = (isset($_GET['id_now'])) ? $_GET['id_now'] : '';
$id_back = (isset($_GET['id_back'])) ? $_GET['id_back'] : '';
$page = null;

if (isset($_POST['id_rw'])) {
    $data = $con->read_rw_filter_id1($_POST['id_rw']);
    echo (json_encode($data->fetch_array()));
} else if (isset($_POST['id_rt'])) {
    $data = $con->read_rt_filter_id($_POST['id_rt']);
    echo (json_encode($data->fetch_array()));
} else {

    if ($_GET['status'] == "set_hapus_rw") {
        $con->hapus_rw($id);
        $page = "rw&id=" . $id_now;
    } else if ($_GET['status'] == "set_hapus_rt") {
        $con->hapus_rt($id);
        $page = "rt&id=" . $id_now . "&id_back=" . $id_back;
    }

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $id_ketua = $_POST['id_ketua'];
        $no = $_POST['no'];


        if ($_GET['status'] == "set_ubah_rw") {
            if ($con->validasi_edit_rw($id, $id_ketua, $no)->num_rows > 0) {
                echo ('<script>alert("Ketua RW atau Nomor RW yang anda pilih sudah terdaftar sebelumnya");</script>');
            } else {
                if ($no > 999) {
                    echo ('<script>alert("Nomor RW yang anda inputkan terlalu banyak");</script>');
                } else {
                    $con->edit_rw($id, $id_ketua, $no);
                }
            }
            $page = "rw&id=" . $id_now;


        } else if ($_GET['status'] == "set_ubah_rt") {
            if ($con->validasi_edit_rt($id, $id_ketua, $no)->num_rows > 0) {
                echo ('<script>alert("Ketua RT atau Nomor RT yang anda pilih sudah terdaftar sebelumnya");</script>');
            } else {
                if ($no > 999) {
                    echo ('<script>alert("Nomor RT yang anda inputkan terlalu banyak");</script>');
                } else {
                    $con->edit_rt($id, $id_ketua, $no);
                }
            }
            $page = "rt&id=" . $id_now . "&id_back=" . $id_back;


        } else if ($_GET['status'] == "set_tambah_rw") {
            if ($con->validasi_rw($id_ketua, $no)->num_rows > 0) {
                echo ('<script>alert("Ketua RW atau Nomor RW yang anda pilih sudah terdaftar sebelumnya");</script>');
            } else {
                if ($no > 999) {
                    echo ('<script>alert("Nomor RW yang anda inputkan terlalu banyak");</script>');
                } else {
                    $con->tambah_rw($id, $id_ketua, $id_now, $no);
                }
            }
            $page = "rw&id=" . $id_now;


        } else if ($_GET['status'] == "set_tambah_rt") {
            if ($con->validasi_rt($id_ketua, $no)->num_rows > 0) {
                echo ('<script>alert("Ketua RT atau Nomor RT yang anda pilih sudah terdaftar sebelumnya");</script>');
            } else {
                if ($no > 999) {
                    echo ('<script>alert("Nomor RT yang anda inputkan terlalu banyak");</script>');
                } else {
                    $con->tambah_rt($id, $id_ketua, $id_now, $no);
                }
            }
            $page = "rt&id=" . $id_now . "&id_back=" . $id_back;
        }


    }

    echo ('<script>document.location = "../index.php?page=' . $page . '";</script>');
}
