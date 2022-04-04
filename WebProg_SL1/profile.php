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
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <b>Aplikasi Pengelolaan Keuangan</b>
        <div class="containerHome">
            <div class="homeBtn">
                <a href="home.php?id=<?php echo $data['NIK'] ?>">Home</a>
            </div>
           <div class="home">
                <b>Profile</b>
           </div> 
           <div class="homeBtn">
                <a href="editProfile.php?id=<?php echo $data['NIK'] ?>">Update</a>
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
                    <td><b><?php session_start(); echo $data['nama_depan']; ?></b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><b><?php echo $data['tempat_lahir']; ?></b></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><b><?php echo $data['warga_negara']; ?></b></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><b><?php echo $data['alamat']; ?></b></td>
                </tr>
            </table>

            <table id="table">
                <tr>
                    <td>Nama Tengah</td>
                    <td><b><?php echo $data['nama_tengah']; ?></b></td>
                </tr> 
                <tr>
                    <td>Tgl Lahir</td>
                    <td><b><?php echo $data['tgl_lahir']; ?></b></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><b><?php echo $data['email']; ?></b></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td><b><?php echo $data['kode_pos']; ?></b></td>
                </tr>
            </table>

            <table id="table">
                <tr>
                    <td>Nama Belakang</td>
                    <td><b><?php echo $data['nama_belakang']; ?></b></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><b><?php echo $data['NIK']; ?></b></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><b><?php echo $data['no_HP']; ?></b></td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td id="foto"><img src="<?php echo $data['foto_profil']; ?>" alt="profil"></td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>