<?php
include 'modal1.php'; ?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <title>Tailor Style</title>



    <style>
    /* Coding With Nick */

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        line-height: 1.15;
    }

    body {
        font-family: 'roboto', sans-serif;
        color: #454545;
        font-weight: 400;
        background: #ffffff;
    }

    a {
        color: #333333;
        font-weight: 400;
        outline: none;
        text-decoration: none;
        transition: 0.5s;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .column {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .section-title {
        position: relative;
        width: 100%;
        text-align: center;
        padding: 45px 0 30px 0;
    }

    .section-title::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 1px;
        left: 0;
        background: #eeeeee;
    }


    .effect {
        position: relative;
        margin-bottom: 30px;
        overflow: hidden;
    }

    .effect .effect-img {
        font-size: 0;
        overflow: hidden;
    }

    .effect .effect-img img {
        width: 100%;
        height: auto;
        transition: all .3s;
    }

    .effect:hover .effect-img img {
        transform: scale(1.2);
    }

    .effect .effect-text {
        position: absolute;
        top: 15px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: rgba(0, 0, 0, .5);
        overflow: hidden;
        transition: all .3s ease-in;
        opacity: 0;
    }

    .effect .effect-text .inner {
        position: absolute;
        padding: 15px;
        z-index: 1;
    }

    .effect .effect-text:before,
    .effect .effect-text:after {
        position: absolute;
        display: block;
        width: 100%;
        height: 0;
        content: '';
    }

    .effect .effect-text:before {
        border-top: 3px solid #ffffff;
        border-right: 3px solid #ffffff;
        left: -100%;
        top: 0;
    }

    .effect .effect-text:after {
        border-bottom: 3px solid #ffffff;
        border-left: 3px solid #ffffff;
        left: 100%;
        bottom: 0;
    }

    .effect:hover .effect-text {
        opacity: 1;
    }

    .effect:hover .effect-text:after,
    .effect:hover .effect-text:before {
        animation-delay: .1s;
        animation-duration: .5s;
        animation-iteration-count: 1;
        animation-timing-function: ease-in-out;
        animation-fill-mode: forwards;
    }

    .effect:hover .effect-text:after {
        animation-name: left-up;
    }

    .effect:hover .effect-text:before {
        animation-name: right-dn;
    }

    @-webkit-keyframes left-up {
        0% {
            left: 100%;
            height: 0;
        }

        50% {
            left: 0;
            height: 0;
        }

        100% {
            height: 100%;
            left: 0;
        }
    }

    @-webkit-keyframes right-dn {
        0% {
            left: -100%;
            height: 0;
        }

        50% {
            left: 0;
            height: 0;
        }

        100% {
            height: 100%;
            left: 0;
        }
    }

    .effect .effect-text h2 {
        height: 45px;
        color: #ffffff;
        font-size: 25px;
        margin: 0;
    }

    .effect .effect-text p {
        color: #ffffff;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .effect .effect-btn .btn {
        display: inline-block;
        height: 35px;
        padding: 7px 15px;
        color: #333333;
        background: #ffffff;
    }


    @media (min-width:576px) {
        .container {
            max-width: 540px;
        }

        .column {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }

        .column {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }


    @media (min-width:992px) {
        .container {
            max-width: 960px;
        }

        .column {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1140px;
        }

    }

    h4 {
        text-align: center;
        color: dimgray;
    }
    </style>

</head>

<body>



    <?php
  error_reporting(E_ERROR | E_PARSE);
  include 'partials/_dbconnect.php';
  ?>
    <?php include 'partials/Tailornav.php'; ?>


    <div class="container">
        <div class="section-title">
            <h1>Tilor Style Kurdish Clothes</h1>
        </div>
        <h4>Women Style</h4>
        <hr>


        <div class="row">

            <div class="column">

                <div class="effect">
                    <div class="effect-img">
                        <img src="img/t1.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="px-3 inner">
                            <div class="image mr-3"> <img src="https://i.imgur.com/ZSkeqnd.jpg" class="rounded-circle"
                                    width="100" />
                                <h4 class=" name mt-3" style="color: white;">lanya burhan</h4>
                                <p style="color: white;">

                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quasi voluptates
                                    nulla culpa vero maiores doloremque, recusandae esse! Dolore odio quia ullam
                                    laudantium
                                    commodi optio eos sequi ab impedit quibusdam?
                                </p>
                                <div class="effect-btn">
                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#m1">Order

                                        Style</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>




            <br><br>
            <div class="section-title">
                <h4>Men Style</h4>
            </div>

            <hr>

            <div class="column">

                <div class="effect">
                    <div class="effect-img">
                        <img src="img/t1.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="px-3 inner">
                            <div class="image mr-3"> <img src="https://i.imgur.com/ZSkeqnd.jpg" class="rounded-circle"
                                    width="100" />
                                <h4 class=" name mt-3" style="color: white;">lanya burhan</h4>
                                <p style="color: white;">

                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quasi voluptates
                                    nulla culpa vero maiores doloremque, recusandae esse! Dolore odio quia ullam
                                    laudantium
                                    commodi optio eos sequi ab impedit quibusdam?
                                </p>
                                <div class="effect-btn">
                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#m1">Order

                                        Style</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
    <?php include './Tailorlist.php'; ?>
    <?php include './tobeTailor.php'; ?>
    <?php include './partials/_footer.php'; ?>
    <!-- Message Modal -->


    <!-- history Modal -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>

</html>