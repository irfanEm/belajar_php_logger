<?php

namespace Irfanm\Belajar\PHP\MVC;

use Monolog\Logger;
use Monolog\Test\TestCase;

class LoggerTest extends TestCase
{
    public function testLogger()
    {
        $logger = new Logger("ProgamerHtmlCilacap");

        self::assertNotNull($logger);
    }

    public function testLoggerWithName()
    {
        $logger = new Logger(LoggerTest::class);

        self::assertNotNull($logger);
    }
}