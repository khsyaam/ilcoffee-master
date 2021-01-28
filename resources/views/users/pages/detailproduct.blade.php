@extends('users.master')
@section('title', 'Detail Produk - ilcoffee')
    
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
                <div class="col-lg-12">
                    <div class="product_img_slide owl-carousel">
                        <div class="single_product_img">
                            <img src="{{ asset('/storage/images/'. $produk->foto) }}" alt="#" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single_product_text text-center">
                        <h3>{{ $produk->nama }}</h3>
                        <p>
                            {{ $produk->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->


@endsection