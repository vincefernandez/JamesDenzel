<?php include('../header.php'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
    </div>


    <div class="row">


        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">

                <!-- Upload Image then Fetch it into the Source Image -->
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <div class="py-3 d-flex flex-row align-items-center justify-content-end">

                        </div>
                        <div style="height: auto; width: 200px;">
                        <img src="../img/undraw_profile_1.svg" style="text-align: center;">
                        <input type="file" name="file" id="fileToUpload">

                        <button type="submit" name="imageUpload">Upload Image</button>
                        </div>
                        <div>
                            <div class="d-flex">


                                <div class="mr-auto p-2">
                                    <h1 class="h3 mb-0 text-gray-800">Logs <i class="fas fa-bell">3</i></h1>

                                </div>
                                <div class="p-2">
                                    <button class="h6 mb-0 text-gray-800">Refresh <i class="fas fa-sync-alt"></i></button>
                                </div>
                                <div class="p-2">
                                    <button class="h6 mb-0 text-gray-800">Clear <i class="fas fa-broom"></i></button>
                                </div>
                            </div>
                        </div>
                       

                    </form>




                </div>
            </div>
        </div>
        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card mb-4">

                <div class="card-body">


                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>
                <div class="card-body">
                    The styling for this basic card example is created by using default Bootstrap
                    utility classes. By using utility classes, the style of the card component can be
                    easily modified with no need for any custom CSS!
                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    Dropdown menus can be placed in the card header in order to extend the functionality
                    of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                    icon in the card header can be clicked on in order to toggle a dropdown menu.
                </div>
            </div>

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        This is a collapsable card example using Bootstrap's built in collapse
                        functionality. <strong>Click on the card header</strong> to see the card body
                        collapse and expand!
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
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