  <!-- Sign up Modal -->
  <div class="modal fade" id="TailorSignupmodule" tabindex="-1" role="dialog" aria-labelledby="TailorSignupmodule"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header" style="background-color: rgb(111 202 203);">
                  <h5 class="modal-title" id="TailorSignupmodule">TailorRegester</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="partials/_handlerTailorsignup.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <b><label for="username">Username</label></b>
                          <input class="form-control" id="username" name="username"
                              placeholder="Choose a unique Username" type="text" required minlength="3" maxlength="11">
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <b><label for="firstName">First Name:</label></b>
                              <input type="text" class="form-control" id="firstName" name="firstName"
                                  placeholder="First Name" required>
                          </div>
                          <div class="form-group col-md-6">
                              <b><label for="lastName">Last name:</label></b>
                              <input type="text" class="form-control" id="lastName" name="lastName"
                                  placeholder="Last name" required>
                          </div>
                      </div>

                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="mail">
                          <label class="form-check-label" for="flexRadioDefault1">
                              mail
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2"
                              value="female" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                              female
                          </label>
                      </div>
                      <div class="form-group">
                          <b><label for="email">Email:</label></b>
                          <input type="email" class="form-control" id="email" name="email"
                              placeholder="Enter Your Email" required>
                      </div>
                      <div class="form-group">
                          <b><label for="phone">Phone No:</label></b>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon">+964</span>
                              </div>
                              <input type="tel" class="form-control" id="phone" name="phone"
                                  placeholder="Enter Your Phone Number" required pattern="[0-9]{10}" maxlength="10">
                          </div>
                      </div>

                      <div class="text-left my-2">
                          <b><label for="file">img:</label></b>
                          <input class="form-control" name="file" id="file" type='file'>
                      </div>
                      <div class="text-left my-2">
                          <b><label for="facebook">Facebook:</label></b>
                          <input class="form-control" id="facebook" name="facebook" placeholder="Faceebook url"
                              type="text">
                      </div>
                      <div class="text-left my-2">
                          <b><label for="insta">instagram:</label></b>
                          <input class="form-control" id="insta" name="insta" placeholder="instagram url" type="Text">
                      </div>

                      <div class=" text-left my-2">
                          <b><label for="password">Password:</label></b>
                          <input class="form-control" id="password" name="password" placeholder="Enter Password"
                              type="password" required data-toggle="password" minlength="4" maxlength="21">
                      </div>
                      <div class="text-left my-2">
                          <b><label for="password1">Renter Password:</label></b>
                          <input class="form-control" id="cpassword" name="cpassword" placeholder="Renter Password"
                              type="password" required data-toggle="password" minlength="4" maxlength="21">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">About</label>
                          <textarea class="form-control" name="about" placeholder="About your selfe"
                              id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <button type="submit" class="btn btn-success">Submit</button>
                  </form>
       
              </div>
          </div>
      </div>
  </div>