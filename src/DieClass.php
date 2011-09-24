<?php

class DieClass
{
    private $faceValue;

    public function __construct()
    {
        $this->roll();
    }

    public function roll()
    {
        $this->faceValue = 1;
    }

    public function getFaceValue()
    {
        return $this->faceValue;
    }
}
