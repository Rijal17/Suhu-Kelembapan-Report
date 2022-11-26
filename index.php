
<?php
session_start();
include "koneksi.php";
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($konek, $_POST['username']);
    $password =  mysqli_real_escape_string($konek, $_POST['password']);
    $query = mysqli_query($konek, "SELECT * FROM login WHERE username='$username'");
    $data = mysqli_fetch_array($query);

    if (password_verify($_POST['password'], $data['password'])) {
        $_SESSION["submit"] = true;
        $_SESSION['level'] = $data['level'];
        $_SESSION['username'] = $username;

        if ($data['level'] == "admin") {
            echo "<script>
			alert ('Berhasil login sebagai Admin');
			document.location.href = 'homeAdmin.php';
        </script>";
            die;
        } else {
            echo "<script>
			alert ('Berhasil login sebagai User');
			document.location.href = 'home.php';
        </script>";
            die;
        }
    } else {
            echo "<script>
			alert('Gagal login ');
			document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>Login</title>
    <link href="css/styles_custom.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="POST">
                <div class="login-form mb-3">
                    <h3>Form Login</h3>
                </div>
                <input type="text" placeholder="Username" name="username" require>
                <input type="password" placeholder="Password" name="password" require>
                <button type="submit" name="submit" id="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>