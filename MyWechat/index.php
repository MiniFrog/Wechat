<?php

if( isset( $_GET['Admin']) && $_GET['admin'] == true)
{
	include "./class/Admin.php";
	$admin = new Admin();
}

if ( isset( $_GET['echostr'] ) )
{
    echo $_GET['echostr'];
} else {
	include "./Class/Client.php";
	$client = new Client();
}


?>