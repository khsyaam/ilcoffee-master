@extends('users.master')
@section('title', 'Detail Produkap - ilcoffee')
    
@section('content')
    
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-lg-4">
                    <div class="product_img_slide owl-carousel">
                        <div class="single_product_img">
                            <img src="{{ asset('/storage/images/'. $produkap->foto) }}" alt="#" class="img-fluid">
                        </div>
                    </div>
                    <div class="single_product_text text-center">
                        <h3>{{ $produkap->nama }}</h3>
                        <p>
                            {{ $produkap->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->


@endsection