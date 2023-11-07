@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper light-skin">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-lg-8 offset-lg-2">

                        <div class="box box-body p-20 ">
                            <h4 class="text-center">Select Deposit Method</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-lg-4 ">
                                  <div style="border: 1px solid white; margin: 10px; padding: 10px" class="box box-body bg-hexagons-white pull-up">
                                        <div class="media align-items-center p-0">
                                            <div class="text-center">
                                                <a href="{{ route('user.cryptoDeposit') }}"><i style="font-size: 20px" class="fa fa-coins" ></i></a>
                                            </div>
                                            <a href="{{ route('user.cryptoDeposit') }}">
                                                <div>
                                                    <h3 class="no-margin text-bold">Crypto Deposit</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="flexbox align-items-center mt-25">
                                            <div>
                                                <p class="no-margin fw-600"><span class="text-primary">$10</span> - $Unlimited</p>
                                                <p class="no-margin text-warning">Instant Deposit</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="box box-body bg-hexagons-white pull-up">
                                        <div class="media align-items-center p-0">
                                            <div class="text-center">
                                                <a href="#"><i class="cc XRP me-5" title="XRP"></i></a>
                                            </div>
                                            <div>
                                                <h3 class="no-margin text-bold">Ripple</h3>
                                                <span>Real Estate</span>
                                            </div>
                                        </div>
                                        <div class="flexbox align-items-center mt-25">
                                            <div>
                                                <p class="no-margin fw-600"><span class="text-primary">$25.000</span> / $30.000</p>
                                                <p class="no-margin">Sponsored</p>
                                            </div>
                                            <div class="text-end">
                                                <p class="no-margin fw-600"><span class="text-primary">84%</span></p>
                                                <p class="no-margin">9d left</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>


            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
