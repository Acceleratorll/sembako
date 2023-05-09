<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Repositories\PaymentRepository;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentService;
    protected $paymentRepository;

    public function __construct(PaymentService $paymentService, PaymentRepository $paymentRepository)
    {
        $this->paymentService = $paymentService;
        $this->paymentRepository = $paymentRepository;
    }

    // Return di Repo atau di service
    public function index()
    {
        $payments = $this->paymentRepository->all();
        // return view('payments.index', compact('payments'));
        return response()->json(['payments' => $payments]);
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(PaymentRequest $request)
    {
        $payment = $this->paymentService->createPayment($request);
        return response()->json(['payment' => $payment]);
    }

    public function show($id)
    {
        $payment = $this->paymentRepository->find($id);
        // return view('payments.show', compact('payment'));
        return response()->json(['payment' => $payment]);
    }

    public function edit($id, PaymentRequest $request)
    {
        $payment = $this->paymentService->updatePayment($id, $request);
        return view('payments.edit', compact('payment'));
    }

    public function update(PaymentRequest $request, $id)
    {
        $payment = $this->paymentService->updatePayment($id, $request);
        // return redirect()->route('payments.show', $payment->id);
        return response()->json(['payment' => $payment]);
    }

    public function destroy($id)
    {
        $this->paymentService->deletePayment($id);
        return redirect()->route('payments.index');
    }
}
