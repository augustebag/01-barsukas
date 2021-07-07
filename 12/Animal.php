<?php
namespace Zoo;
use Australia\Animal as Australia;
use Ramsey\Uuid\Uuid;

class Animal extends Australia {
    public static $hello = 'Hello';

    public static function sayUUID() {
        echo Uuid::uuid4();
    }
}