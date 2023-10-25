<?php
include($_SERVER['DOCUMENT_ROOT'] . '/blog/include/function.php');
include($_SERVER['DOCUMENT_ROOT'] . '/blog/database/db.php');
?>

<?php
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = $sql = "UPDATE `users` SET `name`='$name', `email`='$email', `password`='$password' WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql) or die("unsuccessful");
    header("location: create.php");
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
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value='<?= $row['email'] ?>'>
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control" id="password" value='<?= $row['password'] ?>'>
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