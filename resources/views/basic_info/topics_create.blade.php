@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
    <script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/backindex.css') }}">
    <link rel="stylesheet" href="./font.css">
    <link rel="stylesheet" href="{{ asset('css/btn_new.css') }}">
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
            user-select: unset;
        }

        p {
            margin: 0;
        }
        #topics{
            margin-top: 50px !important;
        }
        .topics{
            position: relative;
        }
        .btnbox{
            margin-bottom: 0;
            position: absolute;
            bottom: 100%;
        }
        .topicsmain{
            margin-top: 100px;
        }
        a{
            color: white;
            text-decoration: none;
        }
        a:visited{
            color: white;
        }
        button{
            background-color: unset;
            border: unset;
            color: white;
            cursor: pointer;
        }
        p{
            color: black !important;
        }
    </style>
@endsection
@section('main')
<main id="main">
    <!-- topics -->
    <div id="topics">
        <h1 class="topics_title">TOPICS</h1>
        <p>最新消息</p>
        <div class="topicsmain">
            <form  class="topics" action="/topics-manage/store" method="POST">
                @csrf
                <div  class="btnbox">
                    <div class="btn-store"><button type="submit">儲存</button></div>
                    <div class="btn-cancel"><a href="/topics-manage">取消</a></div>
                </div>
                <p class="time"><input type="text" name="time" value="TIMETIMETIME"></p>
                <h4 class="topicsmain_title">
                    <input type="text" name="title" value="標題標題標題標題標題標題標題標題">
                </h4>
                <p class="topicsmain_content">
                    <textarea style="resize:none; width: 100%; height: 80px;" name="content" id="" cols="30" rows="10">內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容
                    </textarea>
                </p>
            </form>
            <div class="topics">
                <div class="btnbox">
                </div>
                <p class="time">{{$datas[0]->time??''}}</p>
                <h4 class="topicsmain_title">
                    {{$datas[0]->title??''}}
                </h4>
                <p class="topicsmain_content">
                    {{$datas[0]->content??''}}
                </p>
            </div>
            <div class="topics">
                <div class="btnbox">
                </div>
                <p class="time">{{$datas[1]->time??''}}</p>
                <h4 class="topicsmain_title">
                    {{$datas[1]->title??''}}
                </h4>
                <p class="topicsmain_content">
                    {{$datas[1]->content??''}}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection
