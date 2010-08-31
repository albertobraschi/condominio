<?php

class DATABASE_CONFIG {


    var $development = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '123',
		'database' => 'condominios'
    );
    var $production = array(
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'passwd',
        'database' => 'app'
    );
    var $test = array(
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'passwd',
        'database' => 'app_test'
    );

    var $default = array();

    function __construct()
    {
        $this->default = ($_SERVER['SERVER_ADDR'] == '127.0.0.1') ?
            $this->development : $this->production;
    }
    function DATABASE_CONFIG()
    {
        $this->__construct();
    }

}
?>

