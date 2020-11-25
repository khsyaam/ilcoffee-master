    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/beranda"> <img src="{{asset('/assets')}}/img/logo-panjang.svg" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/beranda">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/menu">Menu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/beranda" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Shop
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="/produkbeans">Beans</a>
                                        <a class="dropdown-item" href="/produkapparel">Apparel</a> 
                                    </div>
                                </li>          
                                <li class="nav-item">
                                    <a class="nav-link" href="/kontak">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <!-- uncomment to use this -->
                            <!-- <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a> -->
                            <a href="/checkout">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- search nav just uncomment to use it-->
        <!-- <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> -->
    </header>
    <!-- Header part end-->
