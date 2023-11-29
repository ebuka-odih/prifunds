@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Subscription Plans</h3>
                           
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                       @foreach($plans as $item)
                        <div class="col-md-6 col-xxl-3">
                            <div class="card card-bordered pricing recommend">
                                <span class="pricing-badge badge bg-primary">{{ $item->tag }}</span>
                                <div class="pricing-head">
                                    <div class="pricing-title">
                                        <h4 class="card-title title">{{ $item->name }}</h4>
                                        <p class="sub-text">Advance level of invest &amp; earn.</p>
                                    </div>
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="h4 fw-500">{{ $item->daily_interest }}%</span>
                                                <span class="sub-text">Daily Interest</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="h4 fw-500">{{ $item->term_days }}</span>
                                                <span class="sub-text">Term Days</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-features">
                                        <li><span class="w-50">Min Deposit</span> - <span class="ms-auto">@money($item->min_deposit) {{ $user->currency }}</span></li>
                                        <li><span class="w-50">Max Deposit</span> - <span class="ms-auto">@money($item->min_deposit) {{ $user->currency }}</span></li>
                                        <li><span class="w-50">Deposit Return</span> - <span class="ms-auto">Yes</span></li>
                                        <li><span class="w-50">Total Return</span> - <span class="ms-auto">{{ $item->total_return() }}%</span></li>
                                    </ul>
                                    <div class="pricing-action">
                                        <button class="btn btn-outline-light">Choose this plan</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        @endforeach

                    </div>
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>

@endsection
