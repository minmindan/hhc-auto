@extends('template.backnav')
@section('title')
    About Us
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

        .date {
            width: 40px !important;
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
                <div class="right-section">
                    <div class="main-container">
                        <div class="tittle">
                            <h3>公司沿革</h3>
                        </div>
                        <div class="content">
                            @foreach ($datas as $data)
                                <div class="card" style="position: relative;">
                                    <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                        <div class="btn-check" style="margin:  0 10px 0 0;"><a
                                                href="/milestones-manage/edit/{{ $data->id }}">編輯</a></div>
                                        <div class="btn-delete" style="margin:  0 20px 0 0;"><a
                                                href="/milestones-manage/delete/{{ $data->id }}">刪除</a></div>
                                    </div>
                                    <div class="date">{{ $data->month??'' }}@if (!($data->month == null)){{'月'}}
                                        @endif
                                        <br />{{ $data->years??'' }}
                                    </div>
                                    <div class="text">
                                        <span>{{ $data->content??'' }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
