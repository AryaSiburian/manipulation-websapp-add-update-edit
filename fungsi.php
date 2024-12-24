<?php
    if(isset($_GET["insert"])) {
        insert ();
    } else if(isset($_GET["update"])) {
        update();
    }
    else if(isset($_GET["delete"])) {
        delete(); 
        
    }
    function insert() {
        require("connection.php");
        $insert = $koneksi->query("insert into mhs set nama='{$_POST['nama']}', Prodi='{$_POST['prodi']}', Gender='{$_POST['gender']}', Alamat='{$_POST['alamat']}'");
        if($insert === true) {
            echo  'insert berhasil';
        } else {
            echo 'insert gagal';
        }

        header('Location: index.php');
    }

    function update() {
        require("connection.php");
        $insert = $koneksi->query("UPDATE mhs SET nama='{$_POST['nama']}', Prodi='{$_POST['prodi']}', Gender='{$_POST['gender']}', Alamat='{$_POST['alamat']}' WHERE id={$_POST['id']}");
        if($insert === true) {
            echo  'insert berhasil';
        } else {
            echo 'insert gagal';
        }

        header('Location: index.php');
    }

    function delete() {
        require("connection.php");
        $insert = $koneksi->query("delete from mhs where id={$_GET['id']}");
        if($insert === true) {
            echo  'insert berhasil';
        } else {
            echo 'insert gagal';
        }

        header('Location: index.php');

    }
?>

