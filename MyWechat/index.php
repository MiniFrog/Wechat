<?php

if( isset( $_GET['Admin']) && $_GET['admin'] == true )
{
	include "/System/Admin.php";
	$admin = new System\Admin();
}

if ( isset( $_GET['echostr'] ) )
{
    echo $_GET['echostr'];
} else {
	include "/System/Client.php";
	$client = new System\Client();
}


?>