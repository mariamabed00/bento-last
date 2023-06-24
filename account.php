<?php 
   include ('connection.php') ; ?>

<?php
if(!isset($SESSION)){
  session_start(); }

  $id = mysqli_real_escape_string($con,$_SESSION['id']);


if(isset($_POST['submit'])){
  $conpass= mysqli_real_escape_string($con,$_POST['password']);


$oldpass=mysqli_real_escape_string($con,md5($_POST['oldpassword']));
$newpass=mysqli_real_escape_string($con,md5($_POST['newpassword']));
$confirmpass=mysqli_real_escape_string($con,md5($_POST['confirmpassword']));
if(!empty($oldpass) or !empty($newpass) or !empty($confirmpass)){
  if($newpass != $confirmpass){
    echo "<script>alert('confirm password Does not Match')</script>";
  }
  else{
    mysqli_query($con,"UPDATE users SET password ='$confirmpass' WHERE id='$id'" )or die('query failed');
    echo "<script>alert(' password updated successfully')</script>";
  }
}


}


?>

<!DOCTYPE html>
<html>
<head>
      <title>Edit Account</title>
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
    <body class="account-edit">
        <div id="banner">   
        </div>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid navbar-a">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a href="#"><img src="logo-pink.png" width="60px"></a>
                    </li>
                <li class="nav-item">
                  <a class="nav-link" href="bentohome.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="recipes.php">Recipes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="shop.html">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="hidden.html">Hidden Allergens</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-danger" href="account.html">Edit Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="bentohome.html">Log Out</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="submit.html">Submit Recipe</a>
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
          </div>
        </nav>

          <div class="container my-5">
            <div class="row flex-lg-nowrap">
              <div class="col">
                <div class="row">
                  <div class="col mb-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="e-profile">
                          <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                          </ul>
                          <br>
                          <div class="tab-content pt-3">
                            <div class="tab-pane active">
                              <form class="form" novalidate="">
                                <div class="row">
                                  <div class="col">
                                    <div class="row">
                                      <div class="col">
                                        <div class="form-group">
                                            <div class="mb-2"><b class="display-6">Edit personal info</b></div><br>
                                            <?php
                                            $select = mysqli_query($con,"SELECT * FROM users WHERE id ='$id'")or die('query failed');
                                            if(mysqli_num_rows($select)>0){
                                              $fetch=mysqli_fetch_assoc($select);
                                            
                                           ?>
                                          <label>Name</label>
                                          <input class="form-control" type="text" name="name" value="<?php echo $fetch['username'];?>" placeholder=" ">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <div class="form-group">
                                          <label>Email</label>
                                          <input class="form-control" type="text" value="<?php echo $fetch['email'];?>" placeholder="user@example.com">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                          <div class="form-group">
                                            <label>Age</label>
                                            <input class="form-control" type="number" value="<?php echo $fetch['age'];?>" placeholder="In years">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col">
                                          <div class="form-group">
                                            <label for="continent" id="continent1">Continent/Reigon </label>
                                                <select class="form-control" id="continent" name="continent" value="<?php echo $fetch['continent'];?>">
                                                    <option value="AF">Africa</option>
                                                    <option value="AS">Asia</option>
                                                    <option value="EU">Europe</option>
                                                    <option value="OC">Australia</option>
                                                    <option value="NA">North America</option>
                                                    <option value="SA">South America</option>
                                                </select>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-12 col-sm-6 mb-3">
                                    <br><br>
                                    <div class="mb-2"><b class="display-6">Change Password</b></div><br>
                                    <div class="row">
                                      <div class="col">
                                        <div class="form-group">
                                          <label>Current Password</label>
                                          <input class="form-control" type="password" name="oldpassword" value="<?php echo $fetch['password'];?>" placeholder="••••••">
                                        </div>
                                     <?php } ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <div class="form-group">
                                          <label>New Password</label>
                                          <input class="form-control" type="password" name="newpassword" placeholder="••••••">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <div class="form-group">
                                          <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                          <input class="form-control" type="password" name="confirmpassword" placeholder="••••••"></div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                <div class="row">
                                  <div class="col d-flex justify-content-end">
                                    <button class="btn2" type="submit" name="submit">Save Changes</button>
                                  </div>
                                </div>
                              </form>
            
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            
                  <div class="col-12 col-md-3 mb-3">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="px-xl-3">
                          <button class="btn2 btn-block">
                            <i class="fa fa-sign-out"></i>
                            <span>Log Out</span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title font-weight-bold">Support</h6>
                        <p class="card-text">Get fast, free help from our friendly assistants.</p>
                        <button type="button" class="btn2"><a href="contact.html" class="text-white contact-a">Contact Us</a></button><br>
                      </div>
                    </div>
                  </div>
                </div>
            
              </div>
            </div>
            </div>

            <footer class="text-center text-lg-start text-white mt-0">
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