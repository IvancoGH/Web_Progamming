<!-- <?php
    // session_start();

    // if(isset($_POST['submit'])){
    //     // echo $_POST['username'] .'-' . $_POST['password']; echo "<br>";
    //     // echo $_SESSION['usernameSession'] . '-' . $_SESSION['password2Session'];
    //     if(!isset($_SESSION['usernameSession']) || ($_POST['username'] != $_SESSION['usernameSession'])){
    //         echo "Akun Anda Belum Terdaftar, Silahkan Melakukan Proses Registrasi Terlebih Dahulu";
    //         header("refresh:3; login.php");
    //     }else {
    //         if(($_POST['username'] == $_SESSION['usernameSession']) && ($_POST['password'] == $_SESSION['password2Session'])){
    //             header("location:home.php");
    //         }else{
    //             echo "Maaf username atau password anda tidak sesuai! <br>";
    //             header("refresh:3; login.php");
    //         }
    //     }
    // }
?> -->

<?php
    include("config.php");
    $str_query = "select*from users";
    $query = mysqli_query($connection, $str_query); 
    if(isset($_POST['submit'])){
        while($data = mysqli_fetch_array($query)){
            echo $data['NIK'];
            if(($_POST['username'] == $data['username']) && ($_POST['password'] == $data['password1'])){
                // header("location:home.php?id=".$data['NIK']);
                echo "
                    <script>
                        alert('Login Success'); 
                        window.location='home.php?id=".$data['NIK']."';
                    </script>
                    ";
            }else if(($_POST['username'] == $data['username']) && ($_POST['password'] != $data['password1'])){
                // echo "Maaf username atau password anda tidak sesuai! <br>";
                // header("refresh:3; login.php");
                echo "<script>alert('Username or Password Not Match');window.location='login.php';</script>";
            }
        }
        echo "<script>alert('Plz Register Your Account!!');window.location='register.php';</script>";
    }
?>

        