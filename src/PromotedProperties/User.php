<?php

namespace App\PromotedProperties;

class User extends AbstractUser
{
    // invalid: cannot declare promoted property outside a constructor
    public function setName(public string $firstName, public string $lastName): void
    {
    }
}
