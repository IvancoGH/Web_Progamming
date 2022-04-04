<!-- <?php
    // session_start();

    // if(isset($_POST['submit'])){
    //     if($_POST['password1'] != $_POST['password2']){
    //         echo "password 1 dan password 2 harus sama!!";
    //         header("refresh:3;register.php");
    //     }else{
    //         $fileName = $_FILES['fotoProfil']["name"];
    //         $tempName = $_FILES['fotoProfil']["tmp_name"];
    
    //         $dirTujuan = "File/";
    
    //         $upload = move_uploaded_file($tempName, $dirTujuan.$fileName);
    
    //         $namaDepan = $_POST['namaDepan'];
    //         $tempatLahir = $_POST['tempatLahir'];
    //         $wargaNegara = $_POST['wargaNegara'];
    //         $Alamat = $_POST['Alamat'];
    //         $username = $_POST['username'];
    //         $namaTengah = $_POST['namaTengah'];
    //         $tglLahir = $_POST['tglLahir'];
    //         $email = $_POST['email'];
    //         $kodePos = $_POST['kodePos'];
    //         $password1 = $_POST['password1'];
    //         $namaBelakang = $_POST['namaBelakang'];
    //         $NIK = $_POST['NIK'];
    //         $noHP = $_POST['noHP'];
    //         $fotoProfil = $_POST['fotoProfil'];
    //         $password2 = $_POST['password2'];
    
    //         $_SESSION['namaDepanSession'] = $namaDepan;
    //         $_SESSION['tempatLahirSession'] = $tempatLahir;
    //         $_SESSION['wargaNegaraSession'] = $wargaNegara;
    //         $_SESSION['AlamatSession'] = $Alamat;
    //         $_SESSION['usernameSession'] = $username;
    //         $_SESSION['namaTengahSession'] = $namaTengah;
    //         $_SESSION['tglLahirSession'] = $tglLahir;
    //         $_SESSION['emailSession'] = $email;
    //         $_SESSION['kodePosSession'] = $kodePos;
    //         $_SESSION['password1Session'] = $password1;
    //         $_SESSION['namaBelakangSession'] = $namaBelakang;
    //         $_SESSION['NIKSession'] = $NIK;
    //         $_SESSION['noHPSession'] = $noHP;
    //         $_SESSION['fotoProfilSession'] = $dirTujuan.$fileName;
    //         $_SESSION['password2Session'] = $password2;
    
    //         // header("location:login.php");
    //     }
    // }

?> -->

<!-- Database MySql -->
<?php
    if(isset($_POST['submit'])){
        if($_POST['password1'] != $_POST['password2']){
            echo "password 1 dan password 2 harus sama!!";
            header("refresh:3;register.php");
        }else{
            include("config.php");
            $fileName = $_FILES['fotoProfil']["name"];
            $tempName = $_FILES['fotoProfil']["tmp_name"];
    
            $dirTujuan = "File/";
    
            $upload = move_uploaded_file($tempName, $dirTujuan.$fileName);
            $imgDir = $dirTujuan.$fileName;
            $namaDepan = $_POST['namaDepan'];
            $tempatLahir = $_POST['tempatLahir'];
            $wargaNegara = $_POST['wargaNegara'];
            $Alamat = $_POST['Alamat'];
            $username = $_POST['username'];
            $namaTengah = $_POST['namaTengah'];
            $tglLahir = $_POST['tglLahir'];
            $email = $_POST['email'];
            $kodePos = $_POST['kodePos'];
            $password1 = $_POST['password1'];
            $namaBelakang = $_POST['namaBelakang'];
            $NIK = $_POST['NIK'];
            $noHP = $_POST['noHP'];
            // $fotoProfil = $_POST['fotoProfil'];
            $password2 = $_POST['password2'];

            $str_query = "insert into users values('$namaDepan', '$namaTengah', '$namaBelakang', '$tempatLahir', '$tglLahir', '$NIK', '$wargaNegara', '$email'
            , '$noHP', '$Alamat', '$kodePos', '$imgDir', '$username', '$password1', '$password2')";

            $query = mysqli_query($connection, $str_query);

            if($query){
                echo "<script>alert('Insert berhasil');window.location='login.php';</script>";
                // $str_query = "select*from users";
                // $query1 = mysqli_query($connection, $str_query);
                // echo "<script>alert('Insert berhasil')</script>";
                // $data = mysqli_fetch_array($query1);
                // print_r($data);
            }else{
                echo "<script>alert('Insert gagal');window.location='register.php';</script>";
            }
            // header("location:login.php");
        }
    }
?>