<?php 
   include ('connection.php'); ?>
<?php
$edit = $_GET['edit'];

$sql = "select * from users where id = '$edit'";

$run = mysqli_query($con,$sql);


while($row=mysqli_fetch_array($run))
{
    $id = $row['id'];
    $name = $row['username'];
    $email = $row['email'];
    $age = $row['age'];
    $continent = $row['continent'];
    $password = $row['password'];

}

?>

<?php
       if(isset($_POST['submit']))
        {
          $edit = $_GET ['edit'];  
          $name = $_POST ['username'];
          $email = $_POST['email'];
          $age= $_POST['age'];
          $continent = $_POST['continent'];
          $password = $_POST['password'];

           $sql = "update users set username= '$name',email= '$email',age= '$age',content= '$continent',password='$password' where id =  '$edit'";

           if(mysqli_query($con,$sql))
           {

            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo '<script> Some thing Error</script>' ;

           }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bento Users Approve Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> Bento Users Approve Panel </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username" class="form-control"  placeholder="Enter Name" value="<?php echo $name; ?>"> 
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control"  placeholder="Enter email" value="<?php echo $email; ?>"> 
                        </div>
                        <div class="form-group">
                            <label>age</label>
                            <input type="text" name="age" class="form-control"  placeholder="Enter age" value="<?php echo $age ; ?>"> 
                        </div>

                        <div class="form-group">
                            <label>continent</label>
                            <input type="text" name="continent" class="form-control"  placeholder="Enter continent/region" value="<?php echo $continent ?>"> 
                        </div>

                        <div class="form-group">
                            <label>password</label>
                            <input type="text" name ="password" class="form-control"  placeholder="Enter password" value="<?php echo $password ?>"> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                        </form>
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>