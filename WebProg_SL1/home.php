<?php
    include("config.php");
    if(isset($_GET['id'])){
        $nik = $_GET['id'];
        $str_query = "select * from users where NIK = '".$nik."'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);
        // var_dump($data);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="text"><b>Aplikasi Pengelolaan Keuangan</b></div>
        <div class="containerHome">
            <div class="home">
               <b>Home</b> 
            </div>
            <a href="profile.php?id=<?php echo $data['NIK'] ?> ">Profile</a>
        </div>
        
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="body">
        Halo <b><?php echo $data['nama_depan']." ".$data['nama_tengah']." ".$data['nama_belakang'] ?></b>, Selamat datang di Aplikasi Pengelolaan Keuangan :)
    </div>
</body>
</html>