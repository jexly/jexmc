<?php

	// Variables for Days :P
	$num1 = mt_rand(1, 10);
	$num2 = mt_rand(1, 10);
	$equation = $num1." + ".$num2;

	$message = " ";

	$total = $_POST['num1'] + $_POST['num2'];

	//magic of form posting begins
	if(isset($_POST['submit'])){
		if ($_POST['answer'] == $total){
			$message = "Congrats! - ".$_POST['answer'];
		} else {
			$message = "Try Again! - ".$total;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>JEXMC</title>
</head>
<body>
<h3>JEX Math Captcha: PHP</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label>What is <?php echo $equation; ?> ?</label>
  <input name="answer" type="text">
  <input type="hidden" name="num1" value="<?php echo $num1; ?>">
  <input type="hidden" name="num2" value="<?php echo $num2; ?>">
  <input name="submit" type="submit" value="Submit Answer!">
 <label><?php echo $message ?></label>
</form>
</body>
</html>
