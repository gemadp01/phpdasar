<?php
session_start();
require 'functions.php';


if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    // die;
    if ($key === hash('sha256', $row["username"])) {
        $_SESSION["login"] = true;
    }
}


if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        // cek password, apakah sesuai
        $row = mysqli_fetch_assoc($result);
        // var_dump(password_verify($password, $row["password"]));
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            if (isset($_POST["remember"])) {
                setcookie('id', $row["id"], time() + 60);
                setcookie('key', hash('sha256', $row["username"]), time() + 60);
            }
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>

    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p>Username / Password yang anda masukkan salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember" placeholder="Username">
                <label for="remember">Remember ME</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>

</body>

</html>