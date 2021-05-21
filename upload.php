<?php
function my_autoloader($class) {
    include 'Php/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

?>
