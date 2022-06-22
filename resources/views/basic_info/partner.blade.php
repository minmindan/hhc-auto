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
        color: white !important     ;
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
            </div>
            <div class="com">
                @foreach ($datas as $data)
                <div class="com_img">
                    <img src="{{ asset($data->com_img) }}" alt="">
                </div>
            @endforeach
            </div>
        </div>
    </main>
@endsection
