@extends('dashboard.layout.app')
@section('content')

<div class="content-wrapper light-skin">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12 col-xl-12">
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-3 col-md-6 ">
                                <div class="box pull-up">
                                    <div class="box-body">
                                        <div class="flexbox align-items-center">
                                            <div>
                                                <p class="no-margin fw-700 fs-16">Balance</p>
                                            </div>

                                        </div>
                                        <div class=" mt-20">
                                            <h2 class="fw-500 mb-0"> @money($user->balance) <span class="text-fade">{{ $user->currency ? : "USD" }}</span></h2>
                                            <p style="visibility: hidden" class="mb-5"><small class="fs-14 text-success "><i class="fa fa-caret-up text-success me-1"></i>0.50%</small></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 ">
                                <div class="box pull-up">
                                    <div class="box-body">
                                        <div class="flexbox align-items-center">
                                            <div>
                                                <p class="no-margin fw-700 fs-16">Profit</p>
                                            </div>
                                        </div>
                                        <div class=" mt-20">
                                            <h2 class="fw-500 mb-0"> @money($user->profit) <span class="text-fade">{{ $user->currency ? : "USD" }}</span></h2>
                                            <p style="visibility: hidden" class="mb-5"><small class="fs-14 text-success "><i class="fa fa-caret-up text-success me-1"></i>0.50%</small></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 d-lg-block">
                                <div class="box pull-up">
                                    <div class="box-body">
                                        <div class="flexbox align-items-center">
                                            <div>
                                                <p class="no-margin fw-700 fs-16">Invested</p>
                                            </div>
                                        </div>
                                        <div class=" mt-20">
                                            <h2 class="fw-500 mb-0"> @money($user->profit) <span class="text-fade">{{ $user->currency ? : "USD" }}</span></h2>
                                            <p style="visibility: hidden" class="mb-5"><small class="fs-14 text-success "><i class="fa fa-caret-up text-success me-1"></i>0.50%</small></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 d-lg-block">
                                <div class="box pull-up">
                                    <div class="box-body">
                                        <div class="flexbox align-items-center">
                                            <div>
                                                <p class="no-margin fw-700 fs-16">Total Deposit</p>
                                            </div>
                                        </div>
                                        <div class=" mt-20">
                                            <h2 class="fw-500 mb-0"> @money($user->profit) <span class="text-fade">{{ $user->currency ? : "USD" }}</span></h2>
                                            <p style="visibility: hidden" class="mb-5"><small class="fs-14 text-success "><i class="fa fa-caret-up text-success me-1"></i>0.50%</small></p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-9">

                    <div class="box box-body p-20">

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_0e222"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                                new TradingView.widget(
                                    {
                                        "width": "100%",
                                        "height": "500",
                                        "symbol": "NASDAQ:AAPL",
                                        "interval": "D",
                                        "timezone": "Etc/UTC",
                                        "theme": "dark",
                                        "style": "1",
                                        "locale": "en",
                                        "enable_publishing": false,
                                        "allow_symbol_change": true,
                                        "container_id": "tradingview_0e222"
                                    }
                                );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>

                <div class="col-xl-3 col-12">
                    <div class="box">

                        <div class="box-body ">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                                    {
                                        "colorTheme": "dark",
                                        "dateRange": "12M",
                                        "exchange": "US",
                                        "showChart": true,
                                        "locale": "en",
                                        "largeChartUrl": "",
                                        "isTransparent": false,
                                        "showSymbolLogo": false,
                                        "showFloatingTooltip": false,
                                        "width": "100%",
                                        "height": "600",
                                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                        "gridLineColor": "rgba(240, 243, 250, 0)",
                                        "scaleFontColor": "rgba(106, 109, 120, 1)",
                                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                                    }
                                </script>
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
