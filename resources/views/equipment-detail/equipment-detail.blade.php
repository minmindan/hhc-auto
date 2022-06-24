@extends('template.template')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <style>
        .contact-us a {
            color: #bb1b21;
        }

        .contact-us a:visited {
            color: #bb1b21;
        }
    </style>
@endsection
@section('main')
    <main>
        <!-- 頁面大區塊 -->
        <div id="product-detail">
            <div id="product-section">
                <!-- Comouter -->
                <div class="page-container">
                    <div class="container-tittle">
                        <!-- 英文頁面標題 -->
                        <div class="main-tittle">
                            <h1>{{ $subtitle ?? '' }}</h1>
                        </div>
                        <!-- 頁面名稱 -->
                        <div id="banner" class="sub-tittle">
                            <p>產品介紹／{{ $title ?? '' }}</p>
                        </div>
                    </div>
                    <div class="product-content">
                        <!-- 產品圖片 -->
                        <div class="image-box">
                            <!-- 圖片 -->
                            <div class="product-img">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <img src="{{ $product[0]->primary_img ?? '' }}" alt="">
                                            </div>

                                            @foreach ($product2 as $product2)
                                            <div class="swiper-slide">
                                                <img src="{{ $product2->path ?? '' }}" alt="">
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                <!-- 產品介紹 -->
                                <div class="product-introduction">
                                    <div class="intro-content">
                                        <!-- 產品名稱 -->
                                        <div class="product-name">
                                            <h4>{{ $product[0]->product_name ?? '' }}</h4>
                                        </div>
                                        <!-- 產品款號 -->
                                        <div class="product-number">
                                            <h4>{{ $product[0]->model ?? '' }}</h4>
                                        </div>
                                    </div>
                                    <!-- 引導箭頭 -->
                                    <div class="section-r">
                                        <div class="arrow">
                                            <img src="{{ asset('image/product-detail/red_dwon.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile -->
                <div class="page-container-m">
                    <!-- 上方區塊 標題與圖 -->
                    <div class="top-section">
                        <!-- 標題 -->
                        <div class="container-tittle">
                            <h1>{{ $subtitle ?? '' }}</h1>
                        </div>
                        <!-- 產品圖 -->
                        <div class="product-picture">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ $product[0]->primary_img ?? '' }}" alt="">
                                    </div>

                                    @foreach ($product3 as $product3)
                                    <div class="swiper-slide">
                                        <img src="{{ $product3->path ?? '' }}" alt="">
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 下方區塊 商品資訊與箭頭 -->
                    <div class="bottom-section">
                        <!-- 商品資訊 -->
                        <div class="section-l">
                            <!-- 產品名稱 -->
                            <div class="product-name">
                                <h4>{{ $product[0]->product_name ?? '' }}</h4>
                            </div>
                            <!-- 產品款號 -->
                            <div class="product-number">
                                <h4>{{ $product[0]->model ?? '' }}</h4>
                            </div>
                        </div>
                        <!-- 指引箭頭 -->
                        <div class="section-r">
                            <div class="arrow">
                                <img src="{{ asset('image/product-detail/red_dwon.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="about-product">
                    <!-- 產品訊息 -->
                    <div class="product-info">
                        <!-- 產品規格 -->
                        <div class="product-specification">
                            <div class="specification-tittle">
                                <h3>設備規格</h3>
                            </div>
                            <!-- 規格說明 -->
                            <div class="specification-directions">
                                {!! $product[0]->standard ?? '' !!}
                            </div>
                        </div>
                        <!-- 產品特色 -->
                        <div class="product-feature">
                            <div class="feature-tittle">
                                <h3>設備特色</h3>
                            </div>
                            <!-- 特色說明 -->
                            <div class="feature-content">
                                {!! $product[0]->feature ?? '' !!}
                            </div>
                        </div>
                    </div>
                    <!-- 聯繫 -->
                    <div class="contact-us">
                        <a href="/contact">
                            <span>CONTACT</span>
                            <div class="img"><img src="{{ asset('image/equipment-detail/red_right.svg') }}"
                                    alt=""></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
@section('js')
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {});
    </script>
@endsection
