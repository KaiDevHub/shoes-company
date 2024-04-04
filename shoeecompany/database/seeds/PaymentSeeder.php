<?php

use App\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = [
            [
                'paymentDate' => '2022-01-01',
                'paymentTime' => '10:00:00',
                'paymentType' => 'Visa',
            ],
            [
                'paymentDate' => '2022-01-02',
                'paymentTime' => '11:00:00',
                'paymentType' => 'Mastercard',
            ],
            [
                'paymentDate' => '2022-01-03',
                'paymentTime' => '12:00:00',
                'paymentType' => 'Paypal',
            ]
        ];

        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}