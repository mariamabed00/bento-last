<?php 
   include ('connection.php'); 
   
   if(!isset($_SESSION)) {
    session_start();
}?>

<!DOCTYPE html>
<html>
<head>
        <title>Recipes</title>
        <meta charset="UTF-8">
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
        <div id="banner">   
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
                <a class="nav-link" href="bentohome.html">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="recipes.php">Recipes</a>
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
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log Out</a>
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

          <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="side-bar-cont col-auto col-xl-2 px-0">
                    <div class="sticky-top side-bar d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline"></span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0" onclick="openTab('lactosefree', this)">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline">Lactose Free</span>
                                </a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link align-middle px-0" onclick="openTab('glutenfree', this)">
                                  <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline">Gluten Free</span>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0" onclick="openTab('eggsfree', this)">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline">Eggs Free</span>
                            </a>
                        </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link align-middle px-0" onclick="openTab('nutsfree', this)">
                                  <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline">Nuts Free</span>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0" onclick="openTab('meatfree', this)">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline">Meat Free</span>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link align-middle px-0" onclick="openTab('soyfree', this)">
                              <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline">Soy Free</span>
                          </a>
                      </li>
 <!---------------------------------------------SEARCH BAR---------------------------------------------------------------------------------->
                      <li class="nav-item">
                        <form method="GET" action="recipes.php">
                        <div class="search-box-side">
                            <input class="search-input" name="search" type="text" placeholder="Search" required value="<?php if (isset($_GET['search'])){echo $_GET['search'];}?>">
                            <button class="search-btn" type="submit" name="search" ><i class="fas fa-search"></i></button>
                        </div></form>
                         <?php
                         if(isset($_GET['search']))
                         {
                          $filtervalues=$_GET['search'];
                          $query="SELECT * FROM recipes WHERE name LIKE '%$filtervalues%' ";
                          $query_run=mysqli_query($con,$query);
                         }
            ?>
                        </li>
                        </ul>                        
                    </div>
                </div>
                <!---lactose free --->
                <div class="col py-3">
                    <div class="navcontent" id="lactosefree">
                    <div id="accordion">                 
                      <!---1st recipe--->
                      <?php 
                      $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=6");
                      while($row = mysqli_fetch_assoc($query))
                      {
            ?>
                        <div class=" recipe-card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <img src= "recipesimg/<?php echo $row["image"];?>" width="300px" class="d-inline img-fluid">
                              <button class="btn3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="recipe-link">
                                    <h3><?php echo $row["name"];?></h3>
                                    </div>
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                               <?php echo $row["description"]; ?> <?php } ?>
                            </div>
                          </div>
                        </div>
                      
                        <!---2nd recipe--->
                        <?php
                         $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=7");
                         while($row = mysqli_fetch_assoc($query))
                         {
                        ?> 
                        <div class="card recipe-card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                  <img src="recipesimg/<?php echo $row["image"];?>" width="300px" class="d-inline img-fluid">
                                <button class="btn3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                  <div class="recipe-link">
                                       
                                      <h3><?php echo $row["name"];?> </h3>
                                      </div>
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                              <?php echo $row["description"]; ?> <?php } ?>
                                </div>
                            </div>
                          </div>
                          <!---3rd recipe--->
                          <?php
                         $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=8");
                         while($row = mysqli_fetch_assoc($query))
                         {
                         ?>
                          <div class="card recipe-card">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                  <img src="recipesimg/<?php echo $row["image"];?>"   square width="300px" class="d-inline img-fluid">
                                <button class="btn3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                  <div class="recipe-link">
                                      <h3> <?php echo $row["name"];?> </h3>
                                      </div>
                                </button>
                              </h5>
                            </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body"> 
                              <?php echo $row["description"]; ?> <?php } ?> 
                              </div>
                            </div>
                          </div>

                          <!---4th recipe---->
                          <?php
                          $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=9");
                          while($row = mysqli_fetch_assoc($query))
                          {
                          ?>
                          <div class="card recipe-card">
                            <div class="card-header" id="headingFour">
                              <h5 class="mb-0">
                                  <img src="recipesimg/<?php echo $row["image"];?>" width="300px" class="d-inline img-fluid">
                                <button class="btn3" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                  <div class="recipe-link">
                                      <h3><?php echo $row["name"];?> </h3>
                                      </div>
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                              <div class="card-body">
                              <?php echo $row["description"]; ?> <?php } ?>
                            </div>
                            </div>
                          </div>

                          <!---5th recipe--->
                          <?php
                          $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=15");
                          while($row = mysqli_fetch_assoc($query))
                          {
                          ?>
                          <div class="card recipe-card">
                            <div class="card-header" id="headingFive">
                              <h5 class="mb-0">
                                  <img src="recipesimg/<?php echo $row["image"];?>" width="300px"   class="d-inline  img-fluid">
                                <button class="btn3" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                  <div class="recipe-link">
                                       
                                      <h3><?php echo $row["name"];?></h3>
                                      </div>
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                              <div class="card-body">
                              <?php echo $row ["description"]; ?> <?php } ?>
                             <br>  <br>  <br>  <br>  <br> 
                                  </div>
                            </div>
                          </div>
                      </div>
                      </div>
                       <!---glutenfree--->
                      <div class="navcontent" id="glutenfree">
                        <div id="accordion">
                          <!---1st gluten / 6th recipe --->
                          <?php
                          $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=1");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                            <div class=" recipe-card">
                              <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                  <button class="btn3" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <div class="recipe-link">
                                         
                                        <h3><?php echo $row["name"];?></h3>
                                        </div>
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class=" card-body">
                                <?php echo $row["description"];?> <?php } ?>
                                <br><br><br><br><br><br><br><br>
                                </div>
                              </div>
                            </div>
                            <!---7th recipe--->
                            <?php
                          $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=2");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                            <div class="card recipe-card">
                                <div class="card-header" id="headingSeven">
                                  <h5 class="mb-0">
                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                    <button class="btn3" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                      <div class="recipe-link">
                                           
                                          <h3><?php echo $row["name"];?></h3>
                                          </div>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                  <div class="card-body">
                                  <?php echo $row["description"];?> <?php } ?> 
                                  </div>
                                </div>
                              </div>
                              <!---8th recipe--->
                              <?php $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=3");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                              <div class="card recipe-card">
                                <div class="card-header" id="headingEight">
                                  <h5 class="mb-0">
                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                    <button class="btn3" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                      <div class="recipe-link">
                                           
                                          <h3><?php echo $row["name"];?></h3>
                                          </div>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                  <div class="card-body">
                                  <?php echo $row["description"];?> <?php } ?>
                                  </div>
                                </div>
                              </div>
                              <!---9th recipe--->
                              <?php $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=4");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                              <div class="card recipe-card">
                                <div class="card-header" id="headingNine">
                                  <h5 class="mb-0">
                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                    <button class="btn3" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                      <div class="recipe-link">
                                           
                                          <h3><?php echo $row["name"];?></h3>
                                          </div>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                  <div class="card-body">
                                  <?php echo $row["description"];?> <?php } ?>
                                      </div>
                                </div>
                              </div>
                              <!---10th recipe--->
                              <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=5");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                              <div class="card recipe-card">
                                <div class="card-header" id="headingTen">
                                  <h5 class="mb-0">
                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                    <button class="btn3" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                      <div class="recipe-link">
                                           
                                          <h3><?php echo $row["name"];?></h3>
                                          </div>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                  <div class="card-body">
                                  <?php echo $row["description"];?> <?php } ?>
                                    </div>
                                </div>
                              </div>
                          </div>
                          </div>
                          <!---eggfree--->
                          <div class="navcontent" id="eggsfree">
                            <div id="accordion">
                              <!---1st egg/11th recipe--->
                              <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=16");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                <div class=" recipe-card">
                                  <div class="card-header" id="heading11">
                                    <h5 class="mb-0">
                                        <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                      <button class="btn3" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                        <div class="recipe-link">
                                             
                                            <h3><?php echo $row["name"];?></h3>
                                            </div>
                                      </button>
                                    </h5>
                                  </div>
                              
                                  <div id="collapse11" class="collapse show" aria-labelledby="heading11" data-parent="#accordion">
                                    <div class="card-body">
                                    <?php echo $row["description"];?> <?php } ?>
                                        
                                    </div>
                                  </div>
                                </div>
                                <!---12th recipe--->
                                <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=17");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                <div class="card recipe-card">
                                    <div class="card-header" id="heading12">
                                      <h5 class="mb-0">
                                          <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                        <button class="btn3" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                          <div class="recipe-link">
                                               
                                              <h3><?php echo $row["name"];?></h3>
                                              </div>
                                        </button>
                                      </h5>
                                    </div>
                                
                                    <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
                                      <div class="card-body">
                                      <?php echo $row["description"];?> <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                  <!---13th recipe--->
                                  <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=18");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                  <div class="card recipe-card">
                                    <div class="card-header" id="heading13">
                                      <h5 class="mb-0">
                                          <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                        <button class="btn3" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                          <div class="recipe-link">
                                               
                                              <h3><?php echo $row["name"];?></h3>
                                              </div>
                                        </button>
                                      </h5>
                                    </div>
                                
                                    <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
                                      <div class="card-body">
                                      <?php echo $row["description"];?> <?php } ?>
                                          
                                      </div>
                                    </div>
                                  </div>
                                  <!---14th recipe--->
                                  <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=19");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                  <div class="card recipe-card">
                                    <div class="card-header" id="heading14">
                                      <h5 class="mb-0">
                                          <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                        <button class="btn3" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                          <div class="recipe-link">
                                               
                                              <h3><?php echo $row["name"];?></h3>
                                              </div>
                                        </button>
                                      </h5>
                                    </div>
                                
                                    <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
                                      <div class="card-body">
                                      <?php echo $row["description"];?> <?php } ?>
                                          
                                      </div>
                                    </div>
                                  </div>
                                  <!---15th recipe--->
                                  <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=20");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                  <div class="card recipe-card">
                                    <div class="card-header" id="heading15">
                                      <h5 class="mb-0">
                                          <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                        <button class="btn3" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                          <div class="recipe-link">
                                               
                                              <h3><?php echo $row["name"];?></h3>
                                              </div>
                                        </button>
                                      </h5>
                                    </div>
                                
                                    <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
                                      <div class="card-body">
                                      <?php echo $row["description"];?> <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              </div>
                              <!---nutsfree/16th recipe--->
                              <div class="navcontent" id="nutsfree">
                                <div id="accordion">
                                <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=22");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                    <div class=" recipe-card">
                                      <div class="card-header" id="heading16">
                                        <h5 class="mb-0">
                                            <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                          <button class="btn3" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                            <div class="recipe-link">
                                                 
                                                <h3><?php echo $row["name"];?></h3>
                                                </div>
                                          </button>
                                        </h5>
                                      </div>
                                  
                                      <div id="collapse16" class="collapse show" aria-labelledby="heading16" data-parent="#accordion">
                                        <div class="card-body">
                                        <?php echo $row["description"];?> <?php } ?>
                                        </div>
                                      </div>
                                    </div>
                                    <!---17th recipe--->
                                    <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=23");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                    <div class="card recipe-card">
                                        <div class="card-header" id="heading17">
                                          <h5 class="mb-0">
                                              <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                            <button class="btn3" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                              <div class="recipe-link">
                                                   
                                                  <h3><?php echo $row["name"];?></h3>
                                                  </div>
                                            </button>
                                          </h5>
                                        </div>
                        
                                      <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
                                          <div class="card-body">
                                          <?php echo $row["description"];?> <?php } ?>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card recipe-card">
                                        <!---18th recipe--->
                                        <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=24");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                        <div class="card-header" id="heading18">
                                          <h5 class="mb-0">
                                              <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                            <button class="btn3" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                              <div class="recipe-link">
                                                   
                                                  <h3><?php echo $row["name"];?></h3>
                                                  </div>
                                            </button>
                                          </h5>
                                        </div>
                                    
                                        <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
                                          <div class="card-body">
                                          <?php echo $row["description"];?> <?php } ?>
                                          </div>
                                        </div>
                                      </div>
                                      <!---19th recipe--->
                                      <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=25");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                      <div class="card recipe-card">
                                        <div class="card-header" id="heading19">
                                          <h5 class="mb-0">
                                              <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                            <button class="btn3" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                              <div class="recipe-link">
                                                   
                                                  <h3><?php echo $row["name"];?></h3>
                                                  </div>
                                            </button>
                                          </h5>
                                        </div>
                                    
                                    
                                        <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
                                          <div class="card-body">
                                          <?php echo $row["description"];?> <?php } ?>
                                          </div>
                                        </div>
                                      </div>
                                      <!---20th recipe--->
                                      <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=26");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                      <div class="card recipe-card">
                                        <div class="card-header" id="heading20">
                                          <h5 class="mb-0">
                                              <img src= "recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                            <button class="btn3" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                              <div class="recipe-link">
                                                   
                                                  <h3><?php echo $row["name"];?></h3>
                                                  </div>
                                            </button>
                                          </h5>
                                        </div>
                                    
                                        <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordion">
                                          <div class="card-body">
                                          <?php echo $row["description"];?> <?php } ?>
                                              
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                  <!---meatfree/21th recipe--->
                                  <div class="navcontent" id="meatfree">
                                    <div id="accordion">
                                    <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=10");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                        <div class=" recipe-card">
                                          <div class="card-header" id="heading21">
                                            <h5 class="mb-0">
                                                <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                              <button class="btn3" data-toggle="collapse" data-target="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                                <div class="recipe-link">
                                                     
                                                    <h3><?php echo $row["name"];?> </h3>
                                                    </div>
                                              </button>
                                            </h5>
                                          </div>
                                      
                                          <div id="collapse21" class="collapse show" aria-labelledby="heading21" data-parent="#accordion">
                                            <div class="card-body">
                                            <?php echo $row["description"];?> <?php } ?>
                                                
                                            </div>
                                          </div>
                                        </div>
                                        <!---22th recipe--->
                                        <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=11");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                        <div class="card recipe-card">
                                            <div class="card-header" id="heading22">
                                              <h5 class="mb-0">
                                                  <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                <button class="btn3" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                                  <div class="recipe-link">
                                                       
                                                      <h3><?php echo $row["name"];?> </h3>
                                                      </div>
                                                </button>
                                              </h5>
                                            </div>
                                        
                                            <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordion">
                                              <div class="card-body">
                                              <?php echo $row["description"];?> <?php } ?> 
                                              </div>
                                            </div>
                                          </div>
                                          <!---23th recipe--->
                                          <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=12");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                          <div class="card recipe-card">
                                            <div class="card-header" id="heading23">
                                              <h5 class="mb-0">
                                                  <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                <button class="btn3" data-toggle="collapse" data-target="#collapse23" aria-expanded="true" aria-controls="collapse23">
                                                  <div class="recipe-link">
                                                       
                                                      <h3><?php echo $row["name"];?></h3>
                                                      </div>
                                                </button>
                                              </h5>
                                            </div>
                                        
                                            <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordion">
                                              <div class="card-body">
                                              <?php echo $row["description"];?> <?php } ?>
                                              </div>
                                            </div>
                                          </div>
                                          <!---24th recipe--->
                                          <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=13");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                          <div class="card recipe-card">
                                            <div class="card-header" id="heading24">
                                              <h5 class="mb-0">
                                                  <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                <button class="btn3" data-toggle="collapse" data-target="#collapse24" aria-expanded="true" aria-controls="collapse24">
                                                  <div class="recipe-link">
                                                       
                                                      <h3><?php echo $row["name"];?></h3>
                                                      </div>
                                                </button>
                                              </h5>
                                            </div>
                                        
                                            <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordion">
                                              <div class="card-body">
                                              <?php echo $row["description"];?> <?php } ?>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card recipe-card">
                                            <!---25th recipe--->
                                            <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=14");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                            <div class="card-header" id="heading25">
                                              <h5 class="mb-0">
                                                  <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                <button class="btn3" data-toggle="collapse" data-target="#collapse25" aria-expanded="true" aria-controls="collapse25">
                                                  <div class="recipe-link">
                                                       
                                                      <h3><?php echo $row["name"];?></h3>
                                                      </div>
                                                </button>
                                              </h5>
                                            </div>
                                        
                                            <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordion">
                                              <div class="card-body">
                                              <?php echo $row["description"];?> <?php } ?>
                                                  </div>
                                            </div>
                                          </div>
                                      </div>
                                      </div>
                                      <!---soyfree/26th recipe--->
                                      <div class="navcontent" id="soyfree">
                                        <div id="accordion">
                                        <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=27");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                            <div class=" recipe-card">
                                              <div class="card-header" id="heading26">
                                                <h5 class="mb-0">
                                                    <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                  <button class="btn3" data-toggle="collapse" data-target="#collapse26" aria-expanded="true" aria-controls="collapse26">
                                                    <div class="recipe-link">
                                                         
                                                        <h3><?php echo $row["name"];?></h3>
                                                        </div>
                                                  </button>
                                                </h5>
                                              </div>
                                          
                                              <div id="collapse26" class="collapse show" aria-labelledby="heading26" data-parent="#accordion">
                                                <div class="card-body">
                                                <?php echo $row["description"];?> <?php } ?>
                                                </div>
                                              </div>
                                            </div>
                                            <!---27th recipe--->
                                            <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=28");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                            <div class="card recipe-card">
                                                <div class="card-header" id="heading27">
                                                  <h5 class="mb-0">
                                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                    <button class="btn3" data-toggle="collapse" data-target="#collapse27" aria-expanded="true" aria-controls="collapse27">
                                                      <div class="recipe-link">
                                                           
                                                          <h3><?php echo $row["name"];?></h3>
                                                          </div>
                                                    </button>
                                                  </h5>
                                                </div>
                                            
                                                <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordion">
                                                  <div class="card-body">
                                                  <?php echo $row["description"];?> <?php } ?>
                                                  </div>
                                                </div>
                                              </div>
                                              <!---28th recipe--->
                                              <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=29");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                              <div class="card recipe-card">
                                                <div class="card-header" id="heading28">
                                                  <h5 class="mb-0">
                                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                    <button class="btn3" data-toggle="collapse" data-target="#collapse28" aria-expanded="true" aria-controls="collapse28">
                                                      <div class="recipe-link">
                                                           
                                                          <h3><?php echo $row["name"];?></h3>
                                                          </div>
                                                    </button>
                                                  </h5>
                                                </div>
                                            
                                                <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordion">
                                                  <div class="card-body">
                                                  <?php echo $row["description"];?> <?php } ?>
                                                  </div>
                                                </div>
                                              </div>
                                              <!---29th recipe--->
                                              <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=30");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                              <div class="card recipe-card">
                                                <div class="card-header" id="heading29">
                                                  <h5 class="mb-0">
                                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                    <button class="btn3" data-toggle="collapse" data-target="#collapse29" aria-expanded="true" aria-controls="collapse29">
                                                      <div class="recipe-link">
                                                           
                                                          <h3><?php echo $row["name"];?></h3>
                                                          </div>
                                                    </button>
                                                  </h5>
                                                </div>
                                            
                                                <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordion">
                                                  <div class="card-body">
                                                  <?php echo $row["description"];?> <?php } ?>
                                                  </div>
                                                </div>
                                              </div>
                                              <!---30th recipe--->
                                              <?php
                              $query= mysqli_query($con,"SELECT * FROM recipes WHERE id=31");
                          while($row = mysqli_fetch_assoc($query))
                          {
                            ?>
                                              <div class="card recipe-card">
                                                <div class="card-header" id="heading30">
                                                  <h5 class="mb-0">
                                                      <img src="recipesimg/<?php echo $row["image"];?>"  square width="300px"   class="d-inline  img-fluid">
                                                    <button class="btn3" data-toggle="collapse" data-target="#collapse30" aria-expanded="true" aria-controls="collapse30">
                                                      <div class="recipe-link">
                                                           
                                                          <h3><?php echo $row["name"];?></h3>
                                                          </div>
                                                    </button>
                                                  </h5>
                                                </div>
                                            
                                                <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordion">
                                                  <div class="card-body">
                                                  <?php echo $row["description"];?> <?php } ?>                                                      
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          </div>
                    </div>
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
                    <p><i class="fas fa-home mr-3"></i> 5th Settlement, Cairo, Egypt</p>
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