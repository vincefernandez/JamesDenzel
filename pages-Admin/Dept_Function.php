<?php include('headerLGU.php'); ?>
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><span>Department :</span></h6> <h6> Office of the Mayor</h6>
                <h6 class="m-0 font-weight-bold text-primary"> <span>Last Update:</span> </h6> 01/23/2021</h6>
            </div>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Function</h6>


                    <!-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Update</div>
                            <a class="dropdown-item" href="#" onclick="edit()">Edit</a>
                            <a class="dropdown-item" href="#" onclick="clearField()">Clear Field</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something Unusual? Report Here!</a>
                        </div>
                    </div> -->
                </div>
                <form action="dashboardBS.php" method="post">
                    <div class="form-group">

                        <textarea class="form-control" id="TextArea" name="TextArea" rows="13" placeholder="Department Content Here"></textarea>


                        <button type="submit" class="btn btn-success btn-small" name="save">Edit</button>
                        <button type="submit" class="btn btn-success btn-small" name="save">Save</button>
                    </div>
                </form>






            </div>
        </div>
    </div>
</div>

<?php include('footerLGU.php'); ?>