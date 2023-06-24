<?php 
   include ('connection.php'); ?>
<?php
$delete = $_GET['delete'];
$sql = "delete from users where id = '$delete'";


if(mysqli_query($con,$sql))
           {

            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo  '<script>Some thing Error</script>';

           }

?>