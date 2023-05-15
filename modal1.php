<body>
   
    <div class="modal fade" id="m1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-tittle">Detail</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>Tailor order</h3><br>
                                <!-- <div class="form-group"> -->

                                <form action="./partials/tailororder.php" method="post">
                                    <label>Full Name </label>
                                    <input type="text" name="name" alt="name" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" alt="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" alt="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" alt="city" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" alt="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender</label><br>
                                <input type="radio" name="gender" value="Female" onclick="myFunction(this.value)">Female<i class="fa fa-female"
                                    aria-hidden="true" class="form-control"></i>
                                <input type="radio" name="gender" value="Male" onclick="myFunction(this.value)">Male<i class="fa fa-male"
                                    aria-hidden="true"></i>
                            </div>


                            <div class="form-group">
                                <label>Order Notes</label>
                                <textarea name="order" class="form-control mb-2"
                                    placeholder="Notes about your order, eg. special notes for delivary"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Kurdish Clothes Style</label><br>
                                <input type="checkbox" name="typestyle" value="Swltan Style">&nbsp;Swltan Style
                                <input type="checkbox" name="typestyle" value="Old Style">&nbsp;Old Style
                                <input type="checkbox" name="typestyle" value="Classic Style ">&nbsp;Classic
                                Style
                                <input type="checkbox" name="typestyle" value="Sulaimani Style ">&nbsp;Sulaimani
                                Style
                                <input type="checkbox" name="typestyle" value="Hawler Style ">&nbsp;Hawler Style
                            </div>
                            <br>
                            <h5>Size Clothes</h5>
                            <div class="form-group">
                                <label>size shoulder</label>
                                <input type="double" name="sshan" alt="sshan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Arm</label>
                                <input type="double" name="pball" alt="sshan" class="form-control">
                            </div>
                            <Script>
                            function myFunction(browser) {
                                if(browser == "Female"){
                                    document.getElementById('Fem').style.display = 'block';
                                    document.getElementById('mel').style.display = 'none';


                                }
                                else{
                                    document.getElementById('mel').style.display = 'block';
                                    document.getElementById('Fem').style.display = 'none';

                                }
}

            



</Script>


                      <div class="form-group" style="display: none;" id="Fem" >
                                <label>Qyasi brest</label>
                                <input type="double" name="ssng" alt="sshan" class="form-control">
                            </div>                           
                            <div class="form-group" style="display: none;" id="mel" >
                                <label>sharwal size</label>
                                <input type="double" name="ssharwal" alt="ssharwal" class="form-control">
                            </div>    
                       
                         
                            <div class="form-group">
                                <label>Drezhi Qol</label>
                                <input type="double" name="sqol" alt="sshan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Drezhi arms</label>
                                <input type="double" name="sbala" alt="sshan" class="form-control">
                            </div>

                            <div class="dropdown form-group" >
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Select Tailor 
  </button>
  <ul class="dropdown-menu">

    <li>
   
        <?php
             $sql = "SELECT tailorPost.* ,Tailorregester.id,Tailorregester.file,Tailorregester.username FROM `tailorPost`,Tailorregester WHERE tailorPost.gender='male' AND tailorPost.tailorId=Tailorregester.id";
             $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                  
                
             
             ?>
        <input type="submit" name="submit" value="<?php echo $row['id']. $row['username'] ?>" type="button">

        
        <?php } ?>

       

</li>
<?php


?>



  </ul>


</div>


                            <!-- <input type="submit" name="submit" value="BuyTailor" class="btn btn-success" /> -->
                            </form>


                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-dark" data-dismiss="modal">close</button>

            </div>

        </div>
    </div>
    </div>
</body>