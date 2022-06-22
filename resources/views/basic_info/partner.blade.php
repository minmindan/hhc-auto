@extends('template.backnav')
@section('title')
    About Us
@endsection
<script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/backindex.css') }}">
<link rel="stylesheet" href="{{ asset('css/font.css') }}">
<link rel="stylesheet" href="{{ asset('css/btn_new.css') }}">
<link rel="stylesheet" href="{{ asset('css/backnav.css') }}">
<style>
    .btnbox a {
        text-decoration: none;
        color: white;
    }
    .btnbox a:visited{
        color: white !important;
    }
</style>
</head>

@section('main')
    <main id="main">
        <!-- COMPANY -->
        <div id="company">
            <h1 class="company_title">COMPANY</h1>
            <p>合作客戶</p>
            <div class="btnbox">
                <div class="btn-edit"><a href="/partner-manage/edit">編輯</a></div>
                <div class="btn-store">儲存</div>
                <div class="btn-cancel">取消</div>
            </div>
            <div class="com">
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/南茂.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/典範.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/力成.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/同欣.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/國祥.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/日月光.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/晶測.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/晶電.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/矽品.svg" alt="">
                </div>
                <div class="create_com">
                    <input type="file" name="com_img" id="com_img" accept="image/*">
                </div>
            </div>
        </div>
    </main>
@endsection
