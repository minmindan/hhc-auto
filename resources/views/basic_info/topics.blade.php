@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
    <script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/backindex.css')}}">
    <link rel="stylesheet" href="./font.css">
    <link rel="stylesheet" href="{{asset('css/btn_new.css')}}">
    <link rel="stylesheet" href="../css/backnav.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            position: relative;
        }

        * {
            font-family: 'Noto Sans TC', 'sans-serif';
            box-sizing: border-box;
            user-select: none;
        }

        p {
            margin: 0;
        }
    </style>
@endsection
@section('main')
    <main id="main">
        <!-- topics -->
        <div id="topics">
            <h1 class="topics_title">TOPICS</h1>
            <p>最新消息</p>
            <div class="btnbox">
                <div class="btn-edit">編輯</div>
                <div class="btn-store">儲存</div>
                <div class="btn-cancel">取消</div>
            </div>
            <div class="topicsmain">
                <div class="topics">
                    <p class="time"><input type="text" value="TIMETIMETIME"></p>
                    <h4 class="topicsmain_title">
                        <input type="text" value="標題標題標題標題標題標題標題標題">
                    </h4>
                    <p class="topicsmain_content">
                        <textarea style="resize:none; width: 100%; height: 80px;" name="" id="" cols="30" rows="10">
內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容
                        </textarea>
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
    </main>
@endsection
