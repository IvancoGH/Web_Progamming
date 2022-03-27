<?php
    session_start();

    if(isset($_POST['submit'])){
        // echo $_POST['username'] .'-' . $_POST['password']; echo "<br>";
        // echo $_SESSION['usernameSession'] . '-' . $_SESSION['password2Session'];
        if(!isset($_SESSION['usernameSession']) || ($_POST['username'] != $_SESSION['usernameSession'])){
            echo "Akun Anda Belum Terdaftar, Silahkan Melakukan Proses Registrasi Terlebih Dahulu";
            header("refresh:3; login.php");
        }else {
            if(($_POST['username'] == $_SESSION['usernameSession']) && ($_POST['password'] == $_SESSION['password2Session'])){
                header("location:home.php");
            }else{
                echo "Maaf username atau password anda tidak sesuai! <br>";
                header("refresh:3; login.php");
            }
        }
    }
?>