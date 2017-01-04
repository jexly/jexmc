<?php

	// Variable for Days :P
	$num1 = mt_rand(1, 10);
	$num2 = mt_rand(1, 10);
	$equation = $num1." + ".$num2;

	$message = " ";

	$total = $_POST['num1'] + $_POST['num2'];

	//magic of form posting begins
	if(isset($_POST['submit'])){
		if ($_POST['answer'] == $total){
			$message = "Congrats! - ".$_POST['answer'];
			$style = "success";
		} else {
			$message = "Try Again! - ".$total;
			$style = "error";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>JEXMC</title>
<style>
body{
	background: #aaa;
	font-family: 'Arial';
}
.box{
	position: relative;
	height: 250px;
	width: 250px;
	background: white;
	margin: 0 auto;
	left: 0;
	right: 0;
	padding: 50px;
	text-align: center;
}
.success{
	position: relative;
	color: white;
	background: #209409;
	width: 350px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.error{
	position: relative;
	color: white;
	background: #940909;
	width: 350px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.button{
	width: 204px;
	height: 35px;
	background: #333;
	color: white;
	border: none;
	border-radius: 5px;
	margin: 10px;
	font-size: 12pt;
	font-family: 'Arial';
}
.textbox{
	width: 200px;
	height: 30px;
	border: 1px solid #333;
	border-radius: 5px;
	margin: 10px;
	font-family: 'Arial';
	font-size: 14pt;
}
</style>
</head>
<body>
<div class="<?php echo $style; ?>"><?php echo $message ?></div>
<div class="box">
<h3>JEX Math Captcha: PHP</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label>What is <?php echo $equation; ?>?</label><br>
  <input class="textbox" name="answer" type="number"><br>
  <input type="hidden" name="num1" value="<?php echo $num1; ?>">
  <input type="hidden" name="num2" value="<?php echo $num2; ?>">
  <input class="button" name="submit" type="submit" value="Submit Answer!"><br>
</form>
</div>
</body>
</html>
