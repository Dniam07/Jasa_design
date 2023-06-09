<?php
// agar ngk bisa kembali ke menu index.php setelah login dari url
session_start();
if (isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    header("location= dashboard/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins|Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles/auth.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <section class="wrapper">
            <div class="title">
                <img src="../image/Logo-rofara2.png" alt="logo" width="50px" height="50px">
                <h2 class="page-title">Login Page</h2>
                <h3 class="welcome-message">Welcome to website attendance</h3>
                <span class="login-text">login</span>
                <!-- buat munculin notif -->
                <?php
                if (isset($_GET['message'])) {
                    $msg = $_GET['message'];
                    echo "<div class= 'notif-login'>$msg</div>";
                }
                ?>
            </div>



            <div>
                <form action="login.php" method="POST" class="form-login">
                    <div class="input-kolom">

                        <div class="input-deployed">
                            <label for="nip">Input Deployed Id</label>
                            <input type="number" placeholder="Deployed id" name="nip" class="input-login" required>
                        </div>
                        <div class="input-pass">
                            <label for="password">Input Password</label>
                            <input type="password" placeholder="******" name="password" class="input-login" required>
                        </div>
                        <button type="submit" class="btn" name="login">Submit</button>
                        <div class="register-container">
                        <p class="acc-text">Don't have an account?
                            <span class="register-text"><a href="register.php">Register</a></span>
                        </p>
                        </div>
                    </div>

                    <br>

                </form>
            </div>
        </section>
    </div>

</body>

</html>