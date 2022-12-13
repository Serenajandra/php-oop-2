<?php
class CreditCard
{
    private $number;
    private $cvv;
    private $expireMonth;
    private $expireYear;

    function __construct(int $number, int $cvv, string $expireMonth, string $expireYear)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expireMonth = $expireMonth;
        $this->expireYear = $expireYear;
    }
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    public function getExpireMonth()
    {
        return $this->expireMonth;
    }
}
