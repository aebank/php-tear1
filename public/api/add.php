<?php
/**
 * Add appointment API
 */
require_once __DIR__ . '/../../vendor/autoload.php';

use Scheduler\Scheduler;

$schedule = new Scheduler();
echo $schedule->addAppointment($_POST['name'], $_POST['date'], $_POST['time'], $_POST['duration']);
