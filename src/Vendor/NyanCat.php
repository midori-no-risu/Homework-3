<?php

namespace Vendor;

use Vendor\AbstractCat;
use Vendor\CatInterface;
use Exception;

class NyanCat extends AbstractCat implements CatInterface
{
    public function __construct()
    {
        $this->name = 'Nyancat';
        $this->body = 'cookie';
        $this->tail = 'rainbow';
        $this->eyes = 'blue';
    }

    public function meowUntilYouGoMad($message = 'meow')
    {
        return $message;
    }

    public function pawCheck($paws_count)
    {
        try {
            if ($paws_count !== 4) {
                throw new Exception('are u sure it\'s normal for a cat to have ' . $paws_count . ' paws?.');
            } else{
                return "Your ".$this->name." has " . $paws_count . " paws.";
            }

        } catch (Exception $e) {
           return  $e->getMessage();
        }

    }
}
