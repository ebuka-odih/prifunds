@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">


                    <div class="buysell-title text-center">
                        <h2 class="title mb-3">Crypto Deposit</h2>
                    </div><!-- .buysell-title -->
                    <hr>
                    <h5 class="mt-3 mb-3 text-center text-warning">Amount to Send @money($amount) {{ auth()->user()->currency }}</h5>
                    <div class="buysell-block" >

                        <livewire:wallet />


                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

    <script src="{{ asset('js/qrcode.js') }}"></script>
    <script src="{{ asset('js/qrcode.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const paymentMethodSelect = document.getElementById("paymentMethodSelect");
            const selectedWalletAddress = document.getElementById("selectedWalletAddress");

            paymentMethodSelect.addEventListener("change", function() {
                const selectedOption = paymentMethodSelect.options[paymentMethodSelect.selectedIndex];
                const paymentMethodId = selectedOption.value;

                // Make an AJAX request to fetch the wallet address
                fetch(`/fetch-wallet-address/${paymentMethodId}`)
                    .then(response => response.json())
                    .then(data => {
                        selectedWalletAddress.textContent = data.value;
                    })
                    .catch(error => {
                        console.error("Error fetching wallet address:", error);
                        selectedWalletAddress.textContent = "Error fetching wallet address";
                    });
            });
        });
    </script>

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#payment-method-select').on('change', function () {--}}
{{--                var selectedName = $(this).val();--}}
{{--                if (selectedName) {--}}
{{--                    // Send an AJAX request to fetch the value--}}
{{--                    $.ajax({--}}
{{--                        type: 'GET',--}}
{{--                        url: 'fetch-payment-value', // Define the route in your Laravel routes file--}}
{{--                        data: {--}}
{{--                            name: selectedName,--}}
{{--                        },--}}
{{--                        success: function (response) {--}}
{{--                            $('#payment-method-value').html(response);--}}
{{--                        },--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    $('#payment-method-value').html('');--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
