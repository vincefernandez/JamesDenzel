<?php include_once('headerLGU.php'); ?>
<title>CARE | Concerns</title>


<div class="modal fade" id="Mark" tabindex="-1" role="dialog" aria-labelledby="Mark" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Mark" style="color:black; font-size:24px;">Options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p>
                        
                        <input type="radio" name="Records"> All Records<br>
                        <input type="radio" name="Filter"> Enable Filter Options
                    </p>

                    <p style="color:black; font-size:24px;">Filtered By Date</p>
                          <input type="radio" name="Today"> Today<br>
                        <input type="radio" name="Filter"> Yester Day<br>
                        <input type="radio" name="Records"> This Week<br>
                        <input type="radio" name="Records"> Last Week<br>
                        <input type="radio" name="Records"> This Month<br>
                        <p style="color:black; font-size:24px;">Custom</p>
                        <label for="From">From</label>
                        <input type="text" name="From" placeholder="mm/dd/yyyy"><br>
                        <label for="From">To</label>
                        <input type="text" name="To" placeholder="mm/dd/yyyy">

                        <p style="color:black; font-size:24px;">Filtered By Report Status</p>
                        <input type="radio" name="Filter"> All Pending<br>
                        <input type="radio" name="Records"> All Resolved<br>
                       
                        <input type="radio" name="Records">Both Pending & Resolved<br>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Make SpreadSheet</button>
            </div>
        </div>
    </div>
</div>

<div class="d-flex">
    <div class="mr-auto p-2">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-success" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>

                </div>
            </div>
        </form>
    </div>
    <div class="p-2">
        <a class="btn btn-success" href="#">Show All Pending</a>
        <a class="btn btn-success" href="#">Show All Resolved</a>
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#Mark">Make Spreadsheet</a>





    </div>

</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover ">
                <!-- <thead class="thead-dark">

                    <tr>



                        <th scope="col">Purpose</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Delete</th>


                    </tr>
                </thead> -->
                <tbody>
                    <tr>

                        <td>4/3/21</td>
                        <td>8:00 AM</td>
                        <td>User ID: //User-00001</td>
                        <!-- Fetch Here -->
                        <td>Santiago</td>
                        <td>Pending</td>
                        <td><a href="Complaints.php">View</a></td>


                    </tr>
                    <tr>

                        <td>4/3/21</td>
                        <td>8:00 AM</td>
                        <td>User ID: //User-00001</td>
                        <!-- Fetch Here -->
                        <td>Santiago</td>
                        <td>Pending</td>
                        <td><a href="Complaints.php">View</a></td>


                    </tr>
                    </tr>
                    <tr>

                        <td>4/3/21</td>
                        <td>8:00 AM</td>
                        <td>User ID: //User-00001</td>
                        <!-- Fetch Here -->
                        <td>Santiago</td>
                        <td>Resolved</td>
                        <td><a href="Complaints.php">View</a></td>


                    </tr>
                    <tr>

                        <td>4/3/21</td>
                        <td>8:00 AM</td>
                        <td>User ID: //User-00001</td>
                        <!-- Fetch Here -->
                        <td>Santiago</td>
                        <td>Resolved</td>
                        <td><a href="Complaints.php">View</a></td>


                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php include('footerLGU.php'); ?>