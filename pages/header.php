<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <title>CARE | Main Form</title> -->
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="shortcut icon" href="../img/faviconlogo.jpg" />
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-1.10.1.js"
  integrity="sha256-663tSdtipgBgyqJXfypOwf9ocmvECGG8Zdl3q+tk+n0="
  crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Admin-dashboard.php">
               <img src="../img/CARELogo.png" alt="" style="width: 50px; height: auto;">
                <div class="sidebar-brand-text mx-3" style="font-size:26px">C A R E</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Admin-dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Department" aria-expanded="true" aria-controls="collapseTry">
                    <i class="fas fa-fw fa-user-alt"></i>
                  <em>Accounts Management</em>
                </a>
                <div id="Department" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Department</h6>
                        <a class="collapse-item" href="Administrator.php">Administrator</a>
                        <a class="collapse-item" href="LGU-OfficeStaff.php">LGU-Office Staff</a>
                        <a class="collapse-item" href="Residents.php">Residents</a>
                      
                    </div>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                    
                    <span>Accounts Management</span></a>
            </li> -->

            <!-- Main Admin Account Informations -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="MainAdminAccountInfo.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Administrator</span></a>
            </li> -->
        <!-- Department Admins -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="Admin-Department.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>LGU-Office Staff</span></a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="Residents.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Residents</span></a>
            </li> -->
            <li class="nav-item active">
                <a class="nav-link" href="department.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Department</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="barangays.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Barangays</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
          

          
            <!-- Sidebar Toggler (Sidebar) -->
           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <div class="text-center d-none d-md-inline">
                        <a href="#"> <i class="fa fa-bars" style="color:green" id="sidebarToggle"></i></a>
                    </div>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color:green">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="example">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="System Admin" class="mr-2 d-none d-lg-inline text-gray-600 small">Juan Dela Cruz<br>System Admin

</span>
                              
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                              
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>