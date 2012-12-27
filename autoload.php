<?php
// Autoload file for composer.

function LoadFunctions($Name) {
	$File = dirname(__FILE__) . '/library/functions.' . strtolower($Name) . '.php';
	return require_once $File;
}

LoadFunctions('general');