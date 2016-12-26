<?php
define("ROOT_PATH",__DIR__.'\\');
define('CORE',ROOT_PATH.'core');
define('APP',ROOT_PATH.'app');
define('DEBUG',true);

if(DEBUG)
{
    ini_set('display_error','On');
}
else
{
    ini_set('display','Yes');
}

require_once CORE.'/common/function.php';

require_once CORE.'/frame.php';
require_once CORE.'/lib/route.php';
spl_autoload_register('\core\frame::load');
\core\frame::run();