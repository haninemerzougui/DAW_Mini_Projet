<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.container{
			width: 710px;
			height: 400px;
			margin: 100px auto;
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
	</style>
</head>
<body>
	<div class="container">
		<div class="signin">
			<p>sign in</p>
			<form>
				<input type="text" name="name" placeholder="full name">	
				<input type="text" name="numberphone" placeholder="number phone">
				<input type="wilaya" name="wilaya" placeholder="wilaya">
				<input type="email" name="email" placeholder="email">
				<input type="password" name="password" placeholder="password">
				<button href="#">sign in</button>
			</form>
		</div>
	<div class="signup">
		<p>sign up</p>
		<input type="password" name="password" placeholder="password">
		<input type="email" name="email" placeholder="email">
		<button href="#">sign up</button>
	</div>	
	</div>

</body>
</html>