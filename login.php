<?php
include "config.php";


if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM projectdb WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
      }
   
     else {
        echo 
        "<script>alert('Wrong Password');</script>";
    }
}
 else {
    echo 
    "<script>alert('User Not Registered');</script>";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Internship_1</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css" integrity="sha512-IejtbqJqhyw0pAfIGrqsO/+9McIyWp3zwz9Y0oKOpsSo9XHOCWwPcS6ezTpdDG5ZIkmMdvkkd1eq7C56fRqYxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="socil_media_item">
        <div class="socil_title">
        	<img src="img/dri/de.png" alt="" style="height: 100px; width: 100px; padding-top: 10px; margin-left: 10%;">
        </div>
        <div class="title_text">
        	<p>Discover the world's top Desingers & Creatives.</p>
        </div>
        <div class="image_set">
        	<img src="img/a.png">
        </div>
        <div class="socil_media_lg">
		    <a href="https://www.facebook.com">
			    <img src="img/f.png" alt="Facebook" >
			    <span style="font-weight: bold; color: white; font-family: initial;">Facebook</span>
			</a>
		   <a href="https://www.instagram.com">
			    <img src="img/i.png" alt="Instagram">
			    <span style="font-weight: bold; color: white; font-family: initial;">Instagram</span>
			</a>
		</div>
      </div>
    </div>


    <div class="col-md-7">
      <div class="socil_media_singup_item">
      	<div class="singin_text">
      		<p style="float: right;">Now Create Sing Up  Account? <a href="registration.php">Sing Up</a></p>
      	</div><br><br>
      	<div class="title_text_sing"><br>
      		<h2 style="font-weight: bold;"> Sing In to Dribbble.Com</h2>
      	</div>
      	
          <form class="" action="" method="post" autocomplete="off">
			    <label for="usernameemail">Username Or Email ID:</label><br><br>
			    <input type="usernameemail" id="usernameemail" name="usernameemail" placeholder="yesmail@gmail.com" required value=""><br><br>
			    
			    <label for="password">Password:</label><br><br>
			    <input type="password" id="password" name="password" placeholder="**********" required><br><br>
			    <input type="checkbox" id="showPassword" value=""> Show Password<br><br>

			    
			    
			    <input type="submit" name="submit" value="Sing In Now">
			</form>

			

     </div>
 </div>
</div>
</div>

   
<script src="js/script.js"></script>
</body>
</html>