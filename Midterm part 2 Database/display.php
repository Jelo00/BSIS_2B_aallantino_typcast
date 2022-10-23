<?php 
include "connection.php"
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BikeBiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
  </head>


  <body>
     <style>
       body
       {
        background-image: url('img/bgu2.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        overflow-x: hidden;
       }
       .col-3
       {
        background: rgba(0, 0, 0, 0.5);
       }
     </style>
     <h3 class= "text-warning text-uppercase text-center py-5 ">Users Information</h3>
        <table class="table table-border text-light">
            <thead>
                <tr class= "text-uppercase">
                    <td>UserID</td>
                    <td>Firstname</td>
                    <td>Lastname</td>
                    <td>Email Address</td>
                    <td>Complete Address</td>
                    <td>Contact</td>
                    <td>Username</td>
                    <td>Password</td> 
                </tr>     
            </thead>
            
            <tbody>

            <?php
             $sel = "SELECT * FROM user_info";
             $query = mysqli_query($conn, $sel);
             while($rows = mysqli_fetch_assoc($query))
             {
            ?>
                <tr>
                    <td><?php echo $rows['User_ID']?></td>
                    <td><?php echo $rows['firstname']?></td>
                    <td><?php echo $rows['lastname']?></td>
                    <td><?php echo $rows['address']?></td>
                    <td><?php echo $rows['email_address']?></td>
                    <td><?php echo $rows['contact_number']?></td>
                    <td><?php echo $rows['username']?></td>
                    <td><?php echo $rows['password']?></td> 
                </tr>  
            </tbody>
            <?php
             }
            ?>
        </table>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>