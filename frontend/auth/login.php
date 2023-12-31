<?php

include_once "../../backend/Session.php";
include_once "../../backend/Authentication.php";
include_once "../../backend/User.php";

if(isset($_POST['login'])){
    $auth = new Authentication();

    $user = new User();
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];

    $auth->login($user);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>


<body>
    <nav class="navbar">
        <h1>Pengadaan Biro</h1>
        <div class="navbar-nav">
            <a href="#">Home</a>
        </div>
    </nav>

    <div class="container">


        <!--login-->
        <div class="image image-login" id="login-first">
            <img src="assets/Signin.png" alt="Login Image" width="500" height="500">
        </div>
        <div class="form-container" id="login-form">
            <h2>Login</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" id="email" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password <span>*</span></label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-actions">
                    <button name="login" type="submit">Masuk</button>
                </div>
                <div class="login-register">
                    <h5>Belum punya akun? Daftar
                        <a href="register.php" class="login-link">disini.</a>
                    </h5>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>