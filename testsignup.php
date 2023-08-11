
<?php
// TODO
    /* Get vlaues in a variable 
       validate them 
       then run query to add it in a table */

    $fname = isset($_POST["fname"]) ? $_POST["fname"] : '' ;
    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['pwd']) ? $_POST['pwd'] : '';

      
    $fname = (empty($fname)) ? echo "name can't be emplty"  : $fname ;
      
    <?= "name can't be emplty" ?> 
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign up</h2>
  <form action="testsignup.php" method="POST">
  <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="First name" name="fname">
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

