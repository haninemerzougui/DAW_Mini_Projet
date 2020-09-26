
<?php

if(empty($_SESSION['user'])){
   
}else{
	header('Location: /grateful.php');

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			height: 100vh;
		}
		.container{
			width: 710px;
			height: 400px;
			margin: 20px auto;
  	    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
			display: flex;
		}
	    input {
	        background-color: #eee;
	        border: none;
	        padding: 12px 15px;
	        margin: 8px auto;
	        width: 70%;
	        border-radius: 25px;
            display: block;
        }
		.signup{
			width: 355px;
			height: 100%;
		    background-color: #1dc4e7;	
		}
		.signin{
			width: 355px;
			height: 100%;
	    }
  
		p{
			font-weight: bold;
			font-size: 30px;
			text-align: center;
		}
		button{
            height: 40px;
            width: 50%;
            outline: none;
            background-color: none;
            border:1px solid white ;
            border-radius: 25px;
            margin-left: 80px;
            font-weight: bold;
            font-size: 15px;
            font-weight: 500px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover{
           background: #0d9dbb;
        
		}
		.alert{
			background: red;
			width: 80vh;
			height: 30px;
			color: white;
			text-align: center;
			padding: 10px;
			border-radius: 25px;
			margin: 0 auto;
			margin-top: 20px;
		}
		.header{
			margin: 0 auto;
			padding: 10px;
			text-align: center;
		}
		.logo{
			width: 400px;
		}
	</style>
</head>
<body>
<?php
	if (isset($_GET['error'])) {
		echo "<div class='alert'>" . htmlspecialchars($_GET["error"]) ."</div>";
	} else {
		
	}
	?>
	<div class="header">
		<img src="./img/logo02.jpg" alt="LOGO" class="logo">
	</div>
	<div class="container">
		<div class="signin">
			<p>sign Up</p>
			<form action="registration.php" method="POST">
			    <input type="text" name="name" placeholder="full_name">	
				<input type="text" name="numberphone" placeholder="number_phone">
				<input type="text" name="wilaya" placeholder="wilaya">
				<input type="email" name="email" placeholder="email">
				<input type="password" name="password" placeholder="password">
				<button type='submit'>sign in</button>
			</form>
		</div>
	<div class="signup">
		<p>sign in</p>
		<form action="validation.php" method="post">
		<input type="text" name="name" placeholder="full name">
		<input type="password" name="password" placeholder="password">
		
		<button type='submit'>sign up</button>
		</form>
	</div>	
	</div>

</body>
</html>