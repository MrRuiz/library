<?php

	require_once('config.php');

	class DB
	{

		private static $instance;

		public static function get_instance() {
			if( ! isset( self::$instance ) ) {
				self::$instance = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

				if( self::$instance->connect_error ) {
					die( "Conexión con base de datos fallida. " . self::$instance->connect_error );
				}
			}

			return self::$instance;
		}

		public static function query($sql) {
			return self::get_instance()->query($sql);
		}

	}

?>