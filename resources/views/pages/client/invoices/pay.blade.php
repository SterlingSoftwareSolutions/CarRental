@php
$user = Auth::user();
@endphp

@extends('layouts.main')
@section('content')
<!-- BOOKING HISTORY -->
<div class="mx-auto max-w-[1366px] p-4">
    <h1 class="font-semibold text-lg text-[#707070]">Payment</h1>
    {{-- << CREDIT CARD INFO --}} 
    <div>
        <form action="" id="payment-form" method="post">
            @csrf
            <div id="card_details" class="mt-5 flex flex-col gap-5 relative">
                <input type="text" name="card_holder_name" id="card-holder-name"
                    class="w-full rounded-md border-none bg-white focus:ring-0 shadow-md p-3" placeholder="Name on card">

                <div class="w-full rounded-md border-none bg-white shadow-md px-3">
                    <div id="card-number" class="form-control my-auto py-3"></div>
                </div>

                <div class="w-full rounded-md border-none bg-white shadow-md px-3">
                    <div id="card-cvc" class="form-control py-3"></div>
                </div>

                <div class="w-full rounded-md border-none bg-white shadow-md px-3">
                    <div id="card-expiry" class="form-control py-3"></div>
                </div>

                <div id="card-errors" class="form-control py-3 absolute bottom-0"></div>
                @error('payment')
                    <div id="card-errors" class="form-control py-3 absolute bottom-0">{{$message}}</div>
                @enderror
                <button 
                    type="button"
                    id="card-button"
                    class="rounded-md border-none bg-green-900 text-white shadow-md p-3 w-1/2 ms-auto"
                >
                Pay ${{$invoice->amount}}
                </button>
            </div>
        </form>

        <script src="https://js.stripe.com/v3/"></script>

        <script>
            cardDetails = document.getElementById('card_details');

            const stripe = Stripe('{{ env('STRIPE_KEY') }}');
            const errorElement = document.getElementById('card-errors');
            const form = document.getElementById("payment-form")
            const elements = stripe.elements();

            var elementStyles = {
                base: {
                    color: '#212121',
                    fontSize: '16px',
                    ':focus': {
                        color: '#212121',
                    },

                    '::placeholder': {
                        color: '#757575',
                    },

                    ':focus::placeholder': {
                        color: '#616161',
                    },
                },
                invalid: {
                    color: '#b71c1c',
                    ':focus': {
                        color: '#b71c1c',
                    },
                    '::placeholder': {
                        color: '#e57373',
                    },
                },
            };

            const cardNumberElement = elements.create('cardNumber', {
                style: elementStyles,
                showIcon: true,

            });
            const cardExpiryElement = elements.create('cardExpiry', {
                style: elementStyles
            });
            const cardCvcElement = elements.create('cardCvc', {
                style: elementStyles
            });

            cardNumberElement.mount('#card-number');
            cardExpiryElement.mount('#card-expiry');
            cardCvcElement.mount('#card-cvc');

            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');

            cardButton.addEventListener('click', async (e) => {
                const {
                    paymentMethod,
                    error
                } = await stripe.createPaymentMethod(
                    'card', cardNumberElement, {
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
                );

                if (error) {
                    errorElement.style.display = 'block';
                    errorElement.textContent = error.message;
                } else {
                    errorElement.style.display = 'none';
                    errorElement.textContent = "";

                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'payment_method');
                    hiddenInput.setAttribute('value', paymentMethod.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        </script>
    </div>
    {{-- CREDIT CARD INFO >> --}}
</div>
@endsection