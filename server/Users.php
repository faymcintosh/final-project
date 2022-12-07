
<?php 
session_start(); 
include "db_conn.php";?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>All Users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src='main.js'></script>
</head>
<body>
    <div class = "container">
        <button class = "btn btn-primary my-5"><a href ="AddNewUser.php" class= "text-light"> Add User</a> </button>
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
    <?php

        $sql = "Select * from `users`";
        $result = mysqli_query($conn, $sql);
        if ($result){
            while ( $row=mysqli_fetch_assoc($result))
            {
                $firstName = $row['firstname'];
	            $lastName = $row['lastname'];
	            $email = $row['email'];
	            $created_at = $row['created_at'];
                $role = $row['role'];
                echo '<tr>
                <th scope="row">'.$firstName.'</th>
                <td>'.$lastName.'</td>
                <td>'.$email.'</td>
                <td>'.$role.'</td>
                <td>'.$created_at.'</td>';
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

 