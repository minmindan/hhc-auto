@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
    <script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/backindex.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn_new.css') }}">
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
            text-decoration: none;
        }
        a:visited{
            color: white;
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
        <p style="
        color: #B4B4B4 !important;">最新消息</p>
        <div class="btnbox" style="bottom: unset;">
            <a style="
            color: white !important;" href="/topics-manage/create" class="btn-edit">新增</a>
        </div>
        <div class="topicsmain">
            <div class="topics">
                <div class="btnbox">
                    @if (!($datas[0]->id??'')==null)
                    <a href="/topics-manage/delete/{{$datas[0]->id}}" class="btn-cancel">刪除</a>
                    @endif
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
                   @if (!($datas[1]->id??'')==null)
                    <a href="/topics-manage/delete/{{$datas[1]->id}}" class="btn-cancel">刪除</a>
                    @endif
                </div>
                <p class="time">{{$datas[1]->time??''}}</p>
                <h4 class="topicsmain_title">
                    {{$datas[1]->title??''}}
                </h4>
                <p class="topicsmain_content">
                    {{$datas[1]->content??''}}
                </p>
            </div>
            <div class="topics">
                <div class="btnbox">
                    @if (!($datas[2]->id??'')==null)
                    <a href="/topics-manage/delete/{{($datas[2]->id)??''}}" class="btn-cancel">刪除</a>
                    @endif
                </div>
                <p class="time">{{$datas[2]->time??''}}</p>
                <h4 class="topicsmain_title">
                    {{$datas[2]->title??''}}
                </h4>
                <p class="topicsmain_content">
                    {{$datas[2]->content??''}}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection
