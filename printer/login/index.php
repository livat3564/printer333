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

    <div class="container">
        <center><h2><i>BABA ARAB</i></h2></center>
        <center><h3>Selamat Datang</h3></center>
        <form action="process.php" method="POST">
            <h3> <label>Username</label></h3>
            <input type="text" name="username" class="form-control" id=""> <br /><br />

        <h3><label>Password</label></h3>
        <input type="password" name="password" class="form-control" id=""> <br /><br />
        
        <center><button type="submit" name="login">Login</button>

        <div class="register">
            <h4><small>Belum punya akun? <br /></h4>
            <h4><a href="../register/index.php">Register</a></small></h4>
        </div>
        </form>
    </div>
</body>
</html>