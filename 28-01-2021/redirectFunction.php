<?php
	ob_start();  // Output buffer start
?>

<h1> My Page </h1>
<?php
$redirected_page = 'http://google.co.uk';
$redirect = true;

//it will only working when then is no  
// any html element before php code
// If we want to use with that also
// then write ob_start() at the begining
// And at the end close it with ob_end_flush()
if($redirect == true){
	header('location: '.$redirected_page);
}

ob_end_flush();