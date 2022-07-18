<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta charset="utf-8">
</head>

<body>
<?php
if(isset($_POST["submit"])) {
    $Tele = $_POST["Tele"];

        //TELEGRAM 
		$apiToken = "YOUR_BOT_TOKEN";
		$data = [
		  'chat_id' => 'CHANNEL_ID', 
		  'text' => 'Message 1'. '
		  ' .$message. '
		  ' . ' https://twitter.com/nextevall'
		];
		$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
									   http_build_query($data) );
		   

// display response from twitter
    echo '<script>alert("Message sent !!");</script>';
}
?>

<center>
<form action="" method="post">
  <p>رساله:</p>
    <input type="text" name="Tele" > <br><br>
    <button type="submit" name="submit">Submit</button>
</form>

