<?php
class Customer
{
    public $name;
    protected $email;
    public $basket;
    private $paymentMethod;

    public function __construct(string $name, string $email, ShoppingBasket $basket)
    {
        $this->name = $name;
        $this->email = $email;
        $this->basket = $basket;
    }

    public function insertCreditCard(CreditCard $creditCard)
    {
        $this->paymentMethod = $creditCard;
    }

    public function toPay($total)
    {
        if (
            $this->paymentMethod->getExpireYear() > date("Y") ||
            ($this->paymentMethod->getExpireYear() === date("Y") && $this->paymentMethod->getExpireMonth() <= date("m"))
        ) {
            return "la carta è valida, procedo con il pagamento";
        } else {
            return "Mi dispiace non possiamo proseguire con il pagamento perchè la carta è scaduta";
        }
    }
}
