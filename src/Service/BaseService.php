<?php

namespace App\Service;

abstract class BaseService
{
    public function someMethod(): string
    {
        return 'this is from ' . self::class;
    }
}
