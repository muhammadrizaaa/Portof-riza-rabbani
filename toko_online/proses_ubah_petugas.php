<?php

if($_POST){

    $id_petugas=$_POST['id_petugas'];

    $nama=$_POST['nama'];

    $username=$_POST['username'];

    $password=$_POST['password'];

    $level=$_POST['level'];

    

    

        include "toko_online.php";

        if(empty($password)){

            $update=mysqli_query($conn,"update petugas set nama='".$nama."',username='".$username."', password='".$password."', level='".$level."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";

            } else {

                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";

            }

        } else {

            $update=mysqli_query($conn,"update petugas set nama='".$nama."',username='".$username."', password='".$password."',level='".$level."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";

            } else {

                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";

            }

        }

       

    }



?>