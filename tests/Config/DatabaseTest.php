<?php

namespace Marsindo\PpdbSumutPortal22\Config;

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testGetConnection()
    {
        $connection = Database::getConnection();
        $this->assertNotNull($connection);
    }
}