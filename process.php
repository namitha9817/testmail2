<?php
if(isset($_POST['btn-send']))
{
	$userName=$_POST['Name'];
	$Email=$_POST['email'];
	$Subject=$_POST['Subject'];
	$Message=$_POST['msg'];
	$headers = 'namithasunil17@gmail.com' . "\r\n" .
   'Reply-To: namithasunil17@gmail.com';

	if(empty($userName)||empty($Email)||empty($Subject)||empty($Message))
		{
			header('location:index.php?error');
		}
	else
	{
		$to ="namithasunil17@gmail.com";

		if(mail($to,$Subject,$Message,$Email,$header))
		{
			header("location:index.php?success");
		}
	}
}
else
{
	header("location:index.php");
}

?>