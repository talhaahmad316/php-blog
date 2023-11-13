
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/header.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/nav.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/sidebar.php'); ?>
<?php
    $category = new CategoryController($conn);
    $categories = $category->index();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Categories</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($categories) > 0) { ?>
                        <?php while ($row = mysqli_fetch_array($categories)) { ?>
                            <tr >
                                <td><?=$row['title']?></td>
                                <td><?=$row['slug']?></td>
                                <td><?=$row['created_at']?></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                        <?php } else { ?>
                            <tr >
                                <td colspan="6" style="text-align: center;">No Data Found</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/footer.php'); ?>