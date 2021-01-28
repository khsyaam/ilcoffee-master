@extends('users.master')
@section('title', 'Produk Beans - ilcoffee')
    
@section('content')
    
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>product beans</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="#">
                                <input type="text" name="#" placeholder="Search keyword">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        {{-- <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Category 1</a></p>
                                    <p><a href="#">Category 2</a></p>
                                    <p><a href="#">Category 3</a></p>
                                    <p><a href="#">Category 4</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Type 1</a></p>
                                    <p><a href="#">Type 2</a></p>
                                    <p><a href="#">Type 3</a></p>
                                    <p><a href="#">Type 4</a></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            @foreach($produk as $shop)
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    {{-- <img src="{{asset('/assets')}}/img/product/product_list_1.png" alt="#" class="img-fluid"> --}}
                                    <img src="{{ asset('/storage/images/'. $shop->foto) }}" class="img-fluid">
                                    <h3> <a>{{ $shop->nama }}</a> </h3>
                                    <p>Dari {{ $shop->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="load_more_btn text-center">
                            <a href="/produkbeans" class="btn_3">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

@endsection