<?php declare(strict_types=1);
require_once('vendor/autoload.php');

class TypedProperties
{
    public int $number;
    public string $text;
    public bool $flag;

    public \Monolog\Logger $logger;

    public function run()
    {
        $this->number = 100;
        $this->logger = new \Monolog\Logger('logger');
    }
}

$typedProperties = new TypedProperties();
$typedProperties->run();

var_dump($typedProperties);
