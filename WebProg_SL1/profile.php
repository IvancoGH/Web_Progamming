<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <b>Aplikasi Pengelolaan Keuangan</b>
        <div class="containerHome">
            <div class="homeBtn">
                <a href="home.php">Home</a>
            </div>
           <div class="home">
                <b>Profile</b>
           </div> 
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="profileBack">
        <h3 id="regisTitle">Profil Pribadi</h3>
        <div class="container">
            <table id="table">
                <tr>
                    <td>Nama Depan</td>
                    <td><b><?php session_start(); echo $_SESSION['namaDepanSession']; ?></b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><b><?php echo $_SESSION['tempatLahirSession']; ?></b></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><b><?php echo $_SESSION['wargaNegaraSession']; ?></b></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><b><?php echo $_SESSION['AlamatSession']; ?></b></td>
                </tr>
            </table>

            <table id="table">
                <tr>
                    <td>Nama Tengah</td>
                    <td><b><?php echo $_SESSION['namaTengahSession']; ?></b></td>
                </tr> 
                <tr>
                    <td>Tgl Lahir</td>
                    <td><b><?php echo $_SESSION['tglLahirSession']; ?></b></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><b><?php echo $_SESSION['emailSession']; ?></b></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td><b><?php echo $_SESSION['kodePosSession']; ?></b></td>
                </tr>
            </table>

            <table id="table">
                <tr>
                    <td>Nama Belakang</td>
                    <td><b><?php echo $_SESSION['namaBelakangSession']; ?></b></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><b><?php echo $_SESSION['NIKSession']; ?></b></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><b><?php echo $_SESSION['noHPSession']; ?></b></td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td id="foto"><img src="<?php echo $_SESSION['fotoProfilSession']; ?>" alt="profil"></td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>