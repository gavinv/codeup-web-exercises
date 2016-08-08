<?php

class Input
{
		/**
		 * Check if a given value was passed in the request
		 *
		 * @param string $key index to look for in request
		 * @return boolean whether value exists in $_POST or $_GET
		 */
		public static function has($key)
		{
			if(isset($_REQUEST[$key])) {
				return true;
			} else {
				return false;
			}
		}
		public static function isPost()
		{
			return !empty($_POST);
		}

		/**
		 * Get a requested value from either $_POST or $_GET
		 *
		 * @param string $key index to look for in index
		 * @param mixed $default default value to return if key not found
		 * @return mixed value passed in request
		 */
		public static function get($key, $default = null)
		{
			return self::has($key) ? $_REQUEST[$key] : $default;
		}
		public static function getString($key)
		{
			if(!is_string(self::get($key))) {
				throw new Exception("$key must be a string!");
			} else {
				return trim(self::get($key));
			}
		}
		public static function getNumber($key)
		{
			if(!is_numeric(self::get($key))) {
				throw new Exception("$key must be a number!");
			} else {
				return floatval(self::get($key));
			}
		}
		public static function getDate($key)
		{
			if(!strtotime(self::get($key))) {
				throw new Exception("The value for $key must be a date!");
			}
			return new DateTime(self::get($key));
		}

		///////////////////////////////////////////////////////////////////////////
		//                      DO NOT EDIT ANYTHING BELOW!!                     //
		// The Input class should not ever be instantiated, so we prevent the    //
		// constructor method from being called. We will be covering private     //
		// later in the curriculum.                                              //
		///////////////////////////////////////////////////////////////////////////
		private function __construct() {}
	}
