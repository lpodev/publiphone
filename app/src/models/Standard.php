<?php

class Standard
{
    //Private Attributes
    private int $delay;
    private string $phoneNumber;
    private float $price;
    private float $balance;
    private int $duration;

    public function __construct(int $delay, string $phoneNumber, float $price, float $balance, int $duration)
    {
        $this->delay = $delay;
        $this->phoneNumber = $phoneNumber;
        $this->price = $price;
        $this->balance = $balance;
        $this->duration = $duration;
    }

    //TOOD add money

    public function ConsumeBalance(): void
    {
        // to complete
    }

    public function startDelay(): void
    {
        // to complete
    }

    public function hangUp(): float
    {
        return $this->duration;
    }
}