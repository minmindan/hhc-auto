@extends('template.template')
@section('title')
    About Us
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
                            <h1>equipment</h1>
                        </div>
                        <!-- 頁面名稱 -->
                        <div class="sub-tittle">
                            <p>產品介紹／設備</p>
                        </div>
                    </div>
                    <div class="product-content">
                        <!-- 產品圖片 -->
                        <div class="image-box">
                            <!-- 圖片 -->
                            <div class="product-img">
                                <div class="image">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('image/equipment-detail/productimg.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('image/equipment-detail/productimg.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 產品介紹 -->
                                <div class="product-introduction">
                                    <div class="intro-content">
                                        <!-- 產品名稱 -->
                                        <div class="product-name">
                                            <h4>DUC乾式超音波清潔設備</h4>
                                        </div>
                                        <!-- 產品款號 -->
                                        <div class="product-number">
                                            <h4>款號</h4>
                                        </div>
                                    </div>
                                    <!-- 引導箭頭 -->
                                    <div class="section-r">
                                    <div class="arrow">
                                        <img src="{{asset('image/product-detail/red_dwon.svg')}}" alt="">
                                    </div></div>
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
                            <h1>equipment</h1>
                        </div>
                        <!-- 產品圖 -->
                        <div class="product-picture">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('image/equipment-detail/productimg.png') }}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('image/equipment-detail/productimg.png') }}" alt="">
                                    </div>
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
                                <h4>DUC乾式超音波清潔設備</h4>
                            </div>
                            <!-- 產品款號 -->
                            <div class="product-number">
                                <h4>款號</h4>
                            </div>
                        </div>
                        <!-- 指引箭頭 -->
                        <div class="section-r">
                            <div class="arrow">
                                <img src="{{asset('image/product-detail/red_dwon.svg')}}" alt="">
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
                                <p>1.站點:設備放置在Wire Bonding後/Molding前</p>
                                <p>2.清潔模組長度(mm),L:250</p>
                                <p>3.清潔模組大小(L*W*H):250*87*121</p>
                                <p>4.設備大小(L*W*H):1400*1900*2000</p>
                                <p>5.清潔能力:90%以上</p>
                                <p>6.UPH(不包含視覺):65strip/hr</p>
                            </div>
                        </div>
                        <!-- 產品特色 -->
                        <div class="product-feature">
                            <div class="feature-tittle">
                                <h3>設備特色</h3>
                            </div>
                            <!-- 特色說明 -->
                            <div class="feature-content">
                                <p>1.站點:設備放置在Wire Bonding後/Molding前</p>
                                <p>2.清潔模組長度(mm),L:250</p>
                                <p>3.清潔模組大小(L*W*H):250*87*121</p>
                                <p>4.設備大小(L*W*H):1400*1900*2000</p>
                                <p>5.清潔能力:90%以上</p>
                                <p>6.UPH(不包含視覺):65strip/hr</p>
                            </div>
                        </div>
                    </div>
                    <!-- 聯繫 -->
                    <div class="contact-us">
                        <span>CONTACT</span>
                        <div class="img"><img src="{{asset('image/equipment-detail/red_right.svg')}}" alt=""></div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
@section('js')
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {});
    </script>
@endsection
