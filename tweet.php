<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta charset="utf-8">
</head>

<body>
<?php
if(isset($_POST["submit"])) {
    $tweet = $_POST["tweet"];

	// include config and twitter api wrappe
	require_once( 'config.php' );
	require_once( 'TwitterAPIExchange.php' );

	// settings for twitter api connection
	$settings = array(
		'oauth_access_token' => TWITTER_ACCESS_TOKEN, 
		'oauth_access_token_secret' => TWITTER_ACCESS_TOKEN_SECRET, 
		'consumer_key' => TWITTER_CONSUMER_KEY, 
		'consumer_secret' => TWITTER_CONSUMER_SECRET
	);

	// twitter api endpoint
	$url = 'https://api.twitter.com/1.1/statuses/update.json';
	
	// twitter api endpoint request type
	$requestMethod = 'POST';

	// twitter api endpoint data
		$apiData = array(
			'status' =>'Message 1:'. '
			' .$tweet. '
			' . ' https://twitter.com/nextevall',
		);

	// create new twitter for api communication
	$twitter = new TwitterAPIExchange( $settings );

	// make our api call to twiiter
	$twitter->buildOauth( $url, $requestMethod );
	$twitter->setPostfields( $apiData );
	$response = $twitter->performRequest( true, array( CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_SSL_VERIFYPEER => 0 ) );

	// display response from twitter
    echo '<script>alert("Message sent !!");</script>';
}
?>
<center>
<form action="" method="post">
  <p>رساله:</p>
    <input type="text" name="tweet" > <br><br>
    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>