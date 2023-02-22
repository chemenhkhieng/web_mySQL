<?php
    include('../../config/config.php');
    $tenloaiSP = $_POST['tendanhmuc'];
    $thuTu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUES ('".$tenloaiSP."', '".$thuTu."')";
        mysqli_query($mysqli,$sql_them);
        header('Location: ../../index.php?action=quanlydanhmucsanpham');
    }elseif(isset($_POST['suadanhmuc'])){

    }else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc = '".$id."'";    
        mysqli_query($mysqli,$sql_xoa);
        header('Location: ../../index.php?action=quanlydanhmucsanpham');
    }
?>