<?php
/**
 * Register user API
 */
require_once __DIR__ . '/../../vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Scheduler\Scheduler;
use Monolog\Logger;

$log = new Logger('register');
$log->pushHandler(new StreamHandler(__DIR__ . '/../../log/register.log', Logger::DEBUG));
$log->info("Registering user: {$_POST['name']}");

$schedule = new Scheduler();
echo $schedule->register($_POST['name']);
