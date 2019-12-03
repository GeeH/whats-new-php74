<?php declare(strict_types=1);
require_once('vendor/autoload.php');


class A
{
}

class B extends A
{
}

class Producer
{
    public function method(): self
    {
    }
}

class ChildProducer extends Producer
{
    public function method(): self
    {
    }
}


