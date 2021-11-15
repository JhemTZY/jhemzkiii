<?php include "config.php";

$sql = "SELECT * FROM user";

$result =$conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
    <h2>Prayer Request</h2>
    <table class="table">
    <thead>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>SUBJECT</th>
    <th>MESSAGE</th>
   
    </tr>
    </thead>
    <tbody>
    <?php
        if ($result->num_rows > 0){
            while ($row= $result->fetch_assoc()){
                ?>    
                <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['subject'];?></td>
    <td><?php echo $row['message'];?></td>
    
  
    <td><a a class="btn btn-danger " href="Delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
       <?php     }
        }
?>
    
    </tbody>
    </table>
    </div>