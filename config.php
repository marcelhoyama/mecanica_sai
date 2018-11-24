<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/mecanica_sai/");
	$config['dbname']='mecanica_sai';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		define("BASE_URL", "http://mecanicasai.devmg.pe.hu/");
        $config['dbname']='u708362941_sai';
	$config['host']='mysql.hostinger.com.br';
	$config['dbuser']='u708362941_sai';
	$config['dbpass']='';
}


