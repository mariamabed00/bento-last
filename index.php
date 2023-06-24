<?php 
   include ('connection.php'); ?>
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
                   
                    <button class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>
                        
                        <br/>
                        <br/>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                             <th scope="col">age</th>
                            <th scope="col">continent</th>
                            <th scope="col">password</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                $sql = "select * from users";
                                $run = mysqli_query($con, $sql);
                                $id= 1;

                                while($row = mysqli_fetch_array($run))
                                {
                                    $id = $row ['id'];
                                    $name = $row ['username'];
                                    $email = $row ['email'];
                                    $age = $row ['age'];
                                    $continent = $row['continent'];
                                    $password = $row['password'];
                                ?>

                                   <tr>
                                        <td> <?php echo $id ?> </td>
                                        <td> <?php echo $name ?> </td>
                                        <td> <?php echo $email ?> </td>
                                        <td> <?php echo $age ?> </td>
                                        <td> <?php echo $continent ?> </td>
                                        <td> <?php echo $password ?> </td>

                                        <td>
                                        <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $id ?>' class="text-light"> Edit </a> </button> &nbsp;
                                       <button class="btn btn-danger"><a href='delete.php?del=<?php echo $id ?>' class="text-light"> Delete </a> </button>
                                        </td>
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>