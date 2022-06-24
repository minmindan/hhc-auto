<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>興和川自動化有限公司</title>
    <link rel="icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">
    <meta name="keywords" content="興和川自動化,半導體封裝,工業4.0,半導體設備,自動化生產,履歷管理">
    <meta name="description"
        content="半導體封裝業界經歷了崛起，成長等趨勢轉變後，接下來面臨著工業4.0的需求與挑戰，需要更加智能化的自動化生產來做量產的履歷管理。
興和川自動化有限公司由一群在業界耕耘了20年以上的有志者來提供更專業，高價值的服務，幫助客戶增加競爭力。對於半導體上片Fasford設備更有著service20年以上的經驗。
">
    <script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/index-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerstamped.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav-list.css') }}">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            position: relative;
        }

        * {
            box-sizing: border-box;
            user-select: none;
        }

        .bgblue {
            background-color: #0146a8 !important;
        }

        .op {
            animation-name: op;
            animation-duration: .2s;
            animation-fill-mode: forwards;
        }

        @keyframes op {
            0% {
                opacity: 1;
                width: 100%;
            }

            100% {
                opacity: 0;
                width: 0;
            }
        }

        .onpp {
            animation-name: onpp;
            animation-duration: .2s;
            animation-fill-mode: forwards;
        }

        @keyframes onpp {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .none {
            display: none;
        }

        .noneimportant {
            display: none !important;
        }
    </style>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-pagination,
        .swiper-button-next,
        .swiper-button-prev {
            z-index: 1;
        }
    </style>

    <style>
        #scrool {
            display: flex;
            height: unset !important;
        }

        #banner #scrool .scrool-box {
            height: 120px;
            overflow: hidden;
            animation: scroll 1.2s infinite;
        }

        #banner #scrool .scrool-box img {
            height: 100px;
        }

        @keyframes scroll {
            0% {
                height: 0;
                margin-bottom: 120px;
            }

            100% {
                height: 100px;
                margin-bottom: 20px;
            }
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:visited {
            color: white;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:visited {
            color: white;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/swiper_circle.css') }}">
</head>

<body>
    <!-- 導覽列 -->
    <nav id="nav">
        <div id="focus" class="none">
            <div id="focuslogo" class="focus-logo none">
                <img src="{{ asset('image/index-icon/Logo_white.svg') }}" alt="">
                <img id="XX" style="cursor: pointer;" height="40px"
                    src="{{ asset('image/nav/burger_white_X.svg') }}" alt="">
            </div>
            <div id="focusmain" class="focus-main none">
                <div id="focus-box">
                    <p><a href="/aboutus">關於我們</a></p>
                    <h1><a href="/aboutus">ABOUT US</a></h1>
                    <ul>
                        <li><a href="/aboutus">經營理念</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/aboutus">公司沿革</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/aboutus">公司簡介</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                    </ul>
                </div>
                <div id="focus-box">
                    <p><a href="/product">產品介紹</a></p>
                    <h1><a href="/product">PRODUCT</a></h1>
                    <ul>
                        <li><a href="">設備</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="">軟體</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="">部品零件</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="">耗材</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="">維修</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                    </ul>
                </div>
                <div id="focus-box">
                    <p><a href="/process">產品製作流程</a></p>
                    <h1><a href="/process">PROCESS</a></h1>
                </div>
                <div id="focus-box">
                    <p><a href="/contact">聯絡我們</a></p>
                    <h1><a href="/contact">CONTACT</a></h1>
                </div>
                <div class="btn btn--1" id="focus-button">
                    <h1>E n t r y</h1>
                    <img id="entrywhite" src="{{ asset('image/nav/right_white_entry.svg') }}" alt="">
                    <img id="entryblue" class="none" src="{{ asset('image/nav/blue_white_entry.svg') }}"
                        alt="">
                </div>
            </div>
        </div>
        <div id="bar">
            <div id="logo">
                <img id="minilogo" class="none" src="{{ asset('image/index-icon/small_blue.svg') }}"
                    alt="">
                <img id="biglogo" src="{{ asset('image/index-icon/Logo_white.svg') }}" alt="">
            </div>
            <div id="subnav">
                <div class="hoverbox downlist">
                    <div class="fons"><a href="/aboutus">關於我們</a></div>
                    <img width="15px" style="margin-left:10px ;" src="{{ asset('image/nav/down_white.svg') }}"
                        alt=""></i>
                    <div class="list aboutlist">
                        <p><a style="color: #B4B4B4;" href="/aboutus">經營理念</a></p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p><a style="color: #B4B4B4;" href="/aboutus">公司沿革</a></p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p><a style="color: #B4B4B4;" href="/aboutus">公司簡介</a></p>
                    </div>
                </div>
                <div class="hoverbox downlist">
                    <div class="fons"><a href="/product">產品介紹</a></div>
                    <img width="15px" style="margin-left:10px ;" src="{{ asset('image/nav/down_white.svg') }}"
                        alt=""></i>
                    <div class="list productlist">
                        <p><a style="color: #B4B4B4;" href="/product">設備</a></p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p><a style="color: #B4B4B4;" href="/product">軟體</a></p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p><a style="color: #B4B4B4;" href="/product">部品零件</a></p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p><a style="color: #B4B4B4;" href="/product">耗材</a></p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p><a style="color: #B4B4B4;" href="/product">維修</a></p>
                    </div>
                </div>
                <div class="hoverbox">
                    <div class="fons"><a href="/process">產品製作流程</a></div>
                </div>
                <div class="hoverbox">
                    <div id="news" class="fons"><a>最新消息</a></div>
                </div>
                <div class="hoverbox">
                    <div class="fons"><a href="/contact">聯絡我們</a></div>
                </div>
                @auth
                    <div class="hoverbox downlist">
                        <div class="fons background"><a href="">後台管理</a></div>
                        <img width="15px" style="margin-left:10px ;" src="{{ asset('image/nav/down_white.svg') }}"
                            alt=""></i>
                        <div class="list backendlist">
                            <p><a style="color: #B4B4B4;" href="/topics-manage">內容編輯</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="">Banner</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="">產品編輯</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="/contact/list">表單回報</a></p>
                        </div>
                    </div>
                @endauth
            </div>
            <div id="bglist">
                <div class="stuffing"></div>
                <div class="stuffing"></div>
            </div>
        </div>
    </nav>
    <!-- Banner -->
    <div id="banner">
        <div id="scrool">
            <div class="scrool-box">
                <img src="{{ asset('image/index-icon/white_dwon.svg') }}" alt="">
            </div>
            <h1>SCROLL</h1>
        </div>
        <div class="swiper banner swiper-no-swiping" style="width: 100%;height: calc(100vh + 5px) ;">
            <div class="swiper-wrapper swiper-no-swiping" style="width: 100%; height: 100%;">
                @foreach ($banners as $banner)
                <div class="swiper-slide"><video muted="true" preload="auto" loop="true" autoplay="true"
                    src="{{$banner->img_path}}"></video></div>
                @endforeach
                {{-- <div class="swiper-slide"><video muted="true" preload="auto" loop="true" autoplay="true"
                        src="{{ asset('image/index-video/index-banner-1.mp4') }}"></video></div>
                <div class="swiper-slide"><video muted="true" preload="auto" loop="true" autoplay="true"
                        src="{{ asset('image/index-video/index-banner-2.mp4') }}"></video></div>
                <div class="swiper-slide"><video muted="true" preload="auto" loop="true" autoplay="true"
                        src="{{ asset('image/index-video/index-banner-2.mp4') }}"></video></div> --}}
            </div>
            <div class="swiper-pagination" style="z-index: 1;"></div>
        </div>
    </div>
    <main id="main" class="none">
        <!-- product -->
        <div id="12"></div>
        <div id="product">
            <div id="producttitle">
                <h1>Product</h1>
                <div class="productsubtitle">
                    <div class="productmoretitle">產品介紹</div>
                    <a class="productmore">more　<img src="{{ asset('image/index-icon/more_right.svg') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="product">
                <div class="swiper-wrapper">
                    <div class="swiper-slide productmain">
                        <div class="productbox">


                            {{-- <img src="./image/new/ma.png" alt=""> --}}


                            @foreach ($equipment as $eq)
                                @if ($eq->primary == 1)
                                    <div class="proimg">
                                        <img src="{{ $eq->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $eq->product_name }}</h1>
                                        <div class="product-types-model">{{ $eq->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($software as $so)
                                @if ($so->primary == 1)
                                    <div class="proimg">
                                        <img src="{{ $so->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $so->product_name }}</h1>
                                        <div class="product-types-model">{{ $so->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($components as $cm)
                                @if ($cm->primary == 1)
                                    <div class="proimg">
                                        <img src="{{ $cm->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cm->product_name }}</h1>
                                        <div class="product-types-model">{{ $cm->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($consumables as $cn)
                                @if ($cn->primary == 1)
                                    <div class="proimg">
                                        <img src="{{ $cn->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cn->product_name }}</h1>
                                        <div class="product-types-model">{{ $cn->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($maintenance as $ma)
                                @if ($ma->primary == 1)
                                    <div class="proimg">
                                        <img src="{{ $ma->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $ma->product_name }}</h1>
                                        <div class="product-types-model">{{ $ma->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach









                            {{-- <div class="product-types">
                                <h1 class="product-types-title">商品名</h1>
                                <div class="product-types-model">型號型號型號型號型號型號</div>
                                <div class="product-types-more">MORE　　<img
                                        src="{{ asset('image/index-icon/more_right.svg') }}" alt=""></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            @foreach ($equipment as $eq)
                                @if ($eq->primary == 2)
                                    <div class="proimg">
                                        <img src="{{ $eq->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $eq->product_name }}</h1>
                                        <div class="product-types-model">{{ $eq->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($software as $so)
                                @if ($so->primary == 2)
                                    <div class="proimg">
                                        <img src="{{ $so->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $so->product_name }}</h1>
                                        <div class="product-types-model">{{ $so->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($components as $cm)
                                @if ($cm->primary == 2)
                                    <div class="proimg">
                                        <img src="{{ $cm->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cm->product_name }}</h1>
                                        <div class="product-types-model">{{ $cm->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($consumables as $cn)
                                @if ($cn->primary == 2)
                                    <div class="proimg">
                                        <img src="{{ $cn->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cn->product_name }}</h1>
                                        <div class="product-types-model">{{ $cn->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($maintenance as $ma)
                                @if ($ma->primary == 2)
                                    <div class="proimg">
                                        <img src="{{ $ma->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $ma->product_name }}</h1>
                                        <div class="product-types-model">{{ $ma->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach




                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            @foreach ($equipment as $eq)
                                @if ($eq->primary == 3)
                                    <div class="proimg">
                                        <img src="{{ $eq->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $eq->product_name }}</h1>
                                        <div class="product-types-model">{{ $eq->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($software as $so)
                                @if ($so->primary == 3)
                                    <div class="proimg">
                                        <img src="{{ $so->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $so->product_name }}</h1>
                                        <div class="product-types-model">{{ $so->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($components as $cm)
                                @if ($cm->primary == 3)
                                    <div class="proimg">
                                        <img src="{{ $cm->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cm->product_name }}</h1>
                                        <div class="product-types-model">{{ $cm->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($consumables as $cn)
                                @if ($cn->primary == 3)
                                    <div class="proimg">
                                        <img src="{{ $cn->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cn->product_name }}</h1>
                                        <div class="product-types-model">{{ $cn->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($maintenance as $ma)
                                @if ($ma->primary == 3)
                                    <div class="proimg">
                                        <img src="{{ $ma->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $ma->product_name }}</h1>
                                        <div class="product-types-model">{{ $ma->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach




                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            @foreach ($equipment as $eq)
                                @if ($eq->primary == 4)
                                    <div class="proimg">
                                        <img src="{{ $eq->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $eq->product_name }}</h1>
                                        <div class="product-types-model">{{ $eq->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($software as $so)
                                @if ($so->primary == 4)
                                    <div class="proimg">
                                        <img src="{{ $so->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $so->product_name }}</h1>
                                        <div class="product-types-model">{{ $so->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($components as $cm)
                                @if ($cm->primary == 4)
                                    <div class="proimg">
                                        <img src="{{ $cm->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cm->product_name }}</h1>
                                        <div class="product-types-model">{{ $cm->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($consumables as $cn)
                                @if ($cn->primary == 4)
                                    <div class="proimg">
                                        <img src="{{ $cn->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cn->product_name }}</h1>
                                        <div class="product-types-model">{{ $cn->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($maintenance as $ma)
                                @if ($ma->primary == 4)
                                    <div class="proimg">
                                        <img src="{{ $ma->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $ma->product_name }}</h1>
                                        <div class="product-types-model">{{ $ma->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach




                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            @foreach ($equipment as $eq)
                                @if ($eq->primary == 5)
                                    <div class="proimg">
                                        <img src="{{ $eq->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $eq->product_name }}</h1>
                                        <div class="product-types-model">{{ $eq->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($software as $so)
                                @if ($so->primary == 5)
                                    <div class="proimg">
                                        <img src="{{ $so->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $so->product_name }}</h1>
                                        <div class="product-types-model">{{ $so->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($components as $cm)
                                @if ($cm->primary == 5)
                                    <div class="proimg">
                                        <img src="{{ $cm->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cm->product_name }}</h1>
                                        <div class="product-types-model">{{ $cm->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($consumables as $cn)
                                @if ($cn->primary == 5)
                                    <div class="proimg">
                                        <img src="{{ $cn->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $cn->product_name }}</h1>
                                        <div class="product-types-model">{{ $cn->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($maintenance as $ma)
                                @if ($ma->primary == 5)
                                    <div class="proimg">
                                        <img src="{{ $ma->primary_img }}" alt="">
                                    </div>
                                    <div class="product-types">
                                        <h1 class="product-types-title">{{ $ma->product_name }}</h1>
                                        <div class="product-types-model">{{ $ma->model }}</div>
                                        <div class="product-types-more">MORE　　<img
                                                src="{{ asset('image/index-icon/more_right.svg') }}"
                                                alt=""></div>
                                    </div>
                                @endif
                            @endforeach




                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"><img src="{{ asset('image/index-icon/gray_right.svg') }}"
                        alt="">
                </div>
                <div class="swiper-button-prev"><img src="{{ asset('image/index-icon/gray_left.svg') }}"
                        alt=""></div>
            </div>
        </div>
        <!-- aboutus -->
        <div id="about_us">
            <div class="about_background">
                <div class="about_main">
                    <h1 class="about_us_title">About us</h1>
                    <p>關於我們</p>
                    <p class="pmain">以誠為本、追求創新、培育未來、滿足客戶</p>
                    <button>more　　<img class="btnimg" src="{{ asset('image/index-icon/more_right_white.svg') }}"
                            alt=""></button>
                </div>
                <img src="{{ $abus[0]->img_path ?? '' }}" alt="">
            </div>
        </div>
        <!-- topics -->
        <div id="topics">
            <h1 class="topics_title">TOPICS</h1>
            <p>最新消息</p>
            <div class="topicsmain">

                <div class="topics">
                    <p class="time">{{ $datas[0]->time ?? '' }}</p>
                    <h4 class="topicsmain_title">
                        {{ $datas[0]->title ?? '' }}
                    </h4>
                    <p class="topicsmain_content">
                        {{ $datas[0]->content ?? '' }}
                    </p>
                </div>
                <div class="topics">
                    <p class="time">{{ $datas[1]->time ?? '' }}</p>
                    <h4 class="topicsmain_title">
                        {{ $datas[1]->title ?? '' }}
                    </h4>
                    <p class="topicsmain_content">
                        {{ $datas[1]->content ?? '' }}
                    </p>
                </div>
                <div class="topics">
                    <p class="time">{{ $datas[2]->time ?? '' }}</p>
                    <h4 class="topicsmain_title">
                        {{ $datas[2]->title ?? '' }}
                    </h4>
                    <p class="topicsmain_content">
                        {{ $datas[2]->content ?? '' }}
                    </p>
                </div>
            </div>
        </div>
        <!-- COMPANY -->
        <div id="company">
            <h1 class="company_title">COMPANY</h1>
            <p>合作客戶</p>
            <div class="com">
                @foreach ($companys as $company)
                    <div class="com_img">
                        <img src="{{ asset($company->com_img) }}" alt="">
                    </div>
                @endforeach
                {{-- <div class="com_img">
                    <img src="./image/SVG_彩圖/南茂.svg" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/力成.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/日月光.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/同欣.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/典範.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/矽品.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/金屬中心.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/南茂.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/美光.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/國祥.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/晶測.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/晶電.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/華東.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/華泰.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/隆達.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/群豐.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/福懋.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/穩懋.svg')}}" alt="">
                </div>
                <div class="com_img">
                    <img src="{{asset('image/SVG_彩圖/SanDisk.svg')}}" alt="">
                </div> --}}
            </div>
        </div>
    </main>
    <div id="footer-stamped" class="none">
        <div id="footer-stamped-box">
            <div>
                <h1>CONTACT<br>US</h1>
                <h2>聯絡我們</h2>
            </div>
            <div>
                <p>地址：高雄市楠梓區藍昌路349巷25之7號 </p>
                <p>電話：一線: (07)360-6851/ 二線: (07)360-6871</p>
                <p>傳真：(07)360-6838 </p>
                <p>業務:mc@hhc-auto.com</p>
                <p>設計開發: aaron@hhc-auto.com</p>
            </div>
        </div>
    </div>
    <footer id="footer" class="none">
        <div id="footer-logo">
            <img src="{{ asset('image/nav/white_logo.png') }}" alt="">
        </div>
        <div id="footer-main">
            <div class="footer-btn subaboutbtn" tabindex="0">
                <h1 id="footeraboutus">關於我們 <img src="{{ asset('image/nav/down_white.svg') }}" alt="">
                </h1>
                <div class="footer-aboutlist">
                    <p><a href="/aboutus">經營理念</a></p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                    <p><a href="/aboutus">公司沿革</a></p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                    <p><a href="/aboutus">公司簡介</a></p>
                </div>
            </div>
            <div class="footer-btn subservebtn" tabindex="0">
                <h1>支援服務 <img src="{{ asset('image/nav/down_white.svg') }}" alt=""></h1>
                <div class="footer-servelist">
                    <p><a href="/aboutus">關於我們</a></p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                    <p><a href="/aboutus#company-profile">如何前往</a></p>
                </div>
            </div>
            <div class="footer-btn">
                <h1><a target="_blank" href="/termsofservice">網站使用條款</a></h1>
            </div>
            <div class="footer-btn">
                <h1><a target="_blank" href="/privacypolic">隱私權政策</a></h1>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/index-navbar.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
