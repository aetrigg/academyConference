<?php
////////////////////// MAMP version ///////////////////////

//	$dbhost = 'localhost';
//	$dbuser = 'root';
//	$dbpwd  = '';
	//$dbname = '<your MAMP database name>';
//	$dbname = 'academyConference';

//	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

//	if (!$link) {
//		die('Connect Error (' . mysqli_connect_errno() . ') '
//				. mysqli_connect_error());
//	}

//////////////////////////////////////////////////////////

////////////////////// web-4 method /////////////////////

	$dbhost = 'localhost';
	$dbuser = 'aetrigg';
	$dbpwd  = 'aetrigg';
	$dbname = 'aetrigg_db';
	
	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

	if (!$link) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
?>