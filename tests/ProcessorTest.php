<?php

declare(strict_types=1);

namespace Irfanm\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use PHPUnit\Framework\TestCase;

class ProcessorTest extends TestCase
{
    public function testProcessorRecord()
    {
        $logger = new Logger(ProcessorTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushProcessor(new GitProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor());
        $logger->pushProcessor(function($record){
            // var_dump($record);
            $record["extra"]["prgclp"] =  [
                "author" => "Progammer Cilacap",
                "app" => "Belajar PHP Logging"
            ];
            return $record;
        });

        $logger->info("hello World");
        $logger->info("hello world part 2");
        $logger->info("hellow ord par t3");
        self::assertNotNull($logger);
    }
}
