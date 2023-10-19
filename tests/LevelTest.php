<?php

declare(strict_types=1);

namespace Irfanm\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class LevelTest extends TestCase
{
    public function testLevel()
    {
        $logger = new Logger(StreamHandler::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../error.log", Logger::ERROR));

        $logger->debug("contoh debug level");
        $logger->info("contoh info level");
        $logger->notice("contoh notice level");
        $logger->warning("contoh warning level");
        $logger->error("contoh error level");
        $logger->critical("contoh critical level");
        $logger->alert("contoh alert level");
        $logger->emergency("contoh emergency level");

        self::assertNotNull($logger);
    }
}
