<?php

class LoginController {

    public function login($email, $password) {
        global $con;

        $email = mysqli_real_escape_string($con, $email);
        $password = $password;

        if (!empty($email) && !empty($password)) {
            $sql = "SELECT * FROM user WHERE uemail='$email'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);

            if ($row && password_verify($password, $row['upass'])) {
                $_SESSION['uid'] = $row['uid'];
                $_SESSION['uemail'] = $email;
                header("location:index.php");
            } else {
                return "<p class='alert alert-warning'>L'e-mail ou le mot de passe ne correspondent pas!</p>";
            }
        } else {
            return "<p class='alert alert-warning'>Veuillez remplir tous les champs</p>";
        }
    }
}

?>
