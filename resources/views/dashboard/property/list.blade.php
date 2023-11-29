@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Image Gallery</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total <span class="text-base">1,257</span> Media.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="#" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-download-cloud"></em><span>Download All</span></a>
                            <a href="#" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-download-cloud"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        @foreach($properties as $item)
                            <div class="col-sm-6 col-lg-4">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/a.jpg">
                                    <img class="w-100 rounded-top" src="{{ asset('dash/assets/images/stock/a.jpg') }}" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <img src="./images/avatar/a-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Dustin Mock</span>
                                            <span class="sub-text">mock@softnio.com</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span>34</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>

@endsection
