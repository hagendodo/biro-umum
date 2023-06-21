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
            <a href="#informasi" id="informasi-link">Informasi</a>
        </div>
    </nav>
    <div class="information-overlay" id="information-overlay">
        <div class="information">
            <p>Biro Organisasi didukung oleh tiga bagian yaitu Bagian Kelembagaan dan Analisis Jabatan,
                Bagian Reformasi
                Birokrasi dan Akuntablitas Kinerja, serta Bagian Tata Laksana. Masing-masing
                bagian terdiri dari 3 sub
                bagian yang mendukung dalam kinerja di bidang tersebut.
                Sebagai wujud transaparansi informasi dalam menuju reformasi birokrasi,
                Biro Organisasi menyajikan
                berbagai layanan informasi baik terkait dengan kegiatan sehari-hari maupun layanan lain yang terkait
                dengan informasi pelayanan publik.
                Tugas dan tanggung jawab sebagai penyebar informasi layanan publik, Biro Organisasi secara bertahap
                (step by step) akan melengkapi kebutuhan publik terkait informasi pelayanan. </p>
            <button id="information-closebtn">
                <span>tutup</span>
            </button>
        </div>
    </div>

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