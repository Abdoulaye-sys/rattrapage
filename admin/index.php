<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("config.php");
$error = "";

if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = $_POST['pass'];

    if (!empty($user) && !empty($pass)) {
        $query = "SELECT auser, apass FROM admin WHERE auser='$user'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $num_row = mysqli_num_rows($result);

        if ($num_row == 1) {
            $row = mysqli_fetch_array($result);
            $stored_pass = $row['apass'];

            // Vérifier le mot de passe directement
            if ($pass == $stored_pass) {
                $_SESSION['auser'] = $user;
                header("Location: dashboard.php");
                exit();
            } else {
                $error = '* Nom d’utilisateur et mot de passe invalides';
            }
        } else {
            $error = '* Nom d’utilisateur et mot de passe invalides';
        }
    } else {
        $error = "* S’il vous plaît remplir tous les champs!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>AH Admin - Login</title>

    <!-- Favicon -->
    <link rel="icon" type="images/png" href="..\images\favicon-16x16.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Main Wrapper -->
<div class="page-wrappers login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Panneau Admin connexion</h1>
                        <p class="account-subtitle">Accès à notre tableau de bord</p>
                        <p style="color:red;"><?php echo $error; ?></p>
                        <!-- Form -->
                        <form method="post">
                            <div class="form-group">
                                <input class="form-control" name="user" type="text" placeholder="nom d'utilisateur">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="pass" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" name="login" type="submit">connexion</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->

<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Inclure DataTables après jQuery -->
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>


</body>

</html>
