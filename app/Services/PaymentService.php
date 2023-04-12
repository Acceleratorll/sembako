<?php

namespace App\Services;

use App\Repositories\PaymentRepository;

class PaymentService
{
    protected $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function createPayment($data)
    {
        $payment = $this->paymentRepository->create($data);

        return $payment;
    }

    public function updatePayment($id, $data)
    {
        $payment = $this->paymentRepository->update($id, $data);

        return $payment;
    }

    public function deletePayment($id)
    {
        $payment = $this->paymentRepository->delete($id);

        return $payment;
    }
}
