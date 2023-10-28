<?php
include($_SERVER['DOCUMENT_ROOT'] . '/blog/layout/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/blog/include/function.php');
include($_SERVER['DOCUMENT_ROOT'] . '/blog/database/db.php');
?>
<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Categories</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                        </div>
                        <div class="form-group">
                            <label for="desc">description</label>
                            <input type="textarea" class="form-control" id="desc" name="desc" placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="file">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


            <!-- <?php
                    // include($_SERVER['DOCUMENT_ROOT'].'/blog/layout/footer.php'); 
                    ?> -->
            <!-- ./wrapper -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

            <!-- jQuery -->
            <script src="<?= url() ?>/assets/plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="<?= url() ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="<?= url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="<?= url() ?>/assets/plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="<?= url() ?>/assets/plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="<?= url() ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="<?= url() ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="<?= url() ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="<?= url() ?>/assets/plugins/moment/moment.min.js"></script>
            <script src="<?= url() ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="<?= url() ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="<?= url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="<?= url() ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="<?= url() ?>/assets/dist/js/adminlte.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?= url() ?>/assets/dist/js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="<?= url() ?>/assets/dist/js/pages/dashboard.js"></script>
            </body>

            </html>