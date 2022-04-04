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
    <title>Update Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="regisPage">
        <h2 id="regisTitle">Update Profile</h2>
        <form action="updateProses.php?id=<?php echo $data['NIK'] ?>" method="post" enctype="multipart/form-data">
            <div class="container">
                <table id="table">
                    <tr>
                        <td>Nama Depan</td>
                        <!-- <td><input type="text" name="namaDepan" minlength="3" required></td> -->
                        <td><b><?php echo $data['nama_depan']?></b></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <!-- <td><input type="text" name="tempatLahir" minlength="3" required></td> -->
                        <td><b><?php echo $data['tempat_lahir']?></b></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td><b><?php echo $data['warga_negara']?></b></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="Alamat" minlength="15" style="width: 162px; height: 50px;" required></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" minlength="3" required></td>
                    </tr>
                </table>

                <table id="table">
                    <tr>
                        <td>Nama Tengah</td>
                        <td><b><?php echo $data['nama_tengah']?></b></td>
                    </tr> 
                    <tr>
                        <td>Tgl Lahir</td>
                        <td><b><?php echo $data['tgl_lahir']?></b></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" minlength="13" required></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <!-- <td><input type="text" name="kodePos" maxlength="5" minlength="5" required></td> -->
                        <td><input type="text" pattern="[0-9]{5}" maxlength="5" name="kodePos" required></td>
                    </tr>
                </table>

                <table id="table">
                    <tr>
                        <td>Nama Belakang</td>
                        <!-- <td><input type="text" name="namaBelakang" minlength="3" required></td> -->
                        <td><b><?php echo $data['nama_belakang']?></b></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <!-- <td><input type="text" name="NIK" minlength="16" maxlength="16" required></td> -->
                        <td><b><?php echo $data['NIK']?></b></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <!-- <td><input type="text" name="noHP" minlength="11" maxlength="14" required></td> -->
                        <td><input type="text" pattern="[0][8][0-9]{9,12}" maxlength="14" name="noHP" required></td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td><input type="file" name="fotoProfil" accept="image/*" required></td>
                    </tr>
                </table>
            </div>
            <div class="footer">
                <a href="profile.php?id=<?php echo $data['NIK'] ?> ">Back</a>
                <input id="updateBtn" type="submit" value="Save Update" name="submit" placeholder="Save">
            </div>
        </form>
    </div>
</body>
</html>