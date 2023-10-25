<?php
include($_SERVER['DOCUMENT_ROOT'] . '/blog/include/function.php');
include($_SERVER['DOCUMENT_ROOT'] . '/blog/database/db.php');
?>
<?php
    include 'conn.php';
    if(isset($_GET['id']) && !empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sql ="DELETE FROM `users` WHERE id = $id";
        $result=mysqli_query($conn,$sql) or die("failed");
        mysqli_close($conn);
    }
header('location:create.php');
?>