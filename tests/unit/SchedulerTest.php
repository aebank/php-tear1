<?php

/**
 * Scheduler class unit-test template.
 * Please follow the same unit test style for other classes
 * including phpDocumentor commenting conventions.
 */

namespace SchedulerTest;

use Scheduler\Scheduler;
use PHPUnit\Framework\TestCase;

final class SchedulerTest extends TestCase
{
    /**
     * Test schedule printing
     */
    public function testPrintSchedule(): void
    {
        $scheduler = new Scheduler();
        $this->assertEquals(
            "Showing schedule from: 'from' to: 'to' for 'name'",
            $scheduler->printSchedule('from', 'to', 'name')
        );
    }

    /**
     * Test add appointment
     */
    public function testAddAppointment(): void
    {
        $scheduler = new Scheduler();
        $this->assertEquals(
            "Appointment for 'name' arranged at: 'date time' until: +'duration'",
            $scheduler->addAppointment('name', 'date', 'time', 'duration')
        );
    }

    /**
     * Test register new user
     */
    public function testRegister(): void
    {
        $scheduler = new Scheduler();
        $this->assertEquals("Hello name, you are now registered!", $scheduler->register('name'));
    }
}
