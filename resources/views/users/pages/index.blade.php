@extends('users.master')
@section('title', 'Beranda - ilcoffee')
    
@section('content')
        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1>il coffee</h1>
                                <p>Coffee shop, beans and apparel. Hubungi kami, jika Anda membutuhkan saran untuk kebutuhan kopi di rumah/kantor/cafe atau ingin mencoba produk kami.</p>
                                <a href="product_list.html" class="btn_1">Belanja Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_img">
                <img src="{{asset('/assets')}}/img/banner.jpg" alt="#" class="img-fluid">
                <img src="{{asset('/assets')}}/img/banner_pattern.svg " alt="#" class="pattern_img img-fluid">
            </div>
        </section>
        <!-- banner part start-->
    
        <!-- product list start-->
        <section class="single_product_list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_product_iner">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_product_img">
                                        <img src="{{asset('/assets')}}/img/beans.jpg" class="img-fluid" alt="#">
                                        <img src="{{asset('/assets')}}/img/product_overlay.svg" alt="#" class="product_overlay img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-6">
                                    <div class="single_product_content">
                                        <h5>Mulai dari IDR55</h5>
                                        <h2> <a href="single-product.html">Aroma, Rasa, Karya Perjalanan Kopi yang kami Roast sendiri.</a> </h2>
                                        <a href="product_list.html" class="btn_3">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_iner">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_product_img">
                                        <img src="{{asset('/assets')}}/img/apparel.jpg" class="img-fluid" alt="#">
                                        <img src="{{asset('/assets')}}/img/product_overlay.svg" alt="#" class="product_overlay img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-6">
                                    <div class="single_product_content">
                                        <h5>Mulai dari IDR35</h5>
                                        <h2> <a href="single-product.html">Apparel merchandise dan beberapa alat kopi yang kami buat sendiri</a> </h2>
                                        <a href="product_list.html" class="btn_3">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_iner">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_product_img">
                                        <img src="{{asset('/assets')}}/img/cappuchino.jpg" class="img-fluid" alt="#">
                                        <img src="{{asset('/assets')}}/img/product_overlay.svg" alt="#" class="product_overlay img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-6">
                                    <div class="single_product_content">
                                        <h5>Mulai dari IDR10</h5>
                                        <h2> <a href="single-product.html">Berbagai macam Minum Kopi yang diseduh dengan berbagai macam teknik</a> </h2>
                                        <a href="product_list.html" class="btn_3">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product list end-->
    
    
        <!-- trending item start-->
        <section class="trending_items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_tittle text-center">
                            <h2>Trending Items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <div class="single_product_item_thumb">
                                <img src="{{asset('/assets')}}/img/garut.jpg" alt="#" class="img-fluid">
                            </div>
                            <h3> <a href="single-product.html">Garut 200g Light Roasted</a> </h3>
                            <p>Mulai dari IDR45</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="{{asset('/assets')}}/img/acehgayo.jpg" alt="#" class="img-fluid">
                            <h3> <a href="single-product.html">Aceh Gayo 200g Light Roasted</a> </h3>
                            <p>Mulai dari IDR45</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="{{asset('/assets')}}/img/sidikalang.jpg" alt="#" class="img-fluid">
                            <h3> <a href="single-product.html">Sidikalang 200g Light Roasted</a> </h3>
                            <p>Mulai dari IDR45</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending item end-->
    
        <!-- feature part here -->
        <section class="feature_part section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="feature_part_tittle">
                            <h3>Credibly innovate in Coffee Roaster and Apparel with International standards.</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="feature_part_content">
                            <h4>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</h4>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_feature_part">
                            <img src="{{asset('/assets')}}/img/icon/feature_icon_1.svg" alt="#">
                            <h4>Credit Card Support</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_feature_part">
                            <img src="{{asset('/assets')}}/img/icon/feature_icon_2.svg" alt="#">
                            <h4>Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_feature_part">
                            <img src="{{asset('/assets')}}/img/icon/feature_icon_3.svg" alt="#">
                            <h4>Free Delivery</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_feature_part">
                            <img src="{{asset('/assets')}}/img/icon/feature_icon_4.svg" alt="#">
                            <h4>Product with Gift</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature part end --> 

@endsection