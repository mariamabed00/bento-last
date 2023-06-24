<?php
include ('connection.php'); ?>

<?php
if(!isset($SESSION)){
    session_start(); }
    
    if(isset($_POST['submit'])){
    $month = mysqli_real_escape_string($con, $_POST['month']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $number = md5($_POST['number']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $code = mysqli_real_escape_string($con, $_POST['code']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
  
    $sql="INSERT INTO premium (month,year,name,number,date,code,zip) VALUES ('$month','$year','$name','$number','$date','$code','$zip')";
    mysqli_query($con,$sql);
    $_SESSION['name']=$name;
    header('location:bentohome2.php');    
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Subscribe</title>
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
    <body class="signup-body">
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
            <section class="pricing-section">
              <div class="container">
                  <div class="outer-box">
                      <div class="row">
                          <div class="pricing-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                              <div class="inner-box">
                                  <div class="icon-box">
                                      <div class="icon-outer"></div>
                                  </div>
                                  <div class="price-box">
                                      <div class="title">Monthly Subscription</div>
                                      <h4 class="price">26 LE</h4>
                                  </div>
                                  <ul class="features">
                                    <li class="true">14-day free trial</li>
                                      <li class="true">Discover hundreds of meals</li>
                                      <li class="true">Access to weekly updated blog</li>
                                      <li class="true">Access to shop</li>
                                      <li class="true">Raise awareness</li>
                                  </ul>
                              </div>
                          </div>
                          <div class="pricing-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                              <div class="inner-box">
                                  <div class="icon-box">
                                      <div class="icon-outer"></div>
                                  </div>
                                  <div class="price-box">
                                      <div class="title">Yearly Subscription</div>
                                      <h4 class="text-muted price-dec">312 LE</h4>
                                      <h4 class="price">210 LE</h4>
                                  </div>
                                  <ul class="features">
                                      <li class="true">Save 102 LE + 14-day free trial</li>
                                      <li class="true">Discover hundreds of meals</li>
                                      <li class="true">Access to weekly updated blog</li>
                                      <li class="true">Access to shop</li>
                                      <li class="true">Raise awareness</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <div class="container col-sm">
            <div id="Checkout" class="inline">
            <div class="card-row">
                <span class="visa"></span>
                <span class="mastercard"></span>
            </div>
            <form class="payment-form" method="POST" action="subscribe.php">
             <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="period" id="flexRadioDefault1">
                  <label class="form-check-label mx-5" for="flexRadioDefault1">
                    Monthly subscription
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="period" id="flexRadioDefault2">
                  <label class="form-check-label mx-5" for="flexRadioDefault2">
                    Yearly Subscription
                  </label>
                </div>
              </div>
                <div class="form-group">
                    <label or="NameOnCard">Name on card</label>
                    <input id="NameOnCard" class="form-control" type="text" name="name" maxlength="255"></input>
                </div>
                <div class="form-group">
                    <label for="CreditCardNumber">Card number</label>
                    <input id="CreditCardNumber" class="null card-image form-control" name="number" type="text"></input>
                </div>
                <div class="expiry-date-group form-group">
                    <label for="ExpiryDate">Expiry date</label>
                    <input id="ExpiryDate" class="form-control" type="text"  name="date" placeholder="MM / YY" maxlength="7"></input>
                </div>
                <div class="security-code-group form-group">
                    <label for="SecurityCode">Security code</label>
                    <div class="input-container" >
                        <input id="SecurityCode" class="form-control"  name="code" type="text" ></input>
                        <i id="cvc" class="fa fa-question-circle"></i>
                    </div>
                    <div class="cvc-preview-container two-card hide">
                        <div class="amex-cvc-preview"></div>
                        <div class="visa-mc-dis-cvc-preview"></div>
                    </div>
                </div>
                <div class="zip-code-group form-group">
                    <label for="ZIPCode">ZIP/Postal code</label>
                    <div class="input-container">
                        <input id="ZIPCode" class="form-control" type="text" name="zip" maxlength="10"></input>
                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
                    </div>
                </div>
                <button id="PayButton" class="btn btn-block btn-success submit-button"  name="submit" type="submit">
                    <span class="align-middle">Confirm Payment</span>
                </button>
            </form>
        </div>
      </div>
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