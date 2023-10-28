<?php
session_start();
if(isset($_GET['logout'])){
    session_destroy();
    $_SESSION = [];
    header('location: admin/auth/login.php');
}
if(!isset($_SESSION['submit'])){
    header('location: ../../admin/auth/login.php');
}
?>
<?php
     include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/header.php') ;
     include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/nav.php'); 
     include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/sidebar.php'); 
?>
<div class="content-wrapper">
<div class="row">
    <div class="col-12 ">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Registered Users</h2>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <!-- <th>Status</th> -->
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `users`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['password'] ?></td>
                                    <!-- <td><?= $row['deleted_at'] ?></td> -->
                                    <td><?= $row['created_at'] ?></td>
                                    <td><?= $row['updated_at'] ?></td>
                                    <td><a href="update.php?id=<?= $row['id'] ?>" type="submit" class="btn btn-success mb-2">Update</a>
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                        <?php }                             
                        } else {
                            echo '<tr><td colspan="8">No users found.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/blog/layout/footer.php');
?>
