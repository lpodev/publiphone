<?php

class Correspondent extends Caller
{

    private string $phoneNumber;

    public function __construct($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function pickUp(): void
    {
        // code
    }
}