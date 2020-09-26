<?php

session_start();
if(empty($_SESSION['user'])){
    header('Location: /hanine/login1.php?error=login please!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
if (isset($_GET['msg'])) {
		echo "<div class='alert'>" . htmlspecialchars($_GET["msg"]) ."</div>";
	} else {
		// Fallback behaviour goes here
	}
	?>
<form action='/hanine/addCategory.php' method='POST'> 
    <div class='contaier'>
    <div class='form-group form-group-g1'>
    <label class='col-sm-2 control-lebel'>categoryName</label>
    <div class='col-sm-10 col-md-6'>
    <input type='text' name='categoryName' calss='form-control' autocomplete='off' required='required' placeholder='Name Of The Category'/>
    </div>
    </div>
    </div>
    </form>
</body>
</html>


