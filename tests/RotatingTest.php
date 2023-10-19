<?php

declare(strict_types=1);

namespace Irfanm\Belajar\PHP\MVC;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotNull;

class RotatingTest extends TestCase
{
    public function testRotating()
    {
        $logger = new Logger(RotatingTest::class);
        $logger->pushHandler(new RotatingFileHandler(__DIR__ . "/../app.log", 10, Logger::INFO));

        $logger->info("halo dunia 1");
        $logger->info("halo dunia 2");
        $logger->info("halo dunia 3");
        $logger->info("halo dunia 4");

        assertNotNull($logger);
    }
}
