<?php
// ini_set("error_reporting",0);
require 'connection.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_add($ip){
	insert("hits_ip",['ip'],[$ip]);
}

function update_count(){
	$data = selectAllData("count_hit");
	$data = $data['count'] + 1;
	updateAll("count_hit",['count'],[$data]);
}

function ip_exists($ip){
	$ips = selectDataByKey("hits_ip",['ip'],'ip',$ip);
	$count_ip = count($ips);
	if($count_ip == 0){
		update_count();
		ip_add($ip);
	}
}

ip_exists($user_ip);
	