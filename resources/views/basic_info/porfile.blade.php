@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/backaboutus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn_new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backnav.css') }}">
    <style>
        .note {
            margin-left: 60px;
        }

        li {
            list-style: none;
        }

        .note-editing-area {
            height: 300px;
        }
        a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        a:visited {
            color: white;
            font-size: 14px;
        }
        button {
            background-color: unset;
            border: unset;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }
        p{
            color: black !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <style>
        a:visited{
            color: white!important;
        }
    </style>
@section('main')
    <main>
        <!-- 公司簡介 -->
        <div id="company-profile">
            <div class="company-profile-container">
                <!-- 左方區塊 -->
                <div class="left-section">
                    <div class="white-space">
                        <h1>Company</h1>
                        <h1>profile</h1>
                    </div>
                </div>
                <!-- 右方區塊 -->
                <div class="right-section">
                    <div class="main-container">
                        <div class="tittle">
                            <h3>公司簡介</h3>
                        </div>
                        <div class="content">
                            <div class="card">
                                <div class="name-field"></div>
                                <div class="company-name">{{ $data[0]->company_name??'' }}</span>
                                </div>
                            </div>
                            <div class="card">
                                <div class="build-field"></div>
                                <div class="build-date">{{ $data[0]->found??'' }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="address-field"></div>
                                <div class="address">{{ $data[0]->address??'' }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="opening-field"></div>
                                <div class="opening-hours">{{ $data[0]->opening??'' }}</div>
                            </div>
                            <div class="card">
                                <div class="tel-field"></div>
                                <div class="tel">{{ $data[0]->phone??'' }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="items-field"></div>
                                <div class="note">
                                    <p>{!!$data[0]->serve!!}</p>
                                </div>
                            </div>
                            <div class="btnbox" style="margin: 0 0 0 120px;">
                                <div class="btn-check" style="margin:30px 10px 0 auto;"><a style="color: white !important;" href="/contact-manage/edit">編輯</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div style="margin-bottom: 150px"></div>
    </main>
@endsection
