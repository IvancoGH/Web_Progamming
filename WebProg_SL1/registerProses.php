<?php
    session_start();

    if(isset($_POST['submit'])){
        if($_POST['password1'] != $_POST['password2']){
            echo "password 1 dan password 2 harus sama!!";
            header("refresh:3;register.php");
        }else{
            $fileName = $_FILES['fotoProfil']["name"];
            $tempName = $_FILES['fotoProfil']["tmp_name"];
    
            $dirTujuan = "File/";
    
            $upload = move_uploaded_file($tempName, $dirTujuan.$fileName);
    
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
            $fotoProfil = $_POST['fotoProfil'];
            $password2 = $_POST['password2'];
    
            $_SESSION['namaDepanSession'] = $namaDepan;
            $_SESSION['tempatLahirSession'] = $tempatLahir;
            $_SESSION['wargaNegaraSession'] = $wargaNegara;
            $_SESSION['AlamatSession'] = $Alamat;
            $_SESSION['usernameSession'] = $username;
            $_SESSION['namaTengahSession'] = $namaTengah;
            $_SESSION['tglLahirSession'] = $tglLahir;
            $_SESSION['emailSession'] = $email;
            $_SESSION['kodePosSession'] = $kodePos;
            $_SESSION['password1Session'] = $password1;
            $_SESSION['namaBelakangSession'] = $namaBelakang;
            $_SESSION['NIKSession'] = $NIK;
            $_SESSION['noHPSession'] = $noHP;
            $_SESSION['fotoProfilSession'] = $dirTujuan.$fileName;
            $_SESSION['password2Session'] = $password2;
    
            header("location:login.php");
        }
    }

?>