<?php

namespace Irfanm\Belajar\PHP\MVC;

use PHPUnit\Framework\TestCase;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        $logger = new Logger(HandlerTest::class);

        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));

        $logger->info("Belajar Pemrograman PHP Logging");
        $logger->info("Selamat di ProgamerCilacap");
        $logger->info("Ini Informasi Logging");

        self::assertNotNull($logger);
    }
}
