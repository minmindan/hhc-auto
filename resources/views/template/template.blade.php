<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title' ?? '')
    </title>
    <link rel="icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">
    <meta name="keywords" content="興和川自動化,半導體封裝,工業4.0,半導體設備,自動化生產,履歷管理">
    <meta name="description"
        content="半導體封裝業界經歷了崛起，成長等趨勢轉變後，接下來面臨著工業4.0的需求與挑戰，需要更加智能化的自動化生產來做量產的履歷管理。
興和川自動化有限公司由一群在業界耕耘了20年以上的有志者來提供更專業，高價值的服務，幫助客戶增加競爭力。對於半導體上片Fasford設備更有著service20年以上的經驗。
">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav-list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        @import url("https://fonts.googleapis.com/earlyaccess/notosanstc.css");

        * {
            box-sizing: border-box font-family: 'Noto Sans TC', 'sans-serif';
            -webkit-user-select: none;
            -moz-user-select: none;
            select: none;
        }

        .none {
            display: none !important;
        }

        a {
            color: white;
            text-decoration: none;
            display: flex;
            justify-content: start;
        }

        a:visited {
            color: white;
        }

        .bgblue {
            background-color: #004098 !important;
        }

        /* .fons a{
            color: #b4b4b4;
        } */
        .block {
            display: block !important;
        }
    </style>

    {{-- 翻譯欄位 --}}
    <style>
        .tra-bar {
            width: 100%;
            height: auto;
            position: absolute;
            bottom: 50px;
            display: flex;
            right:  0;
            overflow: hidden;
            justify-content: flex-end;

        }

        @media screen and (max-width:1090px) {
            .tra-bar {
                width: unset;
                height: unset;
                position: unset;
                bottom: unset;
                right:  unset;

            }
        }



        .tra-bar .container {
            display: flex;
            justify-content: flex-end;
            padding: 0 152px;
            margin-top: 30px;
        }


        @media screen and (max-width:850px) {
            .tra-bar .container {
                display: flex;
                justify-content: flex-end;
                padding: 0 70px;
                margin: 0 auto;
            }

            .tra-bar {
                width: unset;
                height: unset;
                position: unset;
                bottom: unset;
                right:  unset;
                margin-top: 30px;
            }
        }

        .goog-te-gadget-simple{
            display: flex !important;
        }
    </style>
    @yield('css')
</head>

<body>
    <nav id="nav">
        <div id="focus" class="none">
            <div id="focuslogo" class="focus-logo none">
                <img id="slogo" src="{{asset('image/nav/small_white.svg')}}" alt="">
                <img id="blogo" src="{{ asset('image/nav/white_logo.png') }}" alt="">
                <img id="XX" style="cursor: pointer;" height="40px"
                    src="{{ asset('image/nav/burger_white_X.svg') }}" alt="">
            </div>
            <div id="focusmain" class="focus-main none">
                <div class="focus-box">
                    <p><a href="/aboutus">關於我們</a></p>
                    <h1><a href="/aboutus">ABOUT US</a></h1>
                    <ul>
                        <li><a href="/aboutus/#philosophy">經營理念</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/aboutus/#milestones">公司沿革</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/aboutus/#company-profile">公司簡介</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                    </ul>
                </div>
                <div class="focus-box">
                    <p><a href="/product">產品介紹</a></p>
                    <h1><a href="/product">PRODUCT</a></h1>
                    <ul>
                        <li><a href="/product/#equipment">設備</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/product/#software">軟體</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/product/#parts">部品零件</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/product/#consumables">耗材</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                        <li><a href="/product/#maintenance">維修</a> <img src="{{ asset('image/nav/white_right.svg') }}"
                                alt=""></li>
                    </ul>
                </div>
                <div class="focus-box">
                    <p><a href="/process">產品製作流程</a></p>
                    <h1><a href="/process">PROCESS</a></h1>
                </div>
                <div class="focus-box">
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
            <a href="/">
                <div id="logo">
                    <img id="minilogo" src="{{ asset('image/nav/blue_logo_mini.png') }}" alt="">
                    <img id="biglogo" src="{{ asset('image/nav/blue_logo.png') }}" alt="">
                    <img id="white-logo" src="{{ asset('image/nav/white_logo.png') }}" alt="">
                </div>
            </a>
            <div id="subnav">
                <div class="hoverbox downlist">
                    <div><a class="fons" href="/aboutus">關於我們</a></div>
                    <img width="15px" style="margin-left:10px ;" class="down_gray"
                        src="{{ asset('image/nav/down_gray.svg') }}"alt=""><img width="15px"
                        style="margin-left:10px ;" class="down_white" src="{{ asset('image/nav/down_white.svg') }}"
                        alt="">
                        <div class="list aboutlist">
                            <p><a style="color: #B4B4B4;" href="/aboutus#philosophy">經營理念</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="/aboutus#milestones">公司沿革</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="/aboutus#company-profile">公司簡介</a></p>
                        </div>
                </div>
                <div class="hoverbox downlist">
                    <div><a class="fons" href="/product">產品介紹</a></div>
                    <img width="15px" style="margin-left:10px ;" class="down_gray"
                        src="{{ asset('image/nav/down_gray.svg') }}"alt=""><img width="15px"
                        style="margin-left:10px ;" class="down_white" src="{{ asset('image/nav/down_white.svg') }}"
                        alt="">
                        <div class="list productlist">
                            <p><a style="color: #B4B4B4;" href="/product/#equipment-section">設備</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="/product/#software-section">軟體</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="/product/#parts-section">部品零件</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="/product/#consumables-section">耗材</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #B4B4B4;" href="/product/#maintenance-section">維修</a></p>
                        </div>
                </div>
                <div class="hoverbox">
                    <div><a class="fons" href="/process">產品製作流程</a></div>
                </div>
                <div class="hoverbox">
                    <div><a class="fons" href="/">最新消息</a></div>
                </div>
                <div class="hoverbox">
                    <div><a class="fons" href="/contact">聯絡我們</a></div>
                </div>
                @auth
                    <div class="hoverbox downlist">
                        <div background><a class="fons href=''">後台管理</a></div>
                        <img width="15px" style="margin-left:10px ;" class="down_gray"
                            src="{{ asset('image/nav/down_gray.svg') }}"alt=""><img width="15px"
                            style="margin-left:10px ;" class="down_white" src="{{ asset('image/nav/down_white.svg') }}"
                            alt="">
                        <div class="list backendlist">
                            <p><a style="color: #b4b4b4;" href="/topics-manage">內容設定</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #b4b4b4;" href="/banner-manage/contact">Banner管理</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #b4b4b4;" href="/product-manage/equipment">產品編輯</a></p>
                            <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                            <p><a style="color: #b4b4b4;" href="/contact/list">表單管理</a></p>
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
    @yield('main')
    <footer id="footer" style="margin-top: 120px;">
        <div id="footer-logo">
            <img src="{{ asset('image/nav/white_logo.png') }}" alt="">
        </div>
        <div id="footer-main">
            <div class="footer-btn subaboutbtn" tabindex="0">
                <h1>關於我們 <img src="{{ asset('image/nav/down_white.svg') }}" alt=""></h1>
                <div class="footer-aboutlist">
                    <p><a href="/aboutus/#philosophy">經營理念</a></p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                    <p><a href="/aboutus/#milestones">公司沿革</a></p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                    <p><a href="/aboutus/#company-profile">公司簡介</a></p>
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
        {{-- 翻譯欄位 --}}
        <div class="tra-bar">
            <div class="container">
                <div class="pull-right" style="margin-left:15px;">
                    <div id="google_translate_element">
                        <div class="skiptranslate goog-te-gadget" dir="ltr" style="">

                        </div>
                    </div>
                    <script type="text/javascript">
                        var googleCurrLang = navigator.language;
                        if (googleCurrLang == undefined) {
                            googleCurrLang = navigator.browserLanguage;
                        }
                        if (typeof(currLang) != "undefined") {
                            googleCurrLang = currLang;
                        }
                        if (typeof(defGoogleLang) != "undefined") {
                            googleCurrLang = defGoogleLang;
                        }

                        function googleTranslateElementInit() {
                            setTimeout(function() {
                                new google.translate.TranslateElement({
                                    pageLanguage: googleCurrLang,
                                    includedLanguages: 'en',
                                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                }, 'google_translate_element');
                            }, 1300)
                        }
                    </script>
                    <script async="" type="text/javascript"
                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
                <div class="pull-right">
                    <ul class="list-inline social-icons">
                    </ul>
                </div>
                <div class="pull-right">
                    <ul class="list-inline">
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="{{ asset('js/navbar.js') }}"></script>
@yield('js')
<script>
    var el = document.querySelector('body');
    var nav = document.getElementById('nav');
    var subnav = document.getElementById('subnav');
    var minilogo = document.getElementById('minilogo');
    var biglogo = document.getElementById('biglogo');
    var bgrlist = document.querySelectorAll('.stuffing');
    var whitelogo = document.getElementById('white-logo');
    var banner = document.querySelector('#banner');
    var main = document.querySelector('main')
    el.addEventListener('touchmove', navin, false);
    el.addEventListener('mousewheel', navin, false);
    el.addEventListener('DOMMouseScroll', navin, false);
    // show(), false;
    navin();

    function navin() {
        var windowtop = document.documentElement.scrollTop;
        var windowtop2 = document.body.scrollTop;
        if (window.innerWidth > 993) {
            if (windowtop > 100 || windowtop2 > 100) {
                subnav.classList.add("none")
                biglogo.classList.add('none')
            } else {
                subnav.classList.remove("none")
                biglogo.classList.remove('none')
            }
        } else {
            main.style.margin = '-150px 0 0 0'
            if (windowtop > banner.clientHeight - 75 || windowtop2 > banner.clientHeight - 75) {
                whitelogo.classList.add('none');
                minilogo.classList.add('block');
                bgrlist[1].classList.add('bgblue');
                bgrlist[0].classList.add('bgblue');
            } else {
                whitelogo.classList.remove('none');
                minilogo.classList.remove('block');
                bgrlist[1].classList.remove('bgblue');
                bgrlist[0].classList.remove('bgblue');
            }
        }
    }
</script>

</html>
