<?php
require('../include/init.inc.php');
if(array_key_exists(UserSession::SESSION_NAME,$_SESSION)){
	SysLog::addLog ( UserSession::getUserName(), 'LOGOUT','User' ,UserSession::getUserId() );
}
User::logout();
Common::exitWithSuccess("您已安全退出！","panel/login.php");