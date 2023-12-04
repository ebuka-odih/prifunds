@extends('dashboard.layout.app')
@section('content')
    <style>
        .slider {
            width: 100%;
            max-width: 800px;
            height: 350px;
            position: relative;
            /* overflow: hidden; */
        }

        .slide {
            width: 100%;
            max-width: 800px;
            height: 350px;
            position: absolute;
            transition: all 0.5s;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide_btn {
            position: absolute;
            width: 40px;
            height: 40px;
            padding: 10px;
            border: none;
            border-radius: 50%;
            z-index: 10px;
            cursor: pointer;
            background-color: #fff;
            font-size: 18px;
        }

        .slide_btn:active {
            transform: scale(1.1);
        }

        .btn-prev {
            top: 45%;
            left: 2%;
        }

        .btn-next {
            top: 45%;
            right: 2%;
        }

        .slider {
            width: 100%;
            max-width: 800px;
            height: 350px;
            position: relative;
            overflow: hidden;  /* <===  */
            border-radius: 15px;
        }

    </style>

    <div class="nk-content ">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Product Details</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('user.properties') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="row pb-5">
                                    <div class="col-lg-6">
                                        <div class="product-gallery me-xl-1 me-xxl-5">

                                            <div class="slider">

                                                @if ($property->images->count() > 0)
                                                    @foreach ($property->images as $image)
                                                        <div class="slide">
                                                            <img  src="{{ asset($image->image_path) }}" alt="Property Image">
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p>No images available for this product.</p>
                                                @endif

                                                <!-- Control buttons -->
                                                <button class="btn slide_btn btn-next">></button>
                                                <button class="btn slide_btn btn-prev">< </button>
                                            </div>

                                        </div><!-- .product-gallery -->
                                    </div><!-- .col -->
                                    <div class="col-lg-6">
                                        <div class="product-info mt-5 me-xxl-5">
                                            <h4 class="product-price text-primary">$@money($property->price) </h4>
                                            <h2 class="product-title">{{ $property->name }}</h2>
                                            <div class="product-rating">
                                                <ul class="rating">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-half"></em></li>
                                                </ul>
                                                <div class="amount">({{ $property->reviews }} Reviews)</div>
                                            </div><!-- .product-rating -->
                                            <div class="product-excrept text-soft">
                                                <p class="lead">{{ $property->description }}</p>
                                            </div>
                                            <div class="product-meta">
                                                <table class="table table-striped" style="width:100%">
                                                    <tr>
                                                        <th>Room:</th>
                                                        <td>{{ $property->rooms }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Floor:</th>
                                                        <td>{{ $property->floor }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Building Year:</th>
                                                        <td>{{ $property->building_year }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Square Meter:</th>
                                                        <td>{{ $property->square_meter }} Sqr</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Location:</th>
                                                        <td>{{ $property->building_location }}</td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="product-meta">
                                                <h6 class="title">Investment Detail</h6>
                                                <table class="table table-striped" style="width:100%">
                                                    <tr>
                                                        <th>Min Amount:</th>
                                                        <td>{{ $property->min_price }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Return Rate:</th>
                                                        <td>{{ $property->return_rate }}%</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Return for:</th>
                                                        <td>{{ $property->return_for }} Months</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Capital Back:</th>
                                                        <td>{{ $property->capital_back }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Target Duration:</th>
                                                        <td>{{ $property->target_duration }}</td>
                                                    </tr>
                                                </table>
                                            </div><!-- .product-meta -->

                                        </div><!-- .product-info -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                        </div>
                    </div><!-- .nk-block -->

                </div>
            </div>
        </div>
    </div>

    <script>
        "use strict";
        // Select all slides
        const slides = document.querySelectorAll(".slide");

        // loop through slides and set each slides translateX
        slides.forEach((slide, indx) => {
            slide.style.transform = `translateX(${indx * 100}%)`;
        });

        // select next slide button
        const nextSlide = document.querySelector(".btn-next");

        // current slide counter
        let curSlide = 0;
        // maximum number of slides
        let maxSlide = slides.length - 1;

        // add event listener and navigation functionality
        nextSlide.addEventListener("click", function () {
            // check if current slide is the last and reset current slide
            if (curSlide === maxSlide) {
                curSlide = 0;
            } else {
                curSlide++;
            }

            //   move slide by -100%
            slides.forEach((slide, indx) => {
                slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
            });
        });

        // select next slide button
        const prevSlide = document.querySelector(".btn-prev");

        // add event listener and navigation functionality
        prevSlide.addEventListener("click", function () {
            // check if current slide is the first and reset current slide to last
            if (curSlide === 0) {
                curSlide = maxSlide;
            } else {
                curSlide--;
            }

            //   move slide by 100%
            slides.forEach((slide, indx) => {
                slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
            });
        });


    </script>
@endsection
