
<div class="container-fluid" style="margin-top:98px">
    <div class="col-lg-12">
        <div class="row">
            <!-- FORM Panel -->
            <div class="col-md-4">
                <form action="partials/_categoryManage.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header" style="background-color: rgb(111 202 203);">
                            Create New post
                        </div>
                        <div class="card-body">
                            <div class="form-group">

                                <label class="control-label">style Name: </label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">style Desc: </label>
                                <input type="text" class="form-control" name="desc" required>
                            </div>
                            <div class="form-group">
                                 <label>Gender</label><br>
                                  <input type="radio" name="gender" value="Female">Female<i class="fa fa-female" aria-hidden="true" class="form-control">

                                  </i> <input type="radio" name="gender" value="Male">Male<i class="fa fa-male" aria-hidden="true"></i>
                                 </div>                          
                                   <div class="form-group">
                                <label for="image" class="control-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control" style="border:none;">
                                <small id="Info" class="form-text text-muted mx-3">Please .jpg file upload.</small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="createCategory"
                                        class="btn btn-sm btn-primary col-sm-3 offset-md-4"> Create </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- FORM Panel -->

            <!-- Table Panel -->
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover mb-0">
                            <thead style="background-color: rgb(111 202 203);">
                                <tr>
                                    <th class="text-center" style="width:7%;">Id</th>
                                    <th class="text-center">Img</th>
                                    <th class="text-center" style="width:58%;">style Detail</th>
                                    <th class="text-center" style="width:18%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                //select tailorPost where tailorId == this session id 
                            $sql = "SELECT * FROM `tailorPost` WHERE `tailorId` = ".$_SESSION['tailorId'];
                             
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $catId = $row['id'];
                                $catImg = $row['img'];
                                $catName = $row['name'];
                                $catDesc = $row['title'];
                                $gender = $row ['gender'];
                                echo '<tr>
                                        <td class="text-center"><b>' .$catId. '</b></td>
                                        <td><img src="./uploads/'.$catImg.'" alt="image for this Category" width="150px" height="150px"></td>
                                        <td>
                                            <p>Name : <b>' .$catName. '</b></p>
                                            <p>Description : <b class="truncate">' .$catDesc. '</b></p>
                                            <p>Gender : <b class="truncate">' .$gender. '</b></p>

                                        </td>
                                      


                                        <td class="text-center">
                                            <div class="row mx-auto" style="width:112px">
                                            <button class="btn btn-sm btn-primary edit_cat" type="button" data-toggle="modal" data-target="#updateCat' .$catId. '">Edit</button>
                                            <form action="partials/_categoryManage.php" method="POST">
                                                <button name="removeCategory" class="btn btn-sm btn-danger" style="margin-left:9px;">Delete</button>
                                                <input type="hidden" name="catId" value="'.$catId. '">
                                            </form></div>
                                        </td>
                                    </tr>';
                            }
                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table Panel -->
        </div>
    </div>
</div>


<?php 
    $catsql = "SELECT * FROM `tailorPost` WHERE `tailorId` = ".$_SESSION['tailorId'];
    $catResult = mysqli_query($conn, $catsql);
    while($catRow = mysqli_fetch_assoc($catResult)){
        $catId = $catRow['id'];
        $catName = $catRow['name'];
        $catDesc = $catRow['title'];
        $gender = $catRow['gender'];
?>

<!-- Modal -->
<div class="modal fade" id="updateCat<?php echo $catId; ?>" tabindex="-1" role="dialog"
    aria-labelledby="updateCat<?php echo $catId; ?>" aria-hidden="true" style="width: -webkit-fill-available;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(111 202 203);">
                <h5 class="modal-title" id="updateCat<?php echo $catId; ?>">post Id: <b><?php echo $catId; ?></b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="partials/_categoryManage.php" method="Post" enctype="multipart/form-data">
                    <div class="text-left my-2">

                        <b><label for="name">Name</label></b>
                        <input class="form-control" id="name" name="name" value="<?php echo $catName; ?>" type="text"
                            required>
                    </div>
                    <div class="text-left my-2">
                        <b><label for="desc">Description</label></b>
                        <textarea class="form-control" id="desc" name="desc" rows="2" required
                            minlength="6"><?php echo $catDesc; ?></textarea>
                    </div>
                          <div class="form-group">
                                 <label>Gender</label><br>
                                  <input type="radio" name="gender" value="Female">Female<i class="fa fa-female" aria-hidden="true" class="form-control">

                                  </i> <input type="radio" name="gender" value="Male">Male<i class="fa fa-male" aria-hidden="true"></i>
                                 </div>  
                    <div class="text-left my-2">

                        <input type="file" name="catimage" id="catimage" class="form-control">
                    </div>
                    <input type="hidden" id="catId" name="catId" value="<?php echo $catId; ?>">
                    <button type="submit" class="btn btn-success" name="updateCategory">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>