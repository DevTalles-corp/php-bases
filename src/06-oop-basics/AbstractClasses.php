<?php

abstract class PaymentProcessor
{
    protected float $amount;
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }
    abstract public function proccess(): void;
    public function log(): void
    {
        echo "Procesando pago por: {$this->amount}\n";
    }
}
class CreditCardPayment extends PaymentProcessor
{
    public function proccess(): void
    {
        $this->log();
        echo "Pago procesado con tarjeta de crédito\n";
    }
}
class PaypalPayment extends PaymentProcessor
{
    public function proccess(): void
    {
        $this->log();
        echo "Pago procesado con Paypal\n";
    }
}
$payment = new PaypalPayment(150);
$payment->proccess();
