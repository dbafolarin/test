<?php
//setting in php that allow error to be display
ini_set("log_errors", 1);
//setting in php to specify filename where error will be logged to i.e php_error.log
ini_set("error_log", "php_error.log");

$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('Hello World');
$greet('PHP');

$sha1 = SHA1('folarinb295d117135a9763da282e7dae73a5ca7d3e5b11');
echo $sha1;
?>