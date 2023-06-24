<?php
include 'connection.php';
include 'logout.php';

if(!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
    <head>
      <title>Welcome to BENTO</title>
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
    <body>
        <div id="banner" class="img-fluid">   
        </div>
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
                <a class="nav-link text-danger" href="bentohome.html">Home<span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="account.php">Edit Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" name="logout" href="login.php">Log Out</a>
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
        <h2 class="bannerh2">Top Recipes of the Week</h2>

        <div class="container">  
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              
                <div class="carousel-inner">
                <div class="item active">
                  <img class="slider-img" src="slider.jpg" alt="" style="width:100%;">
                  <div class="slider-info">
                  <h5 class="course-type">Gluten Free</h5>
                  <h3>Greek Yoghurt Fruit Bowl</h3>
                <br>  
                </div>
                </div>
          
                <div class="item">
                  <img class="slider-img" src="slider-4.jpg" alt="" style="width:100%;">
                  <div class="slider-info">
                    <h5 class="course-type">Meat Free</h5>
                    <h3>Asian Style Noodles</h3>
                <br>    
                </div>
                </div>
              
                <div class="item">
                  <img class="slider-img" src="slider-2.jpg" alt="" style="width:100%;">
                  <div class="slider-info">
                    <h5 class="course-type">Free Lactose</h5>
                    <h3>Lemon Cake</h3>
                    <br>
                </div>
                </div>
              </div>
          
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <h2 class="bannerh2">Lactose Free Recipes</h2>

          <div id="recipespre">
            
            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="lf-1.jpeg" class="recipeimg img-fluid">
                <div class="recipe-info">
                <h5 class="course-type">Dessert</h5>
                <h3>Peanut Butter & Jelly Smoothie</h3>
                </div>
            </div></a>
            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="lf-2.jpeg" class="recipeimg img-fluid">
                <div class="recipe-info">
                <h5 class="course-type">Dessert</h5>
                <h3>Dairy Free Peanut Butter Oatmeal</h3>
                <p class="recipe-desc">Most popular</p>
                </div>
            </div>
            </a>
            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="lf-3.jpeg" class="recipeimg img-fluid">
                <div class="recipe-info">
                <h5 class="course-type">Lunch</h5>
                <h3>Chilled Avocado & Zucchini Soup</h3>
                
                </div>
            </div>
          </a>
            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="lf-4.jpeg" class="recipeimg img-fluid">
                <h5 class="course-type">Dessert</h5>
                <h3>Black Raspberry Ice Cream</h3>
            </div>
            </a>
          </div>
          <br><br>
          <h2 class="bannerh2">Gluten Free Recipes</h2>

          <div id="recipespre">
            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="gf-1.jpeg" class="recipeimg img-fluid">
                <div class="recipe-info">
                <h5 class="course-type">Homemade</h5>
                <h3>Pumpkin Spice Almond Butter</h3>
                <p class="recipe-desc">Trending this week</p>
                </div>
            </div></a>
            
            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="gf-2.jpeg" class="recipeimg img-fluid">
                <div class="recipe-info">
                <h5 class="course-type">Dessert</h5>
                <h3>Cranberry Orange Coffee Cake</h3>
                </div>
            </div>
            </a>

            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="gf-3.jpeg" class="recipeimg img-fluid">
                <div class="recipe-info">
                <h5 class="course-type">Dinner</h5>
                <h3>Cured Salmon Platter</h3>
                </div>
            </div>
            </a>

            <a href="recipes.php" class="recipe-links"><div class="recipepre"><img src="gf-4.jpeg" class="recipeimg img-fluid">
                <h5 class="course-type">Appetizer</h5>
                <h3>Gluten Free Popovers</h3>
            </div>
            </a>
          </div>

          <h2 class="bannerh2">The Latest on Our Blog</h2>

          <div id="blogpre">
                <div class="blog-pre1">
            <div id="blogtext1">
            <h3>Are Food Allergies in Children Preventable?</h3>
            <p><br>Research shows that 80% of food allergies in children could have been prevented … what does this mean and how can we use this information to help your child? Prevention is possible. Clinical studies show that up to 80% of peanut, egg, and milk allergies can be prevented.</p>
            <a href="https://theallergymom.com/are-food-allergies-in-children-preventable/" class="read-more">Read more</a>
        </div>
            <div id="blogimg1">
                <img src="blog-1.jpg">
            </div>
            </div>
            <br>

                <div class="blog-pre2">
                <div id="blogimg2">
                    <img src="blog-2.jpg">
                </div>
                <div id="blogtext2">
                    <h3>Going to the Movies: Lights, Camera … Allergies!</h3>
                    <p><br>Hiya! I took my 2 kids and one of my son’s friends to the movies on Saturday night -that’s right -one adult -3 kids…what could possibly go wrong? Allergies & Asthma at the Movies My daughter who is severely allergic to dairy, peanuts and tree nuts (anaphylactic) often gets snuffy […]</p>
                <a href="https://theallergymom.com/going-to-the-movies-lights-camera-allergies/" class="read-more">Read more</a>    
                </div>
                    </div>
        
          </div>

          <br><br>
          <h2 class="bannerh2">Shop allergens free products</h2>
          
          <div class="container d-flex justify-content-center mt-100">	
            <div class="row">

              <div class="col-md-3"> 
                <div class="product-wrapper mb-45 text-center"> 
                    <div class="product-img">
                        <a href="#" data-abc="true"> 
                        <img src="so.jpg" alt="" width="180px"></a>	
                        <span>50 EGP</span>
                    </div> 
                </div> 
                <div class="product-info">
                    <h3>Non-Dairy Strawberry Icecream</h3>
                    <p>So Delicious</p>
                </div>
            </div>
            
            <div class="col-md-3"> 
              <div class="product-wrapper mb-45 text-center"> 
                  <div class="product-img">
                      <a href="#" data-abc="true"> 
                          <img src="lamar1.png" alt="" width="180px">
                      </a>	
                  <span class="text-center">45 EGP</span>
                  </div>
              </div>
              <div class="product-info">
                  <h3>Lactose Free Milk</h3>
                  <p>Lamar</p>
              </div>
          </div>

          <div class="col-md-3"> 
            <div class="product-wrapper mb-45 text-center"> 
                <div class="product-img">
                    <a href="#" data-abc="true"> 
                        <img src="so5.png" alt="" width="180px">
                    </a>	
                <span class="text-center">45 EGP</span>
                </div>
            </div>
            <div class="product-info">
                <h3>Diary Free Soy Milk Vanilla Icecream</h3>
                <p>So Delicious</p>
            </div>
        </div>

        <div class="col-md-3"> 
          <div class="product-wrapper mb-45 text-center"> 
          <div class="product-img">
          <a href="#" data-abc="true"> 
          <img src="dia4.jpg" alt="" width="180px">
          </a>	
          <span class="text-center">450 EGP</span>
          </div>
          </div>
          <div class="product-info">
          <h3>Gluten & Dairy Free Alfredo Style Pasta</h3>
          <p>Daiya</p>
          </div>
          </div>
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
                <a href="recipes.php" class="footer-links">Recipes</a>
              </p>
              <p>
                <a href="blog.html" class="footer-links">Blog</a>
              </p>
              <p>
                <a href="shop.html" class="footer-links">Shop</a>
              </p>
              <p>
                <a href="hidden.html" class="footer-links">Hidden Allergens</a>
              </p>
            </div>
  
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold"> Contact Us</h6>
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
                 ><i class="fa-brands fa-instagram"></i></a>
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