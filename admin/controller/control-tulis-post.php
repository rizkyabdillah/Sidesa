<?php
session_start();
require('../../db/Aksi-Postingan.php');
require('../assets/library.php');
$con = new Aksi();
// RANDOM STRING 5 DIGIT FOR ID POST
$lib = new library();

if (isset($_POST["submit"])) {
    // DEFINE VARIABLE
    $id_post = $lib->getRandomID5();
    $id_tags = $_POST['tags'];
    $id_user = $_SESSION['id_user'];
    $judul = $_POST['judul'];
    $tanggal_post = date("Y-m-d H:i:s");
    $detail_post = $_POST['detail_post'];
    $status_post = $_POST['status'];

    if ($_GET['status'] == "set_ubah") {
        $id_post = $_POST['id'];
        $con->ubah_data_post($id_post, $id_tags, $id_user, $judul, $tanggal_post, $detail_post, $status_post);
        echo (' 
            <script> 
                document.location = "../index.php?page=post&pills=all";
            </script>'
        );
    } else {
        $files = $_FILES["image"]["name"];
        $files_tmp = $_FILES["image"]["tmp_name"];
        $prefix = null;

        // TARGET DIRECTORY
        $target_dir = "../assets/images/postingan/";
        $basename = basename($files);
        $imageFileType = strtolower(pathinfo($basename, PATHINFO_EXTENSION));

        if (file_exists($files_tmp)) {
            // CHECK IS IMAGE FILE OR FAKE IMAGE
            $check = getimagesize($files_tmp);
            if ($check !== false) {
                $imgnewfile = date("Y-m-d") . "-" . $id_post . "." . $imageFileType;
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $imgnewfile);
                $insert = $con->insert_data_postingan($id_post, $id_tags, $id_user, $judul, $tanggal_post, $detail_post, $imgnewfile, $status_post);
                echo (' <script> 
                    document.location = "../index.php?page=post&pills=all";
                </script>');
            } else {
                echo (' <script> 
                if(!alert("Extension gambar anda tidak diijinkan!")) {
                    window.history.back();
                }
            </script> ');
            }
        } else {
            echo (' <script> 
                if(!alert("Gambar anda masih kosong!")) {
                    window.history.back();
                }
            </script> ');
        }
    }
}
