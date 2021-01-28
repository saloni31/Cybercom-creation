<?php
// returns client machine ip address
// $http_client_id = $_SERVER['HTTP_CLIENT_IP'];

// return proxy address
// $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "<pre>";
print_r($_SERVER);

// return ip address of the user
$ip_address = $_SERVER['REMOTE_ADDR'];

// $ip_address = !empty($http_client_id) ? $http_client_id : (!empty($http_x_forwarded_for) ? $http_x_forwarded_for:$remote_address);
echo "<br><br>IP address: ".$ip_address."<br>";	

// returns http method by which the request is submitted on server
$method = $_SERVER['REQUEST_METHOD'];
echo "Method: ".$method."<br>";

// return the time on which the page request is sent.
$time = $_SERVER['REQUEST_TIME'];
echo "Request time: ".date('dS M Y @ h:i:s a',strtotime($time))."<br>";

// return the current filr name on which the php code is running
echo "Current page url: ".$_SERVER['PHP_SELF']."<br>";

// returns the common gateway interface if any used.
echo "Gateway interface: ".$_SERVER['GATEWAY_INTERFACE']."<br>";

// return the ip address of the host server
echo "Address of server host: ".$_SERVER['SERVER_ADDR']."<br>";

// returns the software details used on the server side
echo "Software used at server: ".$_SERVER['SERVER_SOFTWARE']."<br>";

// returns the query used for accessing the page
echo "Query string: ".$_SERVER['QUERY_STRING']."<br>";

// return the host name
echo "Host name: ".$_SERVER['HTTP_HOST']."<br>";

// returns the complete url of current page
echo "Complete url: ".$_SERVER['HTTP_REFERER']."<br>";

// return the host page of client where page is accessed
// echo $_SERVER['REMOTE_HOST'];										// problem

$ip_block = array('::1', '100.100.100.100');