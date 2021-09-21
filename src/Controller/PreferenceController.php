<?php

declare(strict_types=1);

namespace App\Controller;

class PreferenceController
{
    public string $type = 'type';

    final public function finalMethod(): string
    {
        return 'I am final!';
    }
}
