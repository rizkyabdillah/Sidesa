<?php
    class Aksi {

        private $con = null;
        
        public function __construct() {
            require('Koneksi.php');
            $this->con = new Koneksi();
        }

        public function read_data_kategori() {
            $sql = "SELECT * FROM DATA_KATEGORI WHERE status_aktif='AKTIF'";
            return $this->con->execute($sql);
        }

        public function insert_data_postingan($id_post, $id_tags, $id_user, $judul, $tanggal_post, $detail_post, $gambar_post, $status_post) {
            $sql = "INSERT INTO DATA_POSTINGAN VALUES('".$id_post."','".$id_tags."','".$id_user."','". ucwords(strtolower($judul)) ."','".$tanggal_post."','','".$detail_post."','".$gambar_post."','".$status_post."')";
            return $this->con->execute($sql);
        }

        public function set_publish($id_post) {
            $sql = "UPDATE DATA_POSTINGAN SET status_post ='PUBLISH' WHERE id_post ='" . $id_post . "'";
            return $this->con->execute($sql);
        }

        public function set_draft($id_post) {
            $sql = "UPDATE DATA_POSTINGAN SET status_post ='DRAFT' WHERE id_post ='" . $id_post . "'";
            return $this->con->execute($sql);
        }

        public function hapus_data($id_post) {
            $sql = "DELETE FROM DATA_POSTINGAN WHERE id_post ='" . $id_post . "'";
            return $this->con->execute($sql);
        }

        public function read_view_post($id_post) {
            $sql = "SELECT * FROM VIEW_POSTINGAN WHERE id_post ='" . $id_post . "'";
            return $this->con->execute($sql);
        }

        public function ubah_data_post($id_post, $id_tags, $id_user, $judul, $tanggal_update, $detail_post, $status_post) {
            $sql = "UPDATE DATA_POSTINGAN SET id_tags ='" . $id_tags . "', id_user ='" . $id_user . "',
                    judul ='" . $judul . "', tanggal_update ='" . $tanggal_update . "', 
                    detail_post ='" . $detail_post . "', status_post ='" . $status_post . "' WHERE 
                    id_post ='" . $id_post . "'" ;
            return $this->con->execute($sql);
        }

        public function read_data_postingan_limit($post, $limit_start, $limit) {
            $prefix = null;
            switch($post) {
                case 0 :
                    $prefix = "LIMIT ".$limit_start.",".$limit;
                    break;
                case 1 :
                    $prefix = "WHERE status_post ='PUBLISH' LIMIT ".$limit_start.",".$limit;
                    break;
                default :
                    $prefix = "WHERE status_post ='DRAFT' LIMIT ".$limit_start.",".$limit;
                    break;

            }
            $sql = "SELECT * FROM VIEW_POSTINGAN ".$prefix;
            return $this->con->execute($sql);
        }

        public function count_postingan($post) {
            $prefix = null;
            switch($post) {
                case 0 :
                    $prefix = "";
                    break;
                case 1 :
                    $prefix = "WHERE status_post ='PUBLISH'";
                    break;
                default :
                    $prefix = "WHERE status_post ='DRAFT'";
                    break;

            }            
            $data = $this->con->execute("SELECT COUNT(*) AS data FROM DATA_POSTINGAN ".$prefix)->fetch_array(MYSQLI_ASSOC);
            return $data['data'];
        }

    }
