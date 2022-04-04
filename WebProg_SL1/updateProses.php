<?php
    include("config.php");
    // echo "masuk php";
    if(isset($_GET['id'])){
        // echo"masuk if";
        $nik = $_GET['id'];
        $str_query = "select * from users where NIK = '".$nik."'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);
        // var_dump($data);
    }
?>

<?php
    if(isset($_POST['submit'])){
        $fileName = $_FILES['fotoProfil']["name"];
        $tempName = $_FILES['fotoProfil']["tmp_name"];

        $dirTujuan = "File/";

        $upload = move_uploaded_file($tempName, $dirTujuan.$fileName);
        $imgDir = $dirTujuan.$fileName;
        $Alamat = $_POST['Alamat'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $kodePos = $_POST['kodePos'];
        $noHP = $_POST['noHP'];

        $str_query = "update users set email = '$email'
            , no_HP='$noHP', alamat='$Alamat', kode_pos='$kodePos', foto_profil='$imgDir', username='$username' where NIK ='".$data["NIK"]."'";

        $query = mysqli_query($connection, $str_query);

        if($query){
            // $str_query = "select*from users";
            // $query1 = mysqli_query($connection, $str_query);
            // $data1 = mysqli_fetch_array($query1);
            // print_r($data1);
            echo "<script>alert('Update Success');window.location='profile.php?id=".$data['NIK']."';</script>";
        }else{
            echo "<script>alert('Update gagal');window.location='editProfile.php?id=".$data['NIK']."';</script>";
        }
    }
?>