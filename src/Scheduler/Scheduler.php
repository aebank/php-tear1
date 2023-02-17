<?php

namespace Scheduler;

use DateTime;

/**
 * Scheduler class example. Use as is,
 * copy or rename according to business task.
 * Cover all public methods with unit tests.
 * Try writing code that comply with {@link https://www.php-fig.org/psr/psr-12/ PSR-12 Extended Coding Style}
 * and comment using {@link https://docs.phpdoc.org/3.0/ phpDocumentor} conventions.
 *
 * @package Scheduler
 * @version 1.0
 * @author Rembo
 * @copyright Copyright (c) JSB Almazergienbank
 * @license https://opensource.org/license/mit/ MIT
 */
class Scheduler
{
    /**
     * Render schedule as HTML table
     *
     * @param DateTime $from Time which to show schedule (inclusive)
     * @param DateTime $to Time which to show schedule (inclusive)
     * @param string $name Name of an appointee
     * @return string HTML code to put to {@code <div>} container
     */
    public function printSchedule($from, $to, $name): string
    {
        return "Showing schedule from: '{$from}' to: '{$to}' for '{$name}'";
    }

    /**
     * Add an appointment entry to schedule
     *
     * @param string $name Name of appointee
     * @param DateTime $date Desired date of an appointment
     * @param string $time Desiresd hour and minute in form of HH:MM
     * @param int $duration Desired time of an appointment in minutes
     * @return string Success or an error message in HTML
     */
    public function addAppointment($name, $date, $time, $duration): string
    {
        return "Appointment for '{$name}' arranged at: '{$date} {$time}' until: +'{$duration}'";
    }

    /**
     * Register a permanent user
     *
     * @param string $name Name of appointee
     * @return string Success or an error message in HTML
     */
    public function register($name): string
    {
        return "Hello {$name}, you are now registered!";
    }
}
