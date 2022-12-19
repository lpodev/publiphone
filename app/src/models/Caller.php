<?php

class Caller
{

    public Standard $standard;

    public function __construct()
    {
    }

    public function cancelCall(): void
    {
        // to complete
    }

    public function entryPhoneBooth(Standard $standard): void
    {
        $this->standard = $standard;
    }
}