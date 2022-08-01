@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/backaboutus.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/btn_new.css') }}">
    <style>
        a {
            color: white;
            text-decoration: none;
        }

        a:visited {
            color: white;
        }

        input {
            width: 70px;
        }

        textarea {
            resize: none;
            width: 600px;
            height: 100px;
        }
        p{
            color: black !important;
        }
    </style>
@endsection
@section('main')
    <main>
        <!-- 公司沿革 -->
        <div id="milestones">
            <!-- 左方區塊 -->
            <div class="milestones-container">
                <div class="left-section">
                    <div class="white-space">
                        <h1>Company</h1>
                        <h1>milestones</h1>
                    </div>
                </div>
                <!-- 右方區塊 -->
                <form class="right-section" action="/milestones-manage/store" method="POST">
                    @csrf
                    <div class="main-container">
                        <div class="tittle">
                            <h3>公司沿革測試</h3>
                        </div>
                        <div class="content">
                            <div class="card" style="position: relative;">
                                <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                    <button class="btn-check" type="submit" style="margin:  0 10px 0 0; color:white !important;">儲存</button>
                                    <div class="btn-delete" style="margin:  0 20px 0 0;"><a style="color: white !important;" href="/milestones-manage">取消</a>
                                    </div>
                                </div>
                                <div class="date"><input type="text" name="month"
                                        value="">月<br /><input type="text" name="years"
                                        value="">年 </div>
                                <div class="text">
                                    <textarea name="content" id="" cols="30" rows="10">{{ $data->content??'' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
