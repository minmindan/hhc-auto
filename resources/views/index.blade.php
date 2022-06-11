<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./sei.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/btn.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/footerstamped.css">
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
</head>
<body>
    <!-- 導覽列 -->
    <nav id="nav">
        <div id="focus" class="none">
            <div id="focuslogo" class="focus-logo none">
                <img src="./image/Logo_white.svg" alt="">
                <img id="XX" style="cursor: pointer;" height="40px" src="./image/burger_white_X.svg" alt="">
            </div>
            <div id="focusmain" class="focus-main none">
                <div id="focus-box">
                    <p>關於我們</p>
                    <h1>ABOUT US</h1>
                    <ul>
                        <li>經營理念 <img src="./image/white_right.svg" alt=""></li>
                        <li>公司沿革 <img src="./image/white_right.svg" alt=""></li>
                        <li>公司簡介 <img src="./image/white_right.svg" alt=""></li>
                    </ul>
                </div>
                <div id="focus-box">
                    <p>產品介紹</p>
                    <h1>PRODUCT</h1>
                    <ul>
                        <li>設備 <img src="./image/white_right.svg" alt=""></li>
                        <li>軟體 <img src="./image/white_right.svg" alt=""></li>
                        <li>部品零件 <img src="./image/white_right.svg" alt=""></li>
                        <li>耗材 <img src="./image/white_right.svg" alt=""></li>
                        <li>維修 <img src="./image/white_right.svg" alt=""></li>
                    </ul>
                </div>
                <div id="focus-box">
                    <p>產品製作流程</p>
                    <h1>PROCESS</h1>
                </div>
                <div id="focus-box">
                    <p>聯絡我們</p>
                    <h1>CONTACT</h1>
                </div>
                <div class="btn btn--1" id="focus-button">
                    <h1>E n t r y</h1>
                    <img src="./image/right_white_entry.svg" alt="">
                </div>
            </div>
        </div>
        <div id="bar">
            <div id="logo">
                <img id="minilogo" class="none" src="./image/small_blue.svg" alt="">
                <img id="biglogo" src="./image/1x/1x/資產 1.png" alt="">
            </div>
            <div id="subnav">
                <div class="hoverbox downlist">
                    <div class="fons">關於我們</div>
                    <img width="15px" style="margin-left:10px ;" src="./image/down_white.svg" alt=""></i>
                    <div class="list aboutlist">
                        <p>經營理念</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>公司沿革</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>公司簡介</p>
                    </div>
                </div>
                <div class="hoverbox downlist">
                    <div class="fons">產品介紹</div>
                    <img width="15px" style="margin-left:10px ;" src="./image/down_white.svg" alt=""></i>
                    <div class="list productlist">
                        <p>設備</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>軟體</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>部品零件</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>耗材</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>維修</p>
                    </div>
                </div>
                <div class="hoverbox">
                    <div class="fons">產品製作流程</div>
                </div>
                <div class="hoverbox">
                    <div class="fons">最新消息</div>
                </div>
                <div class="hoverbox">
                    <div class="fons">聯絡我們</div>
                </div>
                <div class="hoverbox downlist">
                    <div class="fons background">後台管理</div>
                    <img width="15px" style="margin-left:10px ;" src="./image/down_white.svg" alt=""></i>
                    <div class="list backendlist">
                        <p>關於我們</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>Banner</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>產品編輯</p>
                        <img src="./image/gray_line.svg" alt="">
                        <p>表單回報</p>
                    </div>
                </div>
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
            <img src="./image/white_dwon.svg" alt="">
            <h1>SCROLL</h1>
        </div>
        <div class="swiper banner swiper-no-swiping" style="width: 100%;height: calc(100vh + 5px) ;">
            <div class="swiper-wrapper swiper-no-swiping" style="width: 100%; height: 100%;">
                <div class="swiper-slide"><video muted="true" preload="auto" loop="true" autoplay="true"
                        src="./image/video/shutterstock_1086212468.mp4"></video></div>
                <div class="swiper-slide"><video muted="true" preload="auto" loop="true" autoplay="true"
                        src="./image/video/banner_3.mp4"></video></div>
                <div class="swiper-slide"><video muted="true" preload="auto" loop="true" autoplay="true"
                        src="./image/video/首頁-banner-影2.mp4"></video></div>
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
                    <div class="productmore">more　<img src="./image/more_right.svg" alt=""></div>
                </div>
            </div>
            <div class="product">
                <div class="swiper-wrapper">
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            <div class="proimg">
                                <img src="./image/new/ma.png" alt="">
                            </div>
                            <div class="product-types">
                                <h1 class="product-types-title">商品名</h1>
                                <div class="product-types-model">型號型號型號型號型號型號</div>
                                <div class="product-types-more">MORE　　<img src="./image/more_right.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            <div class="proimg">
                                <img src="./image/new/parts.png" alt="">
                            </div>
                            <div class="product-types">
                                <h1 class="product-types-title">商品名</h1>
                                <div class="product-types-model">型號型號型號型號型號型號</div>
                                <div class="product-types-more">MORE　　<img src="./image/more_right.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            <div class="proimg">
                                <img src="./image/AVM渲染-1.png" alt="">
                            </div>
                            <div class="product-types">
                                <h1 class="product-types-title">商品名</h1>
                                <div class="product-types-model">型號型號型號型號型號型號</div>
                                <div class="product-types-more">MORE　　<img src="./image/more_right.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            <div class="proimg">
                                <img src="./image/AVM渲染-1.png" alt="">
                            </div>
                            <div class="product-types">
                                <h1 class="product-types-title">商品名</h1>
                                <div class="product-types-model">型號型號型號型號型號型號</div>
                                <div class="product-types-more">MORE　　<img src="./image/more_right.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide productmain">
                        <div class="productbox">
                            <div class="proimg">
                                <img src="./image/AVM渲染-1.png" alt="">
                            </div>
                            <div class="product-types">
                                <h1 class="product-types-title">商品名</h1>
                                <div class="product-types-model">型號型號型號型號型號型號</div>
                                <div class="product-types-more">MORE　　<img src="./image/more_right.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"><img src="./image/gray_right.svg" alt="">
                </div>
                <div class="swiper-button-prev"><img src="./image/gray_left.svg" alt=""></div>
            </div>
        </div>
        <!-- aboutus -->
            <div id="about_us">
                <div class="about_background">
                    <div class="about_main">
                        <h1 class="about_us_title">About us</h1>
                        <p>關於我們</p>
                        <p class="pmain">以誠為本、追求創新、培育未來、滿足客戶</p>
                        <button>more　　<img class="btnimg" src="./image/more_right_white.svg" alt=""></button>
                    </div>
                    <img src="./image/截圖 2022-05-30 下午2.01.00.png" alt="">
                </div>
            </div>
        <!-- topics -->
        <div id="topics">
            <h1 class="topics_title">TOPICS</h1>
            <p>最新消息</p>
            <div class="topicsmain">
                <div class="topics">
                    <p class="time">TIMETIMETIME</p>
                    <h4 class="topicsmain_title">
                        標題標題標題標題標題標題標題標題
                    </h4>
                    <p class="topicsmain_content">
                        內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容
                    </p>
                </div>
                <div class="topics">
                    <p class="time">TIMETIMETIME</p>
                    <h4 class="topicsmain_title">
                        標題標題標題標題標題標題標題標題
                    </h4>
                    <p class="topicsmain_content">
                        內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容
                    </p>
                </div>
                <div class="topics">
                    <p class="time">TIMETIMETIME</p>
                    <h4 class="topicsmain_title">
                        標題標題標題標題標題標題標題標題
                    </h4>
                    <p class="topicsmain_content">
                        內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容
                    </p>
                </div>
            </div>
        </div>
        <!-- COMPANY -->
        <div id="company">
            <h1 class="company_title">COMPANY</h1>
            <p>合作客戶</p>
            <div class="com">
                <img src="./image/SVG_彩圖/南茂.svg" alt="">
                <img src="./image/SVG_彩圖/典範.svg" alt="">
                <img src="./image/SVG_彩圖/力成.svg" alt="">
                <img src="./image/SVG_彩圖/同欣.svg" alt="">
                <img src="./image/SVG_彩圖/國祥.svg" alt="">
                <img src="./image/SVG_彩圖/日月光.svg" alt="">
                <img src="./image/SVG_彩圖/晶測.svg" alt="">
                <img src="./image/SVG_彩圖/晶電.svg" alt="">
                <img src="./image/SVG_彩圖/矽品.svg" alt="">
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
                <p>地址地址地址地址地址地址地址地址地址地址</p>
                <p>地址地址地址地址地址地址地址地址地址地址</p>
                <p>地址地址地址地址地址地址地址地址地址地址</p>
                <p>地址地址地址地址地址地址地址地址地址地址</p>
                <p>地址地址地址地址地址地址地址地址地址地址</p>
            </div>
        </div>
    </div>
    <footer id="footer" class="none">
        <div id="footer-logo">
            <img src="./image/1x/資產 1.png" alt="">
        </div>
        <div id="footer-main">
            <div class="footer-btn subaboutbtn" tabindex="0">
                <h1>關於我們 <img src="./image/down_white.svg" alt=""></h1>
                <div class="footer-aboutlist">
                    <p>經營理念</p>
                    <img src="./image/gray_line.svg" alt="">
                    <p>公司沿革</p>
                    <img src="./image/gray_line.svg" alt="">
                    <p>公司簡介</p>
                </div>
            </div>
            <div class="footer-btn subservebtn" tabindex="0">
                <h1>支援服務 <img src="./image/down_white.svg" alt=""></h1>
                <div class="footer-servelist">
                    <p>關於我們</p>
                    <img src="./image/gray_line.svg" alt="">
                    <p>如何前往</p>
                </div>
            </div>
            <div class="footer-btn">
                <h1>網站使用條款</h1>
            </div>
            <div class="footer-btn">
                <h1>隱私權政策</h1>
            </div>
        </div>
    </footer>
    <script src="./navbar.js"></script>
    <script src="./index.js"></script>
    <!-- <script>
        var el = document.querySelector('body');
        el.addEventListener('touchmove', show, false);
        el.addEventListener('mousewheel', show, false);
        el.addEventListener('DOMMouseScroll', show, false);
        var banner = document.getElementById('banner');
        var main = document.getElementById('main');
        var product = document.getElementById('product');
        var nav = document.getElementById('nav');
        var subnav = document.getElementById('subnav');
        var minilogo = document.getElementById('minilogo');
        var biglogo = document.getElementById('biglogo');
        var bgrlist = document.querySelectorAll('.stuffing');
        var footer = document.getElementById('footer')
        var footerstamped = document.getElementById('footer-stamped');
        console.log(footerstamped);
        console.log(bgrlist[0]);
        function phone() {
            if (window.innerWidth < 1020) {
                main.classList.remove('op')
                main.classList.add('onpp')
                main.classList.remove('none')
                footer.classList.remove('none')
                footerstamped.classList.remove('none');
                subnav.classList.add('noneimportant');
            }
        }
        phone();
        function show(event) {
            var sy = event.pageY;//頁面
            var cy = event.clientY;//網頁
            var wi = window.innerHeight //頁面高度
            console.log(`頁面:${sy} 螢幕${cy} ${window.innerWidth} ${window.innerHeight}`);
            window.onscroll = () => {
                var windowtop = document.documentElement.scrollTop;
                console.log(windowtop);
                let cH = document.documentElement.clientHeight;
                let sH = document.documentElement.scrollHeight;
                let sT = document.documentElement.scrollTop;
                console.log(cH , sH , sT);
                if (window.innerWidth >= 1020) {
                    if (sH == cH + sT || sH < cH + sT) {
                        banner.classList.remove('onpp')
                        setTimeout("banner.classList.add('none')", 200)
                        banner.classList.add('op')
                        main.classList.remove('op')
                        setTimeout("main.classList.add('onpp')", 220)
                        setTimeout("main.classList.remove('none')", 220)
                        setTimeout("footer.classList.remove('none')", 220)
                        setTimeout("footerstamped.classList.remove('none')", 220)
                        if (!(windowtop >= 1020)) {
                            setTimeout("location.href = '#12'", 220)
                        }
                        subnav.classList.add('noneimportant');
                        minilogo.classList.remove('none');
                        biglogo.classList.add('none');
                        bgrlist[0].classList.add('bgblue');
                        bgrlist[1].classList.add('bgblue')
                    } else if (sT == 0) {
                        setTimeout("banner.classList.add('onpp')", 200)
                        setTimeout("banner.classList.remove('none')", 200)
                        setTimeout("banner.classList.remove('op')", 200)
                        main.classList.add('op');
                        setTimeout("main.classList.add('none')", 200)
                        setTimeout("footer.classList.add('none')", 200)
                        footerstamped.classList.add('none');
                        subnav.classList.remove('noneimportant');
                        minilogo.classList.add('none');
                        biglogo.classList.remove('none');
                        bgrlist[0].classList.remove('bgblue');
                        bgrlist[1].classList.remove('bgblue');
                    }
                }
                if (window.innerWidth < 1020) {
                    if (windowtop >= window.innerHeight) {
                        minilogo.classList.remove('none');
                        biglogo.classList.add('none');
                        bgrlist[0].classList.add('bgblue');
                        bgrlist[1].classList.add('bgblue')
                    } else if (windowtop <= window.innerHeight) {
                        minilogo.classList.add('none');
                        biglogo.classList.remove('none');
                        bgrlist[0].classList.remove('bgblue');
                        bgrlist[1].classList.remove('bgblue');
                    }

                }
            }
        }
    </script> -->
</body>

</html>