<?php include('header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- Content Row -->
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Basic Info</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>
        <div class="col-lg-12 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
            <form id="form" action="Administrator.php" method="post" enctype="multipart/form-data">
                <div class="d-flex">
                    <div class="p-2">
                    <img id="blah" src="../img/noimage_person.png" alt="your image" style="height: 150px; width:auto;" />
                     
                    </div>

                    <div class="p-2">
                        <br>
                        <h4>Juan Dela Cruz</h4>
                        <h6>System Admin</h6>
                        <!-- actual upload which is hidden -->
                        <form runat="server">
  <input accept="image/*" type='file' id="imgInp" />
 
</form>


                       
                        
                        <!-- <input type="file" id="fileElem" multiple accept="multipart/form-data" style="display:none">
                        <a href="#" id="fileSelect">Select some files</a>
                        <div id="fileList">
                            <p>No files selected!</p>
                        </div> -->
                        

                    </div>
                    <div class="ml-auto p-2">
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Contact Info</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>
        <div class="col-lg-12 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="d-flex">
                    <div class="p-2">

                        <label for="email" class="mb-4">Email :</label><br>
                        <label for="phone" class="mb-4">Phone :</label>
                    </div>
                    <div class="p-2">

                        <label name="emai" class="mb-4">Juan Dela Cruz</label><br>
                        <label name="phone" class="mb-4">Juan Dela Cruz</label>
                    </div>
                    <div class="ml-auto p-2">
                        <button class="btn btn-success mb-4">Change</button><br>
                        <button class="btn btn-success  mb-4">Change</button>
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

                        <input type="textbox" class="mb-4" placeholder="Old Password" style="width: 600px">
                        <input type="textbox" class="mb-4" placeholder="New Password" style="width: 600px">
                        <input type="textbox" class="mb-4" placeholder="Confrm New Password" style="width: 600px">
                    </div>

                    <div class="ml-auto p-2"><br><br><br>
                        <button class="btn btn-success">Change</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Graph -->
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Recovery Info</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
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

                        <button class="btn btn-success">Change</button>

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
                <a class="btn btn-success" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?php include('footer.php'); ?>

</body>

</html>