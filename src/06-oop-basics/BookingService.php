<?php

declare(strict_types=1);

class Customer
{
    public function __construct(
        public string $name,
        public string $email
    ) {}
}

class Room
{
    public function __construct(
        public string $name,
        private float $pricePerNight
    ) {}

    public function price(): float
    {
        return $this->pricePerNight;
    }
}

interface PaymentMethod
{
    public function pay(float $amount): string;
}

class CardPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Pago con tarjeta aprobado";
    }
}

class QrPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Pago con QR aprobado";
    }
}

class BookingService
{
    public function reserve(
        Customer $customer,
        Room $room,
        int $nigths,
        PaymentMethod $paymentMethod
    ): void {
        $subtotal = $room->price() * $nigths;
        $discount = 0; //TODO:implementar descuento por temporada
        $total = $subtotal - ($subtotal * $discount / 100);
        $paymentResult = $paymentMethod->pay($total);

        echo "Cliente: {$customer->name}\n";
        echo "Habitación: {$room->name}\n";
        echo "Noches: {$nigths}\n";
        echo "Total a pagar: {$total}\n";
        echo $paymentResult . "\n";
    }
}
$customer = new Customer("Devi", "devi@mail.com");
$room = new Room("Habitación doble", 120);
$nigths = 3;
$payment = new QRPayment();
$service = new BookingService();
$service->reserve($customer, $room, $nigths, $payment);