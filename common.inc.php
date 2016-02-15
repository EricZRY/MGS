<?php
/**
 * Created by PhpStorm.
 * User: EricZhang
 * Date: 16/2/3
 * Time: 18:06
 */

date_default_timezone_set("+8");
error_reporting(E_ALL & ~E_NOTICE);
define('APP_ROOT',realpath(dirname(__FILE__)));
define('LOG_DIR',APP_ROOT.'/log/');
define('FRAMEWORK',APP_ROOT.'/framework');
define('MODEL',APP_ROOT.'/model');
define('CMD',APP_ROOT.'/cmd');

//include APP_ROOT . ''

define('DB_FREFIX','mgs_');
define('BASE_URL','http://127.0.0.1/');

define('LOCAL',true);

$GLOBALS['VERSION_SKEY'] = array(
    '0.0.1' => '',
);

$GLOBALS['CURRENT_VERSION_TO_CONFIG_VERSION'] = array(
    '0.0.1' => '0.0.1',
);


include APP_ROOT . '/common.func.php';
include MODEL .'/MF.php';