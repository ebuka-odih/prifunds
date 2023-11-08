@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper light-skin">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-lg-6 offset-lg-2">

                        <div class="box box-body p-20 ">
                            <h4 class="text-center">Crypto Deposit</h4>
                            <hr>
                            <div class="row">
                                <form action="">
                                    <div class="offset-lg-2">
                                        <div class="col-lg-8">
                                            <label for="">Select Wallet</label>
                                            <select name="payment_method_id" class="form-control" id="">
                                                @foreach($wallets as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-8 mt-3">
                                            <label for="">Amount</label>
                                            <input type="number" class="form-control" name="amount">
                                        </div>

                                        <div class="col-lg-6 mt-3">
                                            <button class="btn btn-primary" type="submit">Process Payment</button>
                                        </div>
                                    </div>
                                </form>

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
