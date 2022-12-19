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

    public function ConsumeBalance(): float
    {
        return $this->balance;
    }

    public function startDelay(): void
    {
        // to complete
    }

    public function hangUp(): int
    {
        return $this->duration;
    }

    public function insertMoney(float $money): void
    {
        $this->balance += $money;
    }

    public function composeNumber(string $phoneNumber): void
    {
        // to complete
    }

    public function startCall(): void
    {
        // to complete
    }

    public function endCall(): void
    {
        // to complete
    }

}