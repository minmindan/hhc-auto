@extends('template.template')
@section('title')
產品介紹
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
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
                            <img src="{{ asset('image/icon/AboutUs/gray_dwon.svg') }}" alt="" />
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
                            @foreach ($product as $product)
                                <img src="{{ $product->img_path ?? '' }}" alt="" />
                            @endforeach

                            <div class="main-img-color"></div>
                        </div>
                        <!-- 頁面導覽塊 -->
                        <div class="page-list">
                            <ul>
                                <li><a href="#equipment-section">設備</a></li>
                                <li><a href="#software-section">軟體</a></li>
                                <li><a href="#parts-section">部品零件</a></li>
                                <li><a href="#consumables-section">耗材</a></li>
                                <li><a href="#maintenance-section">維修</a></li>
                            </ul>
                        </div>
                        <!-- SCROLL示意 -->
                        <div class="scroll-box">
                            <div class="scroll-img">
                                <img src="{{ asset('image/icon/AboutUs/gray_dwon.svg') }}" alt="" />
                            </div>
                            <div class="scroll-text">
                                <span>SCROLL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="product-container">
            <!-- 設備區塊 -->
            <div id="equipment-section">
                <!-- 區塊內容 -->
                <div class="equipment-content">
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
                                <!-- 指示 -->
                                <a href="/equipment" class="more-box">
                                    <span>MORE</span>
                                    <div class="more-img">
                                        <img src="{{ asset('image/index-icon/more_right.svg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- 內容區塊 -->
                            <div class="content">
                                @foreach ($equipment as $eq)
                                    <!-- 圖片區塊 -->
                                    <div class="product-content">
                                        <!-- 圖片 -->
                                        <div class="image-box">
                                            <img src="{{ $eq->primary_img ?? '' }}" alt="">
                                        </div>
                                        <!-- 文字說明 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>{{ $eq->product_name ?? '' }}</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>{{ $eq->model ?? '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- 軟體區塊 -->
            <div id="software-section">
                <!-- 區塊內容 -->
                <div class="software-content">
                    <!-- 背景文字區塊 -->
                    <div class="left-section">
                        <div class="white-space">
                            <h1>Software</h1>
                        </div>
                    </div>
                    <!-- 主要內容區塊 -->
                    <div class="right-section">
                        <div class="main-section">
                            <!-- 標題區塊 -->
                            <div class="tittle-box">
                                <!-- 標題名稱 -->
                                <div class="tittle-text">
                                    <h3>軟體</h3>
                                </div>
                                <!-- 指示 -->
                                <a href="/software" class="more-box">
                                    <span>MORE</span>
                                    <div class="more-img">
                                        <img src="{{ asset('image/index-icon/more_right.svg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- 內容區塊 -->
                            <div class="content">
                                @foreach ($software as $so)
                                    <!-- 圖片區塊 -->
                                    <div class="product-content">
                                        <!-- 圖片 -->
                                        <div class="image-box">
                                            <img src="{{ $so->primary_img ?? '' }}" alt="">
                                        </div>
                                        <!-- 文字說明 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>{{ $so->product_name ?? '' }}</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>{{ $so->model ?? '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- 部品零件區塊 -->
            <div id="parts-section">
                <!-- 區塊內容 -->
                <div class="parts-content">
                    <!-- 背景文字區塊 -->
                    <div class="left-section">
                        <div class="white-space">
                            <h1>Parts</h1>
                        </div>
                    </div>
                    <!-- 主要內容區塊 -->
                    <div class="right-section">
                        <div class="main-section">
                            <!-- 標題區塊 -->
                            <div class="tittle-box">
                                <!-- 標題名稱 -->
                                <div class="tittle-text">
                                    <h3>部品零件</h3>
                                </div>
                                <!-- 指示 -->
                                <a href="/parts" class="more-box">
                                    <span>MORE</span>
                                    <div class="more-img">
                                        <img src="{{ asset('image/index-icon/more_right.svg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- 內容區塊 -->
                            <div class="content">
                                @foreach ($components as $cm)
                                    <!-- 圖片區塊 -->
                                    <div class="product-content">
                                        <!-- 圖片 -->
                                        <div class="image-box">
                                            <img src="{{ $cm->primary_img ?? '' }}" alt="">
                                        </div>
                                        <!-- 文字說明 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>{{ $cm->product_name ?? '' }}</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>{{ $cm->model ?? '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- 耗材區塊 -->
            <div id="consumables-section">
                <!-- 區塊內容 -->
                <div class="consumables-content">
                    <!-- 背景文字區塊 -->
                    <div class="left-section">
                        <div class="white-space">
                            <h1>Consumables</h1>
                        </div>
                    </div>
                    <!-- 主要內容區塊 -->
                    <div class="right-section">
                        <div class="main-section">
                            <!-- 標題區塊 -->
                            <div class="tittle-box">
                                <!-- 標題名稱 -->
                                <div class="tittle-text">
                                    <h3>耗材</h3>
                                </div>
                                <!-- 指示 -->
                                <a href="/consumables" class="more-box">
                                    <span>MORE</span>
                                    <div class="more-img">
                                        <img src="{{ asset('image/index-icon/more_right.svg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- 內容區塊 -->
                            <div class="content">
                                @foreach ($consumables as $cn)
                                    <!-- 圖片區塊 -->
                                    <div class="product-content">
                                        <!-- 圖片 -->
                                        <div class="image-box">
                                            <img src="{{ $cn->primary_img ?? '' }}" alt="">
                                        </div>
                                        <!-- 文字說明 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>{{ $cn->product_name ?? '' }}</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>{{ $cn->model ?? '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- 維修區塊 -->
            <div id="maintenance-section">
                <!-- 區塊內容 -->
                <div class="maintenance-content">
                    <!-- 背景文字區塊 -->
                    <div class="left-section">
                        <div class="white-space">
                            <h1>Maintenance</h1>
                        </div>
                    </div>
                    <!-- 主要內容區塊 -->
                    <div class="right-section">
                        <div class="main-section">
                            <!-- 標題區塊 -->
                            <div class="tittle-box">
                                <!-- 標題名稱 -->
                                <div class="tittle-text">
                                    <h3>維修</h3>
                                </div>
                                <!-- 指示 -->
                                <a href="/maintenance" class="more-box-fixed">
                                    <span>MORE</span>
                                    <div class="more-img">
                                        <img src="{{ asset('image/index-icon/more_right.svg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <!-- 內容區塊 -->
                            <div class="content">
                                @foreach ($maintenance as $ma)
                                @if (!$ma->primary_img == null)

                                    <!-- 圖片區塊 -->
                                    <div class="product-content">
                                        <!-- 圖片 -->
                                        <div class="image-box">
                                            <img src="{{ $ma->primary_img ?? '' }}" alt="">
                                        </div>
                                        <!-- 文字說明 -->
                                        <div class="product-directions">
                                            <div class="product-name">
                                                <h3>{{ $ma->product_name ?? '' }}</h3>
                                            </div>
                                            <div class="product-number">
                                                <p>{{ $ma->model ?? '' }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    @elseif ($ma->primary_img == null)
                                        <!-- 若無圖片則顯示此區塊 -->
                                        <div class="porduct-content2">
                                            <div class="text-box">
                                                <p>{!! $ma->illustrate ?? '' !!}</p>
                                            </div>
                                        </div>
                                    @endif

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
