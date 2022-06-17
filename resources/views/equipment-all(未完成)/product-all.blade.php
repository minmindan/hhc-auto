@extends('template.template')
@section('title')
About Us
@endsection
@section('css')

<link rel="stylesheet" href="/css/product-all.css">
<link rel="stylesheet" href="{{asset('css/swiper.css')}}">
@endsection

</head>

<body>
    @section('main')
    <main>

<!-- Banner大圖片 -->
<div id="banner">
    <div class="banner-container">
        <div class="sub-section">
            <!-- 標題區塊&SCROLL -->
            <div class="tittle-en">
                <h3>PRODUCT</h3>
            </div>
            <div class="tittle-ch">
                <h4>產品介紹</h4>
            </div>
            <!-- SCROLL示意 -->
            <div class="scroll-box">
                <div class="scroll-img">
                    <img src="./img/function/gray_dwon.svg" alt="" />
                </div>
                <div class="scroll-text">
                    <span>SCROLL</span>
                </div>
            </div>
            <!-- 灰色色塊 -->
            <div class="sup-bg">
                <div class="color-block"></div>
            </div>
        </div>
        <!-- 公司主圖 -->
        <div class="main-section">
            <div class="banner-img">
                <div class="img">
                    <img src="./img/Rectangle 22.png" alt="" />
                    <div class="main-img-color"></div>
                </div>
                <!-- 頁面導覽塊 -->
                <div class="page-list">
                    <ul>
                        <li>設備</li>
                        <li>軟體</li>
                        <li>部品零件</li>
                        <li>耗材</li>
                        <li>維修</li>
                    </ul>
                </div>
                <!-- SCROLL示意 -->
                <div class="scroll-box">
                    <div class="scroll-img">
                        <img src="./img/function/gray_dwon.svg" alt="" />
                    </div>
                    <div class="scroll-text">
                        <span>SCROLL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="product-single">
    <!-- 商品區塊 -->
    <div id="product-section">
        <!-- 區塊內容 -->
        <div class="product-content">
            <!-- 背景文字區塊 -->
            <div class="left-section">
                <div class="white-space">
                    <h1>Equipment</h1>
                </div>
            </div>
            <!-- 主要內容區塊 -->
            <div class="right-section">
                <div class="main-section">
                    <!-- 標題區塊 -->
                    <div class="tittle-box">
                        <!-- 標題名稱 -->
                        <div class="tittle-text">
                            <h3>設備</h3>
                        </div>
                    </div>
                    <!-- 內容區塊 -->
                    <div class="content">
                        <!-- 該項目的商品圖片 -->
                        <div class="product-items">
                            <!-- 商品 -->
                            <div class="item-content">
                                <!-- 圖片 -->
                                <div class="image-box">
                                    <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                </div>
                                <!-- 文字說明 -->
                                <div class="product-directions">
                                    <div class="product-name">
                                        <h3>商品名稱</h3>
                                    </div>
                                    <div class="product-number">
                                        <p>款號</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 商品 -->
                            <div class="item-content">
                                <!-- 圖片 -->
                                <div class="image-box">
                                    <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                </div>
                                <!-- 文字說明 -->
                                <div class="product-directions">
                                    <div class="product-name">
                                        <h3>商品名稱</h3>
                                    </div>
                                    <div class="product-number">
                                        <p>款號</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 商品 -->
                            <div class="item-content">
                                <!-- 圖片 -->
                                <div class="image-box">
                                    <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                </div>
                                <!-- 文字說明 -->
                                <div class="product-directions">
                                    <div class="product-name">
                                        <h3>商品名稱</h3>
                                    </div>
                                    <div class="product-number">
                                        <p>款號</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 商品 -->
                            <div class="item-content">
                                <!-- 圖片 -->
                                <div class="image-box">
                                    <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                </div>
                                <!-- 文字說明 -->
                                <div class="product-directions">
                                    <div class="product-name">
                                        <h3>商品名稱</h3>
                                    </div>
                                    <div class="product-number">
                                        <p>款號</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 商品 -->
                            <div class="item-content">
                                <!-- 圖片 -->
                                <div class="image-box">
                                    <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                </div>
                                <!-- 文字說明 -->
                                <div class="product-directions">
                                    <div class="product-name">
                                        <h3>商品名稱</h3>
                                    </div>
                                    <div class="product-number">
                                        <p>款號</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- 該項目商品的swiper -->
                        <div class="product-swiper">




                            <div class="swiper mySwiper">
                                <div class="tittle">
                                    <h3>設備</h3>
                                </div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- 商品相關資訊 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>商品名稱</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>款號</p>
                                            </div>
                                        </div>
                                        <!-- 商品圖片 -->
                                        <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- 商品相關資訊 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>商品名稱</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>款號</p>
                                            </div>
                                        </div>
                                        <!-- 商品圖片 -->
                                        <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- 商品相關資訊 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>商品名稱</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>款號</p>
                                            </div>
                                        </div>
                                        <!-- 商品圖片 -->
                                        <img src="./img/equiment/AVM渲染-removebg-preview.png" alt="">
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
    @endsection
    @section('js')
    <!-- Swiper的Js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
        });
    </script>
@endsection
