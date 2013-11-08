<?php
namespace Vendor;

abstract class AbstractCat
{
    public $name;
    public $eyes;
    public $paws;
    public $whiskers;
    protected $body;
    protected $tail;

    abstract protected function pawCheck($paws_count);

    public function getBody()
    {
        return $this->body;
    }

    public function getTail()
    {
        return $this->tail;
    }

    public function getEyes()
    {
        return $this->eyes;
    }

}
