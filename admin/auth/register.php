<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blog/include/function.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/blog/database/db.php');
    $error_name = '';
    $error_email = '';
    $error_password = '';
    $result = '';
    if (isset($_POST['submit'])) 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $enc_password = md5($password);
        if (empty($name)) {
            $error_name = 'Name is required';
        }
        if (empty($email)) {
            $error_email = 'Email is required';
        }
        if (empty($password)) {
            $error_password = 'Password is required';
        }
        if (empty($error_name) && empty($error_email) && empty($error_password)) {
            $check_email = "SELECT * FROM `users` WHERE `email` = '$email'";
            $check_result = mysqli_query($conn, $check_email);

            if (mysqli_num_rows($check_result) > 0) {
                $error_email = 'Email is already exist';
            }else{
                $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '" . $enc_password . "')";
                $result = mysqli_query($conn, $sql) or die("Failed");
            }
            if ($result) {
                header('location: login.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo url(); ?>assets/dist/css/adminlte.min.css">
    <style>
        .red-text {
            color: red;
        }
        /* .red-border {
            border: 1px solid red;
        } */
    </style>
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>My</b>Blog</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= isset($error_name) ? 'red-border' : '' ?>" name="name" value="<?= isset($name) ? $name  : '' ?>" placeholder="Name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <p class="red-text"><?= isset($error_name) ? $error_name  : '' ?></p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control <?= isset($error_email) ? 'red-border' : '' ?>" name="email" value="<?= isset($email) ? $email  : '' ?>" placeholder="Email" required?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <p class="red-text"><?= isset($error_email) ? $error_email  : '' ?></p>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control  <?= isset($error_password) ? 'red-border' : '' ?>" name="password" value="<?= isset($password) ? $password  : '' ?>" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <p class="red-text"><?= isset($error_password) ? $error_password  : '' ?></p>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="login.php" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?php echo url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>