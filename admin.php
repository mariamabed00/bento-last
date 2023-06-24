<?php 
   include ('connection.php');
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
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
	
    <body class="p-5">
	<h2 class="bannerh2">Admin Interface</h2>
        <form method="post">
        <input type="text" name="search" placeholder="Search Recipe" class="search-input mx-auto col-sm-6" autocomplete="off" required>
    </div>
        <input class="btn mx-5" type="submit" name="submit" value="Search">
        </form>
            <br>
		<form method="post" action="admin.php">
	    <input type="submit" class="btn m-5" name="btn" id="g" value="Get All Records from Database">
		<br> <br>
		</form>
<br>

<?php
// Get all records from database
if (isset($_POST['btn'])) {

	?>
	<center>
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>image</th>
				<th>Update data</th>
				<th>Remove data</th>
			</tr>
<?php

$q="SELECT * FROM `recipes`";
$r= mysqli_query($con,$q);
while ($row=mysqli_fetch_array($r)) {
	
?>
<tr>
	<td> <?php  echo $row['id'];  ?> </td>
	<td> <?php  echo $row['name'];  ?> </td>
	<td> <?php  echo $row['description'];  ?> </td>
	<td> <img src="recipesimg/<?php  echo $row['image']; ?>" height="300px" width="300px"> </td>


	<td> <a href="">Edit Data</a> </td>
	<td> <a href="">Delete Data</a> </td>
</tr>
<?php
} 
?>

		</table>
	</center>
<?php
}

?>


<?php
// get specific records

if (isset($_POST['submit'])) {

$d=mysqli_real_escape_string($con,$_POST['search']);  //pho
?>
<center>
	<table class="table table-bordered">
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Image</th>	
		</tr>

<?php

  $uy="SELECT * FROM `recipes` WHERE `name` LIKE '%$d%'";
  $res=mysqli_query($con,$uy);
while ($data=mysqli_fetch_array($res)) {
	
	?>

	<tr>
	<td> <?php  echo $data['id'];  ?> </td>
	<td> <?php  echo $data['name'];  ?> </td>
	<td> <?php  echo $data['description'];  ?> </td>
	<td> <img src="recipesimg/<?php  echo $data['image'];  ?>" square height="300px" width="300px" > </td>
</tr>
<?php
}
?>

	</table>
</center>

<?php	
}

?>
 </body>

</html>