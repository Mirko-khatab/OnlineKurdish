<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>About Us</title>
   <link rel = "icon" href ="img/sample_logo1.jpg" type = "image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 5px;   
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

  .a1{
      border: 10px solid darkgray;
      text-align: center;
      width: 80%;
      margin: auto;
      padding: 20px;
      background: lightgray;
  }

  .a2{
      text-align: center;
      width: 80%;
      margin: auto;
      padding: 5px;
  }

 .a3{
      text-align: left;
      padding: 10px;
      height: 300px;
      overflow: auto;
  }

</style>

  </head>

  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_nav.php';?>
  

  <section>       
  <div class="a1">
    <h2>About Us</h2>
      <p style="text-align: center;"> The aim of creating this website is to introduce Kurdish clothes to different nations and foreign countries and to keep Kurdish clothes alive anywhere in the world because culture is a part of individual identity, and They can get all the different styles of Kurdish clothes in the easiest way on their own will. We have been able to serve kurdish cultural clothes and respect our ancestors' traditions.
      </p>
  </div>
                            

  <div class="a2">
    <h2 class="">Who we are</h2>
    
    <div class="row">
      <div class="column">
      <div class="card">
      <img src="img\about\a.jpg" alt="Avatar" style="width:100%; height: 450px;">
      <h5><strong>Traditional Kurdish dress</strong></h5>
      <div class="a3">
      <p>The traditional Kurdish dresses for men, are for everyday wear and are not reserved only for holidays. They wear boots made of leather and sometimes as well sandals. The Kurdish costume was worn many days in the past. 
      </p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="img\about\b.jpg" alt="Avatar" style="width:100%; height: 450px;">
    <h5><strong>Costume pieces</strong></h5>
      <div class="a3">
      <p>Vest, long-sleeved jacket and overcoat: This is either made from a plain fabric, a velveteen fabric or a sequin covered fabric. Gown: This is usually the dazzling masterpiece of the outfit. Most commonly, Kurdish women wear a mesh fabric or a sheer fabric 
      </p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="img\about\c.png" alt="Avatar"  style="width:100%; height: 450px;">
    <h5><strong>Modern dress</strong></h5>
      <div class="a3">
      <p>The modern Kurdish woman's dress is not traditional. They tend to be fashionable amongst Kurdish community. Kurdish women and men have a large collection of Kurdish clothing and are always on the lookout for new designs and fabric.
      </p>
      </div>
      </div>
  </div>
  
  <div class="column">
     <div class="card">
    <img src="img\about\d.jpg" alt="Avatar"  style="width:100%; height: 450px;">
    <h5><strong>Types of clothing</strong></h5>
    <div class="a3">
      <p>Star Xani <br>
Kattafi<br>
Kawa u Salta<br>
Pishten, Puzawana, Kolwana, Klash <br>
Shalvar (wide trousers which close at the ankles closely)
</p>
   </div>
    </div>
  </div>


</div>
            

</section> 




  <?php include 'partials/_footer.php';?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

    


  </body>
</html>
