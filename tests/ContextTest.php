<?php

declare(strict_types=1);

namespace Irfanm\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {
        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("Permintaan login user", ["user" => "irfaneM"]);
        $logger->info("Login Sukses", ["user" => "irfaneM"]);

        self::assertNotNull($logger);
    }
}
