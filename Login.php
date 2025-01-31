<?php
include 'koneksi.php';
session_start();

// Fungsi Login
if (isset($_SESSION['login'])) {
    header("location: dashboard.php");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($data) === 1) {
        $baris_data = mysqli_fetch_assoc($data);
        if ($password == $baris_data['password']) {
            $_SESSION['id'] = $baris_data['id'];
            $_SESSION['nama_lengkap'] = $baris_data['nama_lengkap'];
            $_SESSION['alamat'] = $baris_data['alamat'];
            $_SESSION['login'] = true;
            header('Location: dashboard.php');
            exit;
        } else {
            echo "<script>alert('Username dan Password anda salah!')</script>";
        }
    } else {
        echo "<script>alert('Username dan Password anda salah!')</script>";
    }
}

// Fungsi Register
if (isset($_POST['register'])) {
    $nama_lengkap = $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ulangi_password = $_POST['ulangi_password'];

    $cek_username = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($cek_username)) {
        echo "<script>alert('Username sudah digunakan');</script>";
    } elseif ($password != $ulangi_password) {
        echo "<script>alert('Password tidak sama');</script>";
    } else {
        $simpan = mysqli_query($koneksi, "INSERT INTO user(nama_lengkap, alamat, username, password) VALUES('$nama_lengkap','$alamat', '$username', '$password')");

        if ($simpan) {
            echo "<script>alert('Pendaftaran akun berhasil dilakukan');</script>";
            header("location: Index.php");
        } else {
            echo "<script>alert('Pendaftaran akun gagal dilakukan');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<section class="wrapper">
    <!-- Form Registrasi -->
    <div class="form signup">
        <header>Signup</header>
        <form action="" method="post">
            <input type="text" name="namalengkap" placeholder="Nama Lengkap" required>
            <input type="text" name="alamat" placeholder="Alamat" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="ulangi_password" placeholder="Ulangi Password" required>
            <div class="checkbox">
                <input type="checkbox" id="signupCheck" required>
                <label for="signupCheck">I accept all terms & conditions</label>
            </div>
            <input type="submit" name="register" value="Signup">
        </form>
    </div>

    <!-- Form Login -->
    <div class="form login">
        <header>Login</header>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#">Forgot password?</a>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</section>
<script>
    const wrapper = document.querySelector(".wrapper"),
        signupHeader = document.querySelector(".signup header"),
        loginHeader = document.querySelector(".login header");

    loginHeader.addEventListener("click", () => {
        wrapper.classList.add("active");
    });

    signupHeader.addEventListener("click", () => {
        wrapper.classList.remove("active");
    });
</script>
</body>
</html>
