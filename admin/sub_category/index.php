<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/nav.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/sidebar.php'); ?>
<?php
    $category = new SubCategoryController($conn);
    $sub_categories = $category->index();
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
                            <th>Image</th>
                            <th>Sub Category Name</th>
                            <th>Sub Category Slug</th>
                            <th>Category Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($sub_categories) > 0) { ?>
                        <?php while ($row = mysqli_fetch_array($sub_categories)) { ?>
                            <tr class="row_<?=$row['sub_category_id']?>">
                                <td>
                                    <img width="100px" src="<?=url()?>/assets/images/sub_category/<?=$row['sub_category_image']?>" alt="">
                                </td>
                                <td><?=$row['name']?></td>
                                <td><?=$row['slug']?></td>
                                <td><?=$row['category_name']?></td>
                                <td><?=$row['created_at']?></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-danger delete_btn" value="<?=$row['sub_category_id']?>">Delete</button>
                                    <a href="edit.php?id=<?=$row['id']?>" class="btn btn-info">Edit</a>
                                </td>
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
<script>
$('.delete_btn').click(function(){
    console.log($(this).val());
    var id = $(this).val();
    $.ajax({
        url: "<?=url('include/route.php')?>",
        type: "GET",
        data:{'route':'delete_sub_category','id':id},
        success: function(res){
            console.log(res);
            $('.row_'+id).remove();
        }
    });
})
</script>