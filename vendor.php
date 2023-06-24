<?php
include ('connection.php'); ?>

<?php 
if(!isset($SESSION)){
  session_start(); }

if(isset($_POST['submit']))
{
  $companyname = mysqli_real_escape_string($con, $_POST['companyname']);
  $producttype = mysqli_real_escape_string($con, $_POST['producttype']);
  $website = mysqli_real_escape_string($con, $_POST['website']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $contactrole = mysqli_real_escape_string($con, $_POST['contactrole']);

  $sql = "INSERT INTO vendor (companyname,producttype,website,address,fullname,phone,email,contactrole) VALUES('$companyname','$producttype','$website','$address','$fullname','$phone','$email','$contactrole')";
  mysqli_query($con,$sql);
  $_SESSION['name']=$companyname;
  header('location:confirmed.html');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Join as a Vendor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styling.css">
        <link rel=”stylesheet” href=”css/bootstrap.css”>
        <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
        <link rel="stylesheet" href="./css/bootstrap.css">
	      <script src="./js/jquery-3.6.0.js"></script>
        <script src="./js/bootstrap.js"></script>
       <script src="./js/java.js"></script>
        <script src="https://kit.fontawesome.com/aa3edc3ef9.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
          </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="vendor-body">
    <nav class="navbar navbar-expand-lg py-3">
          <li class="nav-item">
            <img src="logo-pink.png" width="60px">
          </li>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-light p-4"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="bentohome.html">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Recipes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Hidden Allergens</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="submit.php">Submit Recipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
            </ul>
          </div>
        </nav>
          <p class="bento-logo">BENTO</p>
        <section class="vh-100 bg-image form-section">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container-form h-100">
      <div class="row d-flex justify-content-center align-items-center h-100" id="form-items">
        <div class="col-12 col-md-9 col-lg-7 col-xl -6" id="form-items-child">
          <div class="card">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Join BENTO as Vendor</h2>
              <form class="signup-form" method="POST" action="vendor.php">
                <div class="form-outline mb-4">
                    <label class="form-label" for="companyname">Company Name</label>
                      <input type="text" id="companyname" name="companyname" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                        <label for="product-type" class="form-label" name="producttype">Products Type</label>
                    <select id="product-type" name="producttype" class="form-control form-control-lg">
                        <option>Gluten Free</option>
                        <option>Lactose Free</option>
                        <option>Meat Alternatives/Plant Based</option>
                        <option>Dairy Alternatives</option>
                        <option>Other</option>
                      </select>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="website">Website</label>
                      <input type="url" id="website" name="website" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="address">Address</label>
                          <input type="text" id="address" name="address" class="form-control form-control-lg" />
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13817.022825606782!2d31.43547194960938!3d30.029521074819375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1685218778070!5m2!1sen!2seg" width="440" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="col-md"></iframe>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="fullname">Full Name</label>
                              <input type="text" id="fullname"  name="fullname "class="form-control form-control-lg" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="phone-no">Mobile Phone Number</label>
                              <input type="number" id="phone-no" name="phone" class="form-control form-control-lg" placeholder="+201XXXXXXXXX" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email</label>
                              <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            </div>
                            <div class="form-outline mb-4">
                                <label for="contact-role" class="form-label">Contact Role</label>
                            <select id="contact-role" name="contactrole" class="form-control form-control-lg">
                                <option>Owner</option>
                                <option>Co-Owner</option>
                                <option>Manager</option>
                                <option>Employee</option>
                                <option>Other</option>
                              </select>
                        </div>
                <div class="form-check d-flex mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg"/>
                  <label class="form-check-label px-5" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body terms">Terms of service</a>
                  </label><br>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="signup-btn">Submit Info</button><br>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            <footer class="text-center text-lg-start text-white">
                <div class="container p-4 pb-0">
                  <section class="">
                    <div class="row">
                      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 vision">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                          BENTO
                        </h6>
                        <p>
                          We want to be global to help all the people struggling, regardless of anything.
                        </p>
          
                        <p>Download our mobile app</p>
                        <a class="download-app">
                          <img src="googleplay.svg" alt="Google Play">
                        </a><br><br>
                        <a class="download-app">
                          <img src="appstore.svg" alt="App Store">
                        </a>
                      </div>
            
                      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
                        <p>
                          <a class="footer-links">Recipes</a>
                        </p>
                        <p>
                          <a class="footer-links">Blog</a>
                        </p>
                        <p>
                          <a class="footer-links">Shop</a>
                        </p>
                        <p>
                          <a class="footer-links">Hidden Allergens</a>
                        </p>
                      </div>
            
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-home mr-3"></i> Zahraa Madinet Nasr, Cairo, Egypt</p>
                        <p><i class="fas fa-envelope mr-3"></i>  bento.webapp@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +20 0111 255 2668</p>
                      </div>
            
                      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
          
                        <a class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #3b5998; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-facebook-f"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #55acee; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-twitter"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #ac2bac; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-instagram"></i
                          ></a>
                      </div>
                    </div>
                  </section>
                </div>
                <br>
                <div class="text-center p-3">
                  © 2020 Copyright:
                  <a class="text-white footer-links" href="https://bento.com/">bento.com</a>
                </div>
              </footer>

    </body>
    </html>