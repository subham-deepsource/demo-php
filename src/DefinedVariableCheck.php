<?php

declare(strict_types=1);

namespace App;

class DefinedVariableCheck
{
    public function run(): void
    {
        echo $greetings;

        $greetings = 'Hello';
    }

    public function greet(): string
    {
        $message = static function () {
            return $this->getMessage();
        };

        return $message();
    }

    protected function getMessage(): string
    {
        return 'Hello there!';
    }
}
