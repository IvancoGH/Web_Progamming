<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="regisPage">
        <h2 id="regisTitle">Register</h2>
        <form action="registerProses.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <table id="table">
                    <tr>
                        <td>Nama Depan</td>
                        <!-- <td><input type="text" name="namaDepan" minlength="3" required></td> -->
                        <td><input type="text" name="namaDepan" pattern="[a-z]{3,}" required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <!-- <td><input type="text" name="tempatLahir" minlength="3" required></td> -->
                        <td><input type="text" pattern="[a-z]{3,}" name="tempatLahir" required></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td><input type="text" name="wargaNegara" maxlength="3" pattern="WN[AI]" placeholder="WNA/WNI" required></td>
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
                        <!-- <td><input type="text" name="namaTengah" minlength="3" required></td> -->
                        <td><input type="text" pattern="[a-z]{3,}" name="namaTengah" required></td>
                    </tr> 
                    <tr>
                        <td>Tgl Lahir</td>
                        <td><input type="date" name="tglLahir" placeholder="yyyy-mm-dd" min="1957-01-01" max="2010-12-31" required></td>
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
                    <tr>
                        <td>Password 1</td>
                        <td><input type="password" name="password1" minlength="8" required></td>
                    </tr>
                </table>

                <table id="table">
                    <tr>
                        <td>Nama Belakang</td>
                        <!-- <td><input type="text" name="namaBelakang" minlength="3" required></td> -->
                        <td><input type="text" pattern="[a-z]{3,}" name="namaBelakang" required></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <!-- <td><input type="text" name="NIK" minlength="16" maxlength="16" required></td> -->
                        <td><input type="text" pattern="[0-9]{16}" name="NIK" maxlength="16" required></td>
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
                    <tr>
                        <td>Password 2</td>
                        <td><input type="password" name="password2" minlength="8" required></td>
                    </tr>
                </table>
            </div>
            <div class="footer">
                <div class="back"><a href="welcome.php">Kembali</a></div>
                <input id="loginBtn" type="submit" value="Register" name="submit" placeholder="Register">
            </div>
        </form>
    </div>
    
</body>
</html>