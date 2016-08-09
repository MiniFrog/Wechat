<?php
namespace Tools;

spl_autoload_register('autoLoad');

function autoLoad( $class_name )
{
	$file_path = str_replace('\\', '/', $class_name) . '.php';
	if( file_exists( $file_path ) ) 
	{
		include_once( $file_path );
	}
}
