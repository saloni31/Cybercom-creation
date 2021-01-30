<?php
function hit_counter()
{
	$found = false;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$file = file("ips.txt");
	foreach ($file as $ip) {
		$single_ip = trim($ip);
		if($ip_address == $single_ip){
			$found = true;
			break;
		}else{
			$found = false;
		}
	}
	if($found == false){
		$file_name = "counter.txt";
		$handle = fopen($file_name,"r")	;
		$current = fread($handle, filesize($file_name));
		fclose($handle);
		$current++;

		$handle = fopen($file_name, "w");
		fwrite($handle, $current);
		fclose($handle);

		$handle = fopen("ips.txt", "a");
		fwrite($handle, $ip_address."\n");
		fclose($handle);
	}
}