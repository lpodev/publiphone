<?php

class Standard
{
    //Private Attributes
    private int $delay;
    public Correspondent $correspondent;
    private float $price;
    private float $balance;
    private int $duration;

    public function __construct()
    {
    }

    public function ConsumeBalance(): float
    {
        return $this->balance;
    }

    public function startDelay(): void
    {
        $this->duration = microtime(true);
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
        $this->correspondent = new Correspondent($phoneNumber);
    }

    public function startCall(): void
    {
        $this->startDelay();
    }

    public function endCall(): void
    {
        $this->duration = microtime(true) - $this->duration;
        unset($this->correspondent);
    }

}