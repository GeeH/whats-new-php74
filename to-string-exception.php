<?php declare(strict_types=1);
require_once('vendor/autoload.php');

class Stringable
{
    protected string $handle = 'geeh';
    protected string $url = 'twitch.tv/spabby';

    public function __toString()
    {
        if ($this->handle !== 'spabby') {
            throw new InvalidArgumentException('Only spabby can be followed on Twitch');
        }

        return "Give {$this->handle} a follow now at {$this->url}";
    }
}

$stringable = new Stringable();
var_dump((string)$stringable);
