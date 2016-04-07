<?php session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style>
      form {
        width: 200px;
        padding: 20px;
        margin: 20px;
        border: 1px solid black;
      }
      input {
        margin: 5px;
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <form class="form" action="process.php" method="post">
        Email:<input type="text" name="email" value="">
        First Name:<input type="text" name="first_name" value="">
        Last Name:<input type="text" name="last_name" value="">
        Password:<input type="password" name="password" value="">
        Confirm Password:<input type="password" name="confirmpassword" value="">
        Birthdate:<input type="text" name="birthdate" value="">
        <input type="submit" value="Submit">
      </form>

      <?php
          if(isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors']  as $error ) {
              echo "<p>".$error."</p>";
            }
          }
       ?>
    </div>

  </body>
</html>
