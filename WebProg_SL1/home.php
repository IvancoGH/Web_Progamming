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
            <a href="profile.php">Profile</a>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="body">
        Halo <b><?php session_start(); echo $_SESSION['namaDepanSession']." ".$_SESSION['namaTengahSession']." ".$_SESSION['namaBelakangSession'] ?></b>, Selamat datang di Aplikasi Pengelolaan Keuangan :)
    </div>
</body>
</html>