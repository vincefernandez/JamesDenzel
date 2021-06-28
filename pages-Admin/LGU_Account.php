<?php include_once('headerLGU.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- Content Row -->
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Basic Info</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>
        <div class="col-lg-12 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">

                <div class="d-flex">
                    <div class="p-2">
                        <img src="../img/pro1.png" alt="Avatar" style="height: 150px; width:auto;">
                    </div>
                    <div class="p-2">
                        <br>
                        <h4>Juan Dela Cruz</h4>
                        <h6>System Admin</h6>
                        <input id='fileid' type='file'><br>
                        <input id='buttonid' type='button' value='Change Photo' />

                    </div>
                    <div class="ml-auto p-2">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Contact Info</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>
        <div class="col-lg-12 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="d-flex">
                    <div class="p-2">

                        <label for="email">Email :</label><br>
                        <label for="phone">Phone :</label>
                    </div>
                    <div class="p-2">

                        <label name="emai">Juan Dela Cruz</label><br>
                        <label name="phone">Juan Dela Cruz</label>
                    </div>
                    <div class="ml-auto p-2">
                        <button class="btn btn-primary">Change</button><br>
                        <button class="btn btn-primary">Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Security</h1>

        </div>
        <div class="col-lg-12 mb-4">

            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-white-800 round">Change Password</h1>

                </div>
                <div class="d-flex">
                    <div class="p-2">

                       <input type="textbox" placeholder="Old Password" style="width: 600px">
                       <input type="textbox" placeholder="Old Password" style="width: 600px">
                        <input type="textbox" placeholder="Old Password" style="width: 600px">
                    </div>
                
                    <div class="ml-auto p-2"><br><br><br>
                        <button class="btn btn-primary">Change</button>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Graph -->
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Recovery Info</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>
        <div class="col-lg-12 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="d-flex">
                    <div class="p-2">

                        <label for="Remail">Recovery Email :</label>
                        
                    </div>
                    <div class="p-2">

                        <label name="Remai">JuanDelaCruz@gmail.com</label>
                        
                    </div>
                    <div class="ml-auto p-2">
                    
                        <button class="btn btn-primary">Change</button>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?php include('footerLGU.php');?>
</body>

</html>