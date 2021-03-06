<?php include("header.php"); ?>
<title>CARE | Barangays</title>
<!-- Begin Page Content -->

<div class="container-fluid">


    <!-- Modal -->
    <div class="modal fade" id="AddAccounts" tabindex="-1" role="dialog" aria-labelledby="AddAccounts" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddAccounts">Add Barangay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form>
                        <p>
                            <label for="user">Barangay Name :</label>
                            <input type="textbox" name="user">
                        </p>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Edit Account Info Modal -->
    <div class="modal fade" id="EditInfo" tabindex="-1" role="dialog" aria-labelledby="EditInfo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditInfo">Edit Barangay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form>
                        <p>
                            <label for="ACCID">Barangay ID :</label>
                            <label name="ACCID">123</label>
                        </p>
                        <p>
                            <label for="DeptName">Barangay Name :</label>
                            <input type="textbox" name="DeptName" value="Quezon City"></label>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
<!-- Change Pass Modal -->
    

    <div class="d-flex">


        <div class="mr-auto p-2">
            <h1 class="h3 mb-0 text-gray-800">Barangays Table</h1>

        </div>
        <div class="p-2">
            <button type="button" class="h6 mb-0 text-white-800 btn btn-success">Refresh <i class="fas fa-sync-alt"></i></button>
        </div>
        <div class="p-2">

            <button type="button" class="h6 mb-0 text-white-800 btn btn-success" data-toggle="modal" data-target="#AddAccounts">Add Accounts <i class="fas fa-plus"></i></button>
        </div>
    </div>
    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">


                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <label for="Show">Show</label>
                        <select type="numbers" id="cars">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                        </select>
                        <label for="Entries">Entries</label>
                    </div>
                    <div class="p-2">
                        <label for="Search">Search</label>
                        <input type="search">
                    </div>
                </div>

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success"></h6>

                    <!-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <button class="btn btn-success">Actions <i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                          
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Update</div>
                            <button type="button" class="h6 mb-0 text-white-800 btn btn-success" data-toggle="modal" data-target="#ViewInfo">Add Accounts <i class="fas fa-plus"></i></button>
                            <a class="dropdown-item" href="#">View Account Info</a>
                            <a class="dropdown-item" href="#">Edit Account Info</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> -->
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            

                            <th style="text-align: center;">Department ID</th>
                            <th style="text-align: center;">Department Name</th>
                            <th style="text-align: center;">Actions</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            
                            <td>12345</td>
                            
                            <td>User</td>
                            <td>
                            <!-- Actions Button -->
                                <div class="dropdown no-arrow container" style="text-align:center">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn btn-success">Actions <i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                        <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Actions</div>
                                      

                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#EditInfo" >Edit</a>
                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#DeletePHP" >Delete</a>
                                      
                                       
                                       
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                           
                            <td>12345</td>
                            <td>User</td>
                            <td>
                            <!-- Actions Button -->
                                <div class="dropdown no-arrow container" style="text-align:center">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn btn-success">Actions <i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                        <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Actions</div>
                                      

                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#EditInfo" >Edit</a>
                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#DeletePHP" >Delete</a>
                                      
                                       
                                       
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                           
                            <td>12345</td>
                            <td>User</td>
                            <td>
                            <!-- Actions Button -->
                                <div class="dropdown no-arrow container" style="text-align:center">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn btn-success">Actions <i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                        <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Actions</div>
                                      

                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#EditInfo" >Edit</a>
                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#DeletePHP" >Delete</a>
                                      
                                       
                                       
                                    </div>
                                </div>
                            </td>
                        </tr>
                      
                       




                      
                        <tr>
                           
                            <td>12345</td>
                            <td>User</td>
                            <td>
                            <!-- Actions Button -->
                                <div class="dropdown no-arrow container" style="text-align:center">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn btn-success">Actions <i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                        <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Actions</div>
                                      

                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#EditInfo" >Edit</a>
                                        <a class="dropdown-item" href="#"data-toggle="modal" data-target="#DeletePHP" >Delete</a>
                                      
                                       
                                       
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr class="sidebar-divider" style="height: 50px; width:auto;">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <label for="Show">Show</label>
                        <select type="numbers" id="cars">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                        </select>
                        <label for="Entries">Entries</label>
                    </div>
                    <div class="p-2">
                        <a href="#">Previous</a></li>


                    </div>
                    <div class="p-2">

                        <a href="#">1</a>

                    </div>
                    <div class="p-2">

                        <button><a href="#" onclick="haha()">Next</a></button>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</div>
<!-- End of Page Wrapper -->
<!-- Logout Modal-->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success" href="../index.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
</body>

</html>