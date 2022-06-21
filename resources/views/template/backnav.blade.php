<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('pagetitle' ?? '')
    </title>
    <meta name="keywords" content="興和川自動化,半導體封裝,工業4.0,半導體設備,自動化生產,履歷管理">
    <meta name="description" content="半導體封裝業界經歷了崛起，成長等趨勢轉變後，接下來面臨著工業4.0的需求與挑戰，需要更加智能化的自動化生產來做量產的履歷管理。
興和川自動化有限公司由一群在業界耕耘了20年以上的有志者來提供更專業，高價值的服務，幫助客戶增加競爭力。對於半導體上片Fasford設備更有著service20年以上的經驗。
">
    <link rel="stylesheet" href="{{asset('css/backnav.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/btn.css')}}">

    @yield('css')
    <style>
        * {
            font-family: 'Noto Sans TC', 'sans-serif';
        }
        form a{
            color: black;
            margin: unset !important;
            text-emphasis: none;
        }
        a:visited{
            color: black !important;
        }
        .signout{
            height: 70px;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <div id="logo"><img src="{{asset('image/nav/Logo_blue.svg')}}" alt=""></div>
        <div id="navlist">
            <a href="/hhc-auto" class="subnav">
                <p>前往網頁</p>
            </a>
            <div class="subnav">
                <p>修改密碼</p>
            </div>
            <div class="subnav backstagelist">
                <p>後台管理　<img src="{{asset('image/nav/down_gray.svg')}}" alt=""></p>
                <div class="list">
                    <a href="/topics-manage"><p>最新消息</p></a>
                    <img src="{{asset('image/nav/gray_line.svg')}}" alt="">
                    <a href="/company-manage"><p>合作客戶</p></a>
                    <img src="{{asset('image/nav/gray_line.svg')}}" alt="">
                    <a href="/milestones-manage"><p>公司沿革</p></a>
                    <img src="{{asset('image/nav/gray_line.svg')}}" alt="">
                    <a href="/contact-manage"><p>聯絡方式</p></a>
                    <img src="{{asset('image/nav/gray_line.svg')}}" alt="">
                    <a href="/banner-manage/homepage"><p>Banner管理</p></a>
                    <img src="{{asset('image/nav/gray_line.svg')}}" alt="">
                    <a href="/banner-manage/contact"><p>產品管理</p></a>
                    <img src="{{asset('image/nav/gray_line.svg')}}" alt="">
                    <a href="/contact/list"><p>表單回報</p></a>
                </div>
            </div>
            <div class="subnav signoutlist">
                <p>，您好　<img src="{{asset('image/nav/down_gray.svg')}}" alt=""></p>
                <div class="signout">
                    <form style="display: flex;
                    align-content: center;" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            @csrf
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    @yield('main')
    <footer></footer>
    @yield('js')
</body>
</html>
