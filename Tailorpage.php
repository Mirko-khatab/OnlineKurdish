<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id="title">Category</title>
   <link rel = "icon" href ="img/sample_logo1.jpg" type = "image/x-icon">
    <style>
    .jumbotron {
        padding: 2rem 1rem;
    }
    #cont {
        min-height : 570px;
    }
    </style>
</head>
<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php require 'partials/_nav.php' ?>

     <?php
        $id = $_GET['tailorId'];
        $sql = "SELECT * FROM `tailorregester` WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['username'];
            $title = $row['about'];
            $img= $row['file'];

        
    ?>

    <div style="padding-left:5%;padding-Top:3%">
              <img src="./Tailorpanel/uploads/<?php echo $img ?>" width="7%" height="6%"  style="background-size:contain; max-height: 500;   border-radius: 70%;"
             alt="image for this item">
        <h2><?php echo $name ?></h2>

        <p><?php echo $title ?></p>
    </div>
    <?php } ?>

    <?php
        $id = $_GET['tailorId'];
        $sql = "SELECT * FROM `tailorregester` WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $title = $row['title'];
            $img= $row['file'];
        }
    ?>
    <!-- Item container starts here -->
    <div class="container my-3" id="cont">
        <div class="col-lg-4 text-center bg-light my-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">     
            <h2 class="text-center"><span id="catTitle">Items</span></h2>
        </div>
        <div class="row">
        <?php
            $id = $_GET['tailorId'];
            $sql = "SELECT * FROM `tailorpost` WHERE tailorId = $id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $postImag = $row['img'];
                $itemName = $row['name'];
                $itemPrice = $row['itemPrice'];
                $itemDesc = $row['title'];
                echo '<div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="./Tailorpanel/uploads/men.jpg" class="card-img-top" alt="image for this item" width="249px" height="270px">
                            <div class="card-body">
                                <h5 class="card-title">' . substr($itemName, 0, 20). '...</h5>
                                <h6 style="color: #ff0000">$. '.$itemPrice. '/-</h6>
                                <p class="card-text">' . substr($itemDesc, 0, 29). '...</p>
                                <div class="row justify-content-center">';
                                if($loggedin){
                                    $quaSql = "SELECT `itemQuantity` FROM `viewcart` WHERE itemId = '$itemId' AND `userId`='$userId'";
                                    $quaresult = mysqli_query($conn, $quaSql);
                                    $quaExistRows = mysqli_num_rows($quaresult);
                                    if($quaExistRows == 0) {
                                        echo '<form action="partials/_manageCart.php" method="POST">
                                              <input type="hidden" name="itemId" value="'.$itemId. '">
                                             ';
                                    }else {
                                        echo '<a href="viewCart.php"><button class="btn btn-primary mx-2">Go to Cart</button></a>';
                                    }
                                }
                                
                            echo '</form>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            if($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">Sorry this tailor is  No items available.</p>
                        <p class="lead"> We will update Soon.</p>
                    </div>
                </div> ';
            }
            ?>
        </div>
    </div>


    <?php require 'partials/_footer.php' ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script>
        document.getElementById("title").innerHTML = "<?php echo $catname; ?>";
        document.getElementById("catTitle").innerHTML = "<?php echo $catname; ?>";
    </script>
</body>
</html>