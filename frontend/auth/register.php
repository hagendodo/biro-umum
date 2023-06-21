<?php

include_once "../../backend/Session.php";
include_once "../../backend/Authentication.php";
include_once "../../backend/User.php";

if(isset($_POST['register'])){
    $auth = new Authentication();

    $user = new User(
        $_POST['nama'],
        $_POST['username'],
        $_POST['role'],
        $_POST['divisi'],
        $_POST['password']
    );

    $auth->register($user);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
        <div class="image-regis">
            <img src="assets/Signup.png" alt="Register Image">
        </div>
        <div class="form-container" id="register-form">
            <h2>Buat Akun</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="username">Username </label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="role">Role </label>
                    <select id="role" name="role" required>
                        <option readonly hidden class="roleColor">Select role</option>
                        <option class="roleColor" value="user">User</option>
                        <option class="roleColor" value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="role">Divisi </label>
                    <select id="role" name="divisi" required>
                        <option readonly hidden class="roleColor">Select Divisi</option>
                        <option class="roleColor" value="Biro Umum">Biro Umum</option>
                        <option class="roleColor" value="Biro A">Biro A</option>
                        <option class="roleColor" value="Biro B">Biro B</option>
                        <option class="roleColor" value="Biro C">Biro C</option>                        <option class="roleColor" value="Biro C">Biro C</option>
                        <option class="roleColor" value="Biro D">Biro D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Create Password <span>*</span></label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-actions">
                    <button name="register" type="submit">Daftar</button>
                </div>
                <div class="login-register">
                    <h5>Sudah punya akun? Login
                        <a href="login.php" class="login-link">disini.</a>
                    </h5>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>