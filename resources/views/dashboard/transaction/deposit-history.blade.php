@extends('dashboard.layout.app') @section('content') <div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Deposit History</h3>
                        <div class="nk-block-des text-soft">
                            <p>You have total 937 orders.</p>
                        </div>
                    </div>
                    <!-- .nk-block-head-content -->
                </div>
                <!-- .nk-block-between -->
            </div>
            <!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h5 class="title">All Orders</h5>
                                </div>

                                <!-- card-tools -->
                            </div>
                            <!-- .card-title-group -->
                        </div>
                        <!-- .card-inner -->
                        <div class="card-inner p-0">
                            <table class="table table-tranx">
                                <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id">
                                        <span class="">#</span>
                                    </th>
                                    <th class="tb-tnx-info">
                      <span class="tb-tnx-desc d-none d-sm-inline-block">
                        <span>Bill For</span>
                      </span>
                                        <span class="tb-tnx-date d-md-inline-block d-none">
                        <span class="d-md-none">Date</span>
                        <span class="d-none d-md-block">
                          <span>Issue Date</span>
                          <span>Due Date</span>
                        </span>
                      </span>
                                    </th>
                                    <th class="tb-tnx-amount is-alt">
                                        <span class="tb-tnx-total">Total</span>
                                        <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                    </th>
                                    <th class="tb-tnx-action">
                                        <span>&nbsp;</span>
                                    </th>
                                </tr>
                                <!-- tb-tnx-item -->
                                </thead>
                                <tbody>
                                @foreach($deposits as $item)
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="#">
                                            <span>4947</span>
                                        </a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">Enterprize Year Subscrition</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">10-05-2019</span>
                                            <span class="date">10-13-2019</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount is-alt">
                                        <div class="tb-tnx-total">
                                            <span class="amount">$599.00</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot bg-warning">Due</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-action">
                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown">
                                                <em class="icon ni ni-more-h"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                <ul class="link-list-plain">
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- tb-tnx-item -->

                                </tbody>
                            </table>
                        </div>
                        <!-- .card-inner -->
                        <div class="card-inner">
                            <ul class="pagination justify-content-center justify-content-md-start">
                                <li class="page-item">
                                    <a class="page-link" href="#">Prev</a>
                                </li>
                            </ul>
                            <!-- .pagination -->
                        </div>
                        <!-- .card-inner -->
                    </div>
                    <!-- .card-inner-group -->
                </div>
                <!-- .card -->
            </div>
            <!-- .nk-block -->
        </div>
    </div>
</div> @endsection
