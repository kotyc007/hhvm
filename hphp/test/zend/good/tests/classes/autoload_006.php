<?php

function __autoload($class_name)
{
	require_once(dirname(__FILE__) . '/' . strtolower($class_name) . '.p5c');
	echo __FUNCTION__ . '(' . $class_name . ")\n";
}

var_dump(interface_exists('autoload_interface', false));
var_dump(class_exists('autoload_implements', false));

$o = new Autoload_Implements;
var_dump($o);
var_dump($o instanceof autoload_interface);
unset($o);

var_dump(interface_exists('autoload_interface', false));
var_dump(class_exists('autoload_implements', false));

echo "===DONE===\n";
