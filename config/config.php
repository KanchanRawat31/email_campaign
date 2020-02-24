<?php
define('ROOT',dirname(__DIR__).DIRECTORY_SEPERATOR);
define('APP',ROOT.'app'.DIRECTORY_SEPARATOR);
define('VIEW',ROOT.'app'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);          
define('MODEL',ROOT.'app'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR);
define('DATA',ROOT.'app'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR);            
define('COMMON',ROOT.'app'.DIRECTORY_SEPARATOR.'common'.DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'app'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR);
$modules=[ROOT,APP,COMMON,CONTROLLER,DATA,VIEW,MODEL];

set_include_path(get_include_path().PATH_SEPARATOR.implode(glue:PATH_SEPARATOR, $modules));
//implode returns the string of an elements of an array
spl_autoload(new_include_path:'spl_autoload',throw:false);

echo 'i am inside config';
?>