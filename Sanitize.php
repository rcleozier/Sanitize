<?php

namespace Sanitize;

use \Exception;

class Sanitize {

    /**
     * Available Methods
     *
     */
    private static $methods = [
    	'email'     => FILTER_SANITIZE_EMAIL,
    	'encoded'   => FILTER_SANITIZE_ENCODED,
    	'quotes'    => FILTER_SANITIZE_MAGIC_QUOTES,
    	'float'     => FILTER_SANITIZE_NUMBER_FLOAT,
    	'int'       => FILTER_SANITIZE_NUMBER_INT,
    	'chars'     => FILTER_SANITIZE_SPECIAL_CHARS,
    	'fullchars' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    	'string'    => FILTER_SANITIZE_STRING,
    	'url'       => FILTER_SANITIZE_URL,
    	'raw'       => FILTER_UNSAFE_RAW
    ];

    /**
     * Magic static method to call available methods
     *
     */
    public static function __callStatic($method, $args) {
        if (!array_key_exists($method, self::$methods)) {
            throw new Exception('Method not defined.');
        }

        $arg = (isset($args[0]) ? $args[0] : false );
        $method = self::$methods[$method];

        return self::sendResult($arg, $method);
    }

    private static function sendResult($arg, $method) {
       return filter_var($arg, $method) !== false; 
    }
}
?>