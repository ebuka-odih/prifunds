@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">

                <div class="nk-block">
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <ul class="nav nav-tabs nav-tabs-s2 mt-n2" role="tablist">
                                <li class="nav-item" role="presentation">
{{--                                    <Link class="nav-link active" href="{{ route('user.forexHistory') }}">Contact</Link>--}}
                                    <a class="nav-link active"  href="{{ route('user.forexHistory') }}" >Forex Trades</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link"  href="{{ route('user.stockHistory') }}" >Stock Trades</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem11" aria-selected="false" role="tab" tabindex="-1">Notifications</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="title">All Orders</h5>
                                    </div>

                                    <div class="card-search search-wrap" data-search="search">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by order id">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div><!-- card-search -->
                                </div><!-- .card-title-group -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <table class="table table-tranx">
                                    <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Type</th>
                                        <th>Pair</th>
                                        <th>Entry</th>
                                        <th>SL</th>
                                        <th>TP</th>
                                        <th>ROI</th>
                                        <th><i class="fa fa-dot-circle"></i>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($forex as $item)
                                        <tr>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td>{{ $item->symbol }}</td>
                                            <td>{{ $item->execution_time }}</td>
                                            <td>{{ $item->sl }}</td>
                                            <td>{{ $item->tp }}</td>
                                            <td>{{ $item->profit ? : "$ 0.00" }}</td>
                                            <td>{!! $item->status() !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <ul class="pagination justify-content-center justify-content-md-start">

                                </ul><!-- .pagination -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>

@endsection
