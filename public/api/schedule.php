<?php

/**
 * Schedule renderer API
 */

require_once __DIR__ . '/../../vendor/autoload.php';

use Scheduler\Scheduler;

$schedule = new Scheduler();
echo $schedule->printSchedule($_POST['from'], $_POST['to'], $_POST['name']);
