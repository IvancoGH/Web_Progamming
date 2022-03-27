<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginPage">
        <div class="titleLogin">Login</div>
        <div class="containerLogin">
            <form action="loginProses.php" method="POST">
                <table id="table">
                    <tr>
                        <!-- <?php session_start(); echo $_SESSION['usernameSession']?> -->
                        <td class="usernameLogin">Username</td>
                        <td><input type="text" name="username" style="width:200px; height:35px" required></td>
                    </tr>
                    <tr>
                    <!-- <?php echo $_SESSION['password2Session']?> -->
                        <td>Password</td>
                        <td><input type="password" name="password" style="width:200px; height:35px" required></td>
                    </tr>
                </table>
                <div class="footer">
                    <input type="submit" name="submit" placeholder="Login" value="Login" id="loginBtn">
                    <div class="back"><a href="welcome.php">Kembali</a></div>
                </div>
            </form>
        </div>
    </div>
   
</body>
</html>