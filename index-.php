<?php
define('filepath', 'var/www/conf.d/porcotasso');

if(is_file('config.php')){
	require_once('config.php');
}