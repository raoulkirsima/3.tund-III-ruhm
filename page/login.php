<?php require_once("../header.php"); ?>

<?php

	// LOGIN.PHP
	//echo $_POST["email"];
	$email_error = "";
	$password_error = "";
	$name_error = "";
	
	
	echo date ("l, j. F, Y, e");
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST" ) {
		
		//echo "keegi vajutas nuppu";
		//kontrollin, et email ei ole tühi
		
		
		if ( empty($_POST["email"]) ) {
			$email_error = "See väli on kohustuslik";
		
		}
		
		//kontrollin, et parool ei ole tühi
		
		if (empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		} 
			
			
			
			
		

	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST" ) {
		
		if (empty($_POST["e-mail"])){
			$email_error = "See väli on kohustuslik";
		}
		if (empty($_POST["pass"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			

			if(strlen($_POST["pass"]) <8) {
				$password_error = "Parool on liiga lühike, peab olema vähemalt 8 tähemärki pikk!";
			}
	
		}
		if (empty ($_POST["name"])){
			$name_error = "See väli on kohustuslik";
		}
	}	
?>



		
		
	<h2>Log in</h2>
		
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="e-mail"> <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="password"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in" >
		</form>
		
		
	<h2>Create user</h2>
		
		<form action="create_user.php" method="post" >
			<input name="e-mail" type="email" placeholder="e-mail" > <?php echo $email_error; ?> <br><br>
			<input name="pass" type="password" placeholder="password" > <?php echo $password_error; ?> <br><br><br><br>
			<input name="name" type="name" placeholder="first name" > <?php echo $name_error; ?> <br><br>
			<input name="name" type="name" placeholder="last name" > <?php echo $name_error; ?> <br><br>
			<input type="submit" value="Create user" >
		</form>	
			
			
			
			
 	
<?php require_once("../footer.php"); ?>	