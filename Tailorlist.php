<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./partials//Tailorcss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/db80ea6aaf.js" crossorigin="anonymous"></script>

    <!--====== TESTIMONIAL ONE PART START ======-->
</head>

<body>
    <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php

$query = mysqli_query($conn, "SELECT * FROM `Tailorregester` where accept=1 Limit 3 ");
//query to select only 3 rows from the bigenning of the table


while($row = mysqli_fetch_assoc($query)){?>
                        <div class="col">
                            <div class="area1 bg-danger p-3 py-5"> </div>
                            <div class="area2 p- text-center px-3">
                                <div class="image mr-3"> <img src="./Tailorpanel/uploads/<?php echo $row['file']; ?>"
                                        class="rounded-circle" width="100" />
                                    <a href="./Tailorpage.php?tailorId=<?php echo $row['id'] ?>" >
                                        <h4 class=" name mt-3 ">

                                            <?php echo $row['username']; ?>
                                        </h4>
                                    </a>
                                    <p class="information mt-3 text-justify">
                                        <?php echo $row['about']; ?>

                                    </p>
                                    <div class="d-flex justify-content-center mt-5">
                                        <ul class="list-icons">
                                            <a href="<?php echo $row['facebooklink']; ?>">
                                                <li class="facebook"> <i class="fa fa-facebook"></i></li>
                                            </a>
                                            <a href="<?php echo $row['instalink']; ?>">
                                                <li class="instagram"> <i class="fa fa-instagram"></i></li>
                                            </a>


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php } ?>


                    </div>

                </div>


                <div class="carousel-item">

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php

$query = mysqli_query($conn, "SELECT * FROM `Tailorregester` where accept=1 and id >3 Limit 3");



while($row = mysqli_fetch_assoc($query)){?>
                        <div class="col">
                            <div class="area1 bg-danger p-3 py-5"> </div>
                            <div class="area2 p- text-center px-3">
                                <div class="image mr-3">
                                     <img src="./Tailorpanel/uploads/<?php echo $row['file']; ?>"
                                        class="rounded-circle" width="100" />
                                    <h4 class=" name mt-3 "><?php echo $row['username']; ?></h4>
                                    <p class="information mt-3 text-justify">
                                        <?php echo $row['about']; ?>

                                    </p>
                                    <div class="d-flex justify-content-center mt-5">
                                        <ul class="list-icons">
                                            <a href="<?php echo $row['facebooklink']; ?>">
                                                <li class="facebook"> <i class="fa fa-facebook"></i></li>
                                            </a>
                                            <a href="<?php echo $row['instalink']; ?>">
                                                <li class="instagram"> <i class="fa fa-instagram"></i></li>
                                            </a>


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php } ?>


                    </div>

                </div>






            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
</body>

</html>