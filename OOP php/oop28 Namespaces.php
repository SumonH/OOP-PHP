<?php
// spl_autoload_register(function($class_name){
//   include "Namespaces/".$class_name.".php";
// });

include "Namespaces/Java.php";
include "Namespaces/Php.php";
include "Namespaces/Ruby.php";

use live\Java as ja;
new ja();
new live\Php();
new live\sumon\Ruby();
echo HTML;
echo live\CSS;
live\coding(); // when take function then no need to give echo



 ?>
