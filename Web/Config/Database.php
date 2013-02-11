<?php
require_once dirname(__FILE__).'Config.php';
//According to different databases,choose different database adapters.
define("DATABASE_NOT_POOL",0);
if (defined("DATABASE_MYSQL")){
    define("DEFAULT_HOST",127.0.0.1);
    define("DEFAULT_PORT",3306);
    define("DEFAULT_USER",'root');
    define("DEFAULT_PASSWD",'');
    define("DEFAULT_RESULT_STYLE",'array');
}

