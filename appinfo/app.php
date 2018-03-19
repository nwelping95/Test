<?php

// execute OCA\MyApp\BackgroundJob\Task::run when cron is called
//\OC::$server->getJobList()->add('OCA\MyApp\BackgroundJob\Task');

// execute OCA\MyApp\Hooks\User::deleteUser before a user is being deleted
//\OCP\Util::connectHook('OC_User', 'pre_deleteUser', 'OCA\MyApp\Hooks\User', 'deleteUser');


$app = new \OCA\MyApp\AppInfo\Application();
//$app->registerHooks();
?>