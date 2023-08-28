<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Transaction;
use Error;
use Illuminate\Http\Request;
use Stripe\PaymentMethod;
use Stripe\Stripe;

class InvoiceController extends Controller
{
    public function payment(Invoice $invoice)
    {
        return view('pages.client.invoices.pay', compact('invoice'));
    }

    public function payment_post(Invoice $invoice, Request $request)
    {
        if($invoice->paid){
            return back()->withErrors(['payment' => 'This invoice is already paid']);
        }

        // handle payment
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $paymentMethodObject = PaymentMethod::retrieve($request->payment_method);

        $user = $request->user();
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethodObject);

        try{
            $charge = $user->charge(
                $invoice->amount * 100,
                $request->payment_method
            );
            if($charge){
                $transaction = Transaction::create([
                    'booking_id' => $invoice->booking->id,
                    'amount' => $invoice->amount,
                    'stripe_payment_id' => $charge->id
                ]);
                $invoice->update([
                    'paid' => true
                ]);
            } else {
                return back()->withErrors(['payment' => 'Payment failed']);
            }
        } catch (Error $error) {
            dd($error);
        }

        return redirect()->route('user.dashboard');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
