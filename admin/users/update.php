<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blog/include/function.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/blog/database/db.php');
    $error_name = '';
    $error_email = '';
    $error_password = '';
    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($name)) {
            $error_name = 'Name is required';
        }
        if (empty($email)) {
            $error_email = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = 'Invalid email format';
        }
        if (empty($password)) {
            $error_password = 'Password is required';
        }
        if (empty($error_name) && empty($error_email) && empty($error_password)) {
            $check_email = "SELECT * FROM `users` WHERE `email` = '$email' AND `id` != $id";
            $check_result = mysqli_query($conn, $check_email);

            if (mysqli_num_rows($check_result) > 0) {
                $error_email = 'Email is already in use by another user';
            } else {
                $sql = "UPDATE `users` SET `name`='$name', `email`='$email', `password`='$password' WHERE `id`='$id'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header("location: list_users.php");
                } else {
                    echo "Update unsuccessful";
                }
            }
        }
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Update
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value='<?= $row['name'] ?>'>
                                <span class="error"><?= $error_name ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value='<?= $row['email'] ?>'>
                                <span class="error"><?= $error_email ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control" id="password" value='<?= $row['password'] ?>'>
                                <span class="error"><?= $error_password ?></span>
                            </div>
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
