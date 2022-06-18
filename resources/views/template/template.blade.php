<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('pagetitle' ?? '')
    </title>
    <meta name="keywords" content="興和川自動化,半導體封裝,工業4.0,半導體設備,自動化生產,履歷管理">
    <meta name="description" content="半導體封裝業界經歷了崛起，成長等趨勢轉變後，接下來面臨著工業4.0的需求與挑戰，需要更加智能化的自動化生產來做量產的履歷管理。
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
        }

        .none {
            display: none !important;
        }
        a{
            color: white;
            text-decoration:none;
            display: flex;
            justify-content: start;
        }
        a:visited{
            color: white;
        }
        .bgblue{
            background-color: #004098 !important;
        }
        /* .fons a{
            color: #b4b4b4;
        } */
    </style>
    @yield('css')
</head>

<body>
    <nav id="nav">
        <div id="focus" class="none">
            <div id="focuslogo" class="focus-logo none">
                <img src="{{ asset('image/nav/white_logo.png') }}" alt="">
                <img id="XX" style="cursor: pointer;" height="40px" src="{{ asset('image/nav/burger_white_X.svg') }}"
                    alt="">
            </div>
            <div id="focusmain" class="focus-main none">
                <div id="focus-box">
                    <p><a href="">關於我們</a></p>
                    <h1>ABOUT US</h1>
                    <ul>
                        <li><a href="">經營理念 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                        <li><a href="">公司沿革 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                        <li><a href="">公司簡介 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                    </ul>
                </div>
                <div id="focus-box">
                    <p><a href="">產品介紹</a></p>
                    <h1><a href="">PRODUCT</a></h1>
                    <ul>
                        <li><a href="">設備 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                        <li><a href="">軟體 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                        <li><a href="">部品零件 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                        <li><a href="">耗材 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                        <li><a href="">維修 <img src="{{ asset('image/nav/white_right.svg') }}" alt=""></a></li>
                    </ul>
                </div>
                <div id="focus-box">
                    <p><a href="">產品製作流程</a></p>
                    <h1><a href="">PROCESS</a></h1>
                </div>
                <div id="focus-box">
                    <p><a href="">聯絡我們</a></p>
                    <h1><a href="">CONTACT</a></h1>
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
            <a href="/hhc-auto">
            <div id="logo">
                <img id="minilogo" src="{{ asset('image/nav/blue_logo_mini.png') }}" alt="">
                <img id="biglogo" src="{{ asset('image/nav/blue_logo.png') }}" alt="">
                <img id="white-logo" src="{{ asset('image/nav/white_logo.png') }}" alt="">
            </div>
        </a>
            <div id="subnav">
                <div class="hoverbox downlist">
                    <div><a class="fons" href="">關於我們</a></div>
                    <img width="15px" style="margin-left:10px ;" class="down_gray" src="{{ asset('image/nav/down_gray.svg') }}"alt=""><img width="15px" style="margin-left:10px ;" class="down_white" src="{{asset('image/nav/down_white.svg')}}" alt="">
                    <div class="list aboutlist">
                        <p>經營理念</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>公司沿革</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>公司簡介</p>
                    </div>
                </div>
                <div class="hoverbox downlist">
                    <div><a class="fons" href="">產品介紹</a></div>
                    <img width="15px" style="margin-left:10px ;" class="down_gray" src="{{ asset('image/nav/down_gray.svg') }}"alt=""><img width="15px" style="margin-left:10px ;" class="down_white" src="{{asset('image/nav/down_white.svg')}}" alt="">
                    <div class="list productlist">
                        <p>設備</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>軟體</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>部品零件</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>耗材</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>維修</p>
                    </div>
                </div>
                <div class="hoverbox">
                    <div><a class="fons" href="">產品製作流程</a></div>
                </div>
                <div class="hoverbox">
                    <div><a class="fons" href="">最新消息</a></div>
                </div>
                <div class="hoverbox">
                    <div><a class="fons" href="">聯絡我們</a></div>
                </div>
                <div class="hoverbox downlist">
                    <div background"><a class="fons href="">後台管理</a></div>
                    <img width="15px" style="margin-left:10px ;" class="down_gray" src="{{ asset('image/nav/down_gray.svg') }}"alt=""><img width="15px" style="margin-left:10px ;" class="down_white" src="{{asset('image/nav/down_white.svg')}}" alt="">
                    <div class="list backendlist">
                        <p>關於我們</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>Banner</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                        <p>產品編輯</p>
                        <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
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
    @yield('main')
    <footer id="footer">
        <div id="footer-logo">
            <img src="{{ asset('image/nav/white_logo.png') }}" alt="">
        </div>
        <div id="footer-main">
            <div class="footer-btn subaboutbtn" tabindex="0">
                <h1>關於我們 <img src="{{ asset('image/nav/down_gray.svg') }}" alt=""></h1>
                <div class="footer-aboutlist">
                    <p>經營理念</p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                    <p>公司沿革</p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
                    <p>公司簡介</p>
                </div>
            </div>
            <div class="footer-btn subservebtn" tabindex="0">
                <h1>支援服務 <img src="{{ asset('image/nav/down_gray.svg') }}" alt=""></h1>
                <div class="footer-servelist">
                    <p>關於我們</p>
                    <img src="{{ asset('image/nav/gray_line.svg') }}" alt="">
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
        // var windowtop = document.documentElement.scrollTop; 問題待解決
        var windowtop = document.body.scrollTop;
        console.log(windowtop);
        console.log(banner.clientHeight);
        if (window.innerWidth > 993) {
            if (windowtop > 100) {
                subnav.classList.add("none")
                biglogo.classList.add('none')
            } else {
                subnav.classList.remove("none")
                biglogo.classList.remove('none')
            }
        } else {
            main.style.margin='-150px 0 0 0'
            if (windowtop > banner.clientHeight - 75) {
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

    // function show(event) {
    //     var wi = window.innerHeight //頁面高度
    //     navin();
    //     window.onscroll = () => {
    //         navin();
    //         let cH = document.documentElement.clientHeight;
    //         let sH = document.documentElement.scrollHeight;
    //         let sT = document.documentElement.scrollTop;
    //     }
    // }
</script>

</html>
