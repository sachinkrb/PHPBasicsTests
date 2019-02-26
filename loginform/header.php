<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="This is an example of login form with php!">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>

<body>
<header>
<nav>




<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Portfolio</a></li>
<li><a href="#">About Me</a></li>
<li><a href="#">Contact us</a></li>
</ul>
<div>
	<?php

	if (isset($_SESSION['userId'])){
        		echo '<form action="includes/logouttest.php" method="post">
        <button type="submit" name="logout-submit">Log Out</button>
    </form>';

        	} else {

        		echo '<form action="includes/logintest.php" method="post">
        <input type="text"  name="mailuid" placeholder="Username/E-mail">
        <input type ="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Log In</button>
    </form>  <a href="signup.php">Sign Up</a>';

        	}



	?>
    
   
    
</div>

</nav>
</header>

</body>
</html>
