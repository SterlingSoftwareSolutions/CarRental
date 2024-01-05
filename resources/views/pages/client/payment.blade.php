<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

@php
    $user = Auth::user();
@endphp

<body>
    <!-- start navigation -->
    @include('layouts.navigation')
    <!-- end navigation -->

    {{-- Fixes issue with navigation shifting --}}
    &nbsp;

    <!-- section one -->
    <div class="mx-auto max-w-screen-xl gap-4 flex flex-col md:flex-row p-4 mt-24">
            <div class="md:w-1/2">
                <div class="bg-lime-50 border w-full rounded-md p-4 overflow-clip">
                    <!-- car image -->
                    <div class="w-full">
                        <img class="w-full" src="{{ Storage::url($booking->vehicle->images[0]->file_path ?? null) }}">
                    </div>
                    <!-- pickup details -->
                    <table class="w-full mt-5 table-fixed">
                        <tbody>
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">Title</td>
                                <td class="p-2 text-right border-b-2 border-dotted">{{ $booking->vehicle->year}} {{
                                    $booking->vehicle['make']}} {{ $booking->vehicle['model']}} {{
                                    $booking->vehicle['body_type']}}</td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">Pick-up Date & Time</td>
                                <td class="p-2 text-right border-b-2 border-dotted">{{$booking->pickup_time->format('Y-m-d H:i:s');}}</td>
                            </tr>
                            
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">Drop-off Date & Time</td>
                                <td class="p-2 text-right border-b-2 border-dotted">{{$booking->dropoff_time->format('Y-m-d H:i:s');}}</td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">Total Days</td>
                                <td class="p-2 text-right border-b-2 border-dotted">{{ $days}}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">Pick-up Location</td>
                                <td class="p-2 text-right border-b-2 border-dotted">{{ str_replace(' ', ' ', $booking['pickup']) }}</td>
                            </tr>                                                
                            <tr>
                                <td class="p-2">Drop-off Location</td>
                                <td class="p-2 text-right">{{ $booking['dropoff']}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="border-2 border-[#398564] p-8 rounded-md mt-6">
                    <h1 class="text-center text-[#398564] font-semibold text-lg">Order Summary</h1>
                    <!-- order summery -->
                    <table class="w-full mt-5 table-fixed">
                        <tbody>
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">Days</td>
                                <td class="p-2 text-right border-b-2 border-dotted">{{ $days}}</td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">Per Day</td>
                                <td class="p-2 text-right border-b-2 border-dotted">AUD {{ number_format($booking->vehicle['price'], 2)}}</td>
                            </tr>
                            <tr>
                                <td class="p-2 font-bold border-b-2 border-dotted">SUBTOTAL</td>
                                <td class="p-2 font-bold text-right border-b-2 border-dotted">AUD {{ number_format($days * $booking->vehicle->price, 2)}}</td>
                            </tr>
                            <tr>
                                <td class="p-2 border-b-2 border-dotted">2 Weeks Advance</td>
                                <td class="p-2 text-right border-b-2 border-dotted">AUD {{ number_format($amount, 2) }}</td>
                            </tr>
                            <tr>
                                <td class="p-2 mt-2 font-bold text-red-600">Remaining Amount</td>
                                <td class="p-2 font-bold text-right text-red-600">AUD {{ number_format($days * $booking->vehicle->price - $amount, 2)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <form class="md:w-1/2" action="{{route('bookings.pay', ['booking' => $booking])}}" method="post" id="payment-form">
                @csrf
                <div class="bg-lime-50 border rounded-md p-4">
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                        </div>
                    @endif

                    <h1 class="text-lime-800 text-base">Enter your payment details ...</h1>
                    <hr class="my-4 border-lime-800">
                    {{-- << CREDIT CARD INFO --}} 
                    <div class="w-full">
                        <form action="" id="payment-form">
                            <div id="card_details" class="relative flex flex-col gap-5 mt-5">
                                <input type="text" name="card_holder_name" id="card-holder-name"
                                    class="w-full p-3 bg-white border-none rounded-md shadow-md -ml-7 md:ml-0" placeholder="Name on card">

                                <div class="w-full px-3 bg-white border-none rounded-md shadow-md">
                                    <div id="card-number" class="py-3 my-auto form-control"></div>
                                </div>

                                <div class="w-full px-3 bg-white border-none rounded-md shadow-md">
                                    <div id="card-cvc" class="py-3 form-control"></div>
                                </div>

                                <div class="w-full px-3 bg-white border-none rounded-md shadow-md">
                                    <div id="card-expiry" class="py-3 form-control"></div>
                                </div>

                                <div id="card-errors" class="absolute bottom-0 py-3 form-control"></div>

                                <button 
                                    type="button"
                                    id="card-button"
                                    class="w-1/2 p-3 text-white bg-green-900 border-none rounded-md shadow-md ms-auto"
                                >
                                @if($amount)
                                    Pay ${{number_format($amount, 2)}}
                                @else
                                    Proceed
                                @endif
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
            </form>
    </div>
    <!-- end section one -->

    <!-- start navigation -->
    <div class="">
        @include('layouts.footer')
    </div>
    <!-- end navigation -->

</body>

</html>