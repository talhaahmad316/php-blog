
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/header.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/nav.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/sidebar.php'); ?>
<?php
    $category = new CategoryController($conn);
    $categories = $category->index();
    $sub_category = new SubCategoryController($conn);
    $result = false;
    if(isset($_POST['submit']))
    {
        $result = $sub_category->store();
    }
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Create SubCategory</h1>
                </div>
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
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Category</h3>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <?php if($result){ ?>
                            <div class="callout callout-success">
                                <h5>Data Inserted</h5>
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="CategoryName">Sub Category Name</label>
                                <input type="text" name="name" required class="form-control" id="CategoryName" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <label for="CategoryName">Select Category</label>
                                <select class="form-control" name="category_id">
                                <?php if (mysqli_num_rows($categories) > 0) { ?>
                                    <?php while ($row = mysqli_fetch_array($categories)) { ?>
                                        <option value='<?=$row['id']?>'><?=$row['title']?> </option>
                                <?php } } ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/footer.php'); ?>