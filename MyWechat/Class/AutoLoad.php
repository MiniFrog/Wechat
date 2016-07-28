<?php

include "../InterFace/InterfaceAutoLoad.php"

class AutoLoad implements InterfaceAutoLoad {
	
	public function __construct () {
		spl_autoload_register('autoLoad');
	}

	private function autoLoad ($class_name) {
		$_file_path = $class_name . '.php';
		if( file_exists( $_file_path ) ) 
		{
			include_once( $class_name . '.php' );
		}
	}

}