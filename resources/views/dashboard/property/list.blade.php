@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title ">All Listed Properties</h3>
                            <p>Explore Our Diverse Collection of Premier Real Estate Listings</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block mt-5">
                    <div class="row g-gs">
                        @foreach($properties as $item)
                            <div class="col-sm-6 col-lg-4">
                            <div class="gallery card card-bordered">
                                <a class="gallery-image popup-image" href="./images/stock/a.jpg">
                                    @foreach ($item->images as $image)
                                        @if($loop->first)
                                            <div class="new-arrivals-img-contnent">
                                                <img class="w-100 rounded-top" src="{{ asset($image->image_path) }}" alt="{{ $item->name }}">
                                            </div>
                                        @endif
                                    @endforeach

                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-info">
                                            <h3 class="">{{ $item->name }}</h3>
                                            <h5 class="text-lead mt-3">@money($item->price) <span class="text-success">{{ auth()->user()->currency }}</span></h5>
                                            <br><br>
                                            <span class="text-lead">Min: </span><span class="text-white mt-5">@money($item->min_price) <span class="text-success">{{ auth()->user()->currency }}</span></span><br>
                                            <span class="text-lead"><i class="icon ni ni-location"></i> </span><span class="text-white mt-5">{{ $item->building_location }} </span>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart-fill"></em><span>{{ $item->reviews }}</span></button>
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
