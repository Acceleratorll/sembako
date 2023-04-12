<?php


namespace App\Repositories;

use App\Models\Payment;

class PaymentRepository
{
    protected $model;

    public function __construct(Payment $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $payment = $this->model->find($id);
        $payment->update($data);
        return $payment;
    }

    public function delete($id)
    {
        $payment = $this->model->find($id);
        return $payment->delete();
    }
}
