<?php include('headerLGU.php'); ?>
<title>CARE | Documents</title>

<div class="modal fade" id="AddDocu" tabindex="-1" role="dialog" aria-labelledby="AddDocu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddDocu">Add Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p>
                        <label for="docu">Document Title</label>
                        <input type="textbox" name="docu">
                    </p>

                    <div class="col-xl-12 col-lg-6">
                        <div class="card shadow mb-10">


                            <div class="card-body">



                                <form action="Dept_Documents.php" method="post" enctype="multipart/form-data">
                                    <input id='fileid' type='file'>
                                    <input id='buttonid' type='button' value='Change Photo' />

                                </form>


                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Add</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="EditDocu" tabindex="-1" role="dialog" aria-labelledby="EditDocu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditDocu">Edit Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p>
                        <label for="docu1">Document Title</label>
                        <input type="textbox" name="docu1" value="Occupation Mayors Permit" style="width: 80%">
                    </p>

                    <div class="col-xl-12 col-lg-6">
                        <div class="card shadow mb-10">


                            <div class="card-body">



                               <p>Back end </p>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add</button>
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

        <a href="#" data-toggle="modal" data-target="#AddDocu"> <i class="fas fa-plus">Add Documents</i></a>




    </div>

</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover ">
                <thead class="thead-dark">

                    <tr>



                        <th scope="col">Purpose</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Delete</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td scope="col">Requirement for Employment</td>
                        <td scope="col">Mayors Clearance</td>
                        <td>  <a href="#" data-toggle="modal" data-target="#EditDocu">Edit</a></td>

                        <td><a href="#">Delete</td></a>




                    </tr>
                    <tr>

                        <td scope="col">Requirement for Employment</td>
                        <td scope="col">Mayors Clearance</td>
                        <td>  <a href="#" data-toggle="modal" data-target="#EditDocu">Edit</a></td> 
                        <!-- EDIT THIS  -->

                        <td><a href="#">Delete</td></a>




                    </tr>
                    </tr>
                    <tr>

                        <td scope="col">Requirement for Employment</td>
                        <td scope="col">Mayors Clearance</td>
                        <td>  <a href="#" data-toggle="modal" data-target="#EditDocu">Edit</a></td>
                        <td><a href="#">Delete</td></a>






                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php include('footerLGU.php'); ?>