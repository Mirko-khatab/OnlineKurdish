<div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="reset" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(111 202 203);">
            <h5 class="modal-title" id="reset">reset password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action ="#" method="post">
              <div class="text-left my-2">
                  <b><label for="username">Username</label></b>
                  <input class="form-control" id="loginusername" name="loginusername" placeholder="Enter Your Username" type="text" required>
              </div>
              <div class="text-left my-2">
                  <b><label for="password">newPassord</label></b>
                  <input class="form-control" id="newPassword" name="newPassword" placeholder="New password" type="password" required data-toggle="password">
              </div>
                <div class="text-left my-2">
                  <b><label for="password">again Password</label></b>
                  <input class="form-control" id="againPassword" name="againPassword" placeholder="again your password" type="password" required data-toggle="password">
              </div>
              <input type="submit"  class="btn btn-success"/>
            </form>
          </div>
        </div>
      </div>
    </div>



    <?php

  include 'partials/_dbconnect.php';

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['loginusername'];
    $newPassword = $_POST['newPassword'];
    $againPassword = $_POST['againPassword'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      if($newPassword == $againPassword){
        $hash = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE `users` SET `password` = '$hash' WHERE `users`.`username` = '$username'";
        $result = mysqli_query($conn, $sql);
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your password has been reset successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      }
      else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Passwords do not match.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    }
    else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Invalid Username.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  }


  



    ?>
