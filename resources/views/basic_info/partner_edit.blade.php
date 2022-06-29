@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
<script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/backindex.css') }}">
<link rel="stylesheet" href="{{ asset('css/font.css') }}">
<link rel="stylesheet" href="{{ asset('css/btn_new.css') }}">
<link rel="stylesheet" href="{{ asset('css/backnav.css') }}">
<style>
    a {
        text-decoration: none;
    }
</style>
<style>
    .com .com_img{
        position: relative !important;
    }
    .com .com_img .stop{
        position: absolute !important;
        top: 0 !important;
        left: 35px !important;
        z-index: 1 !important;
    }

</style>
</head>

@section('main')
    <main id="main">
        <!-- COMPANY -->
        <form action="/partner-manage/create" method="post" id="company" enctype="multipart/form-data">
            @csrf
            <h1 class="company_title">COMPANY</h1>
            <p>合作客戶</p>
            <div class="btnbox">
                <button type="submit" class="btn-store">儲存</button>
                <a href="/partner-manage">
                    <div class="btn-cancel">取消</div>
                </a>

            </div>
            <div class="com">
                @foreach ($datas as $data)
                    <div class="com_img">
                        <a class="stop" href="/partner-manage/delete/{{$data->id}}">
                            <div class="stop_">
                                <div class="stop_"></div>
                            </div>
                        </a>
                        <img src="{{ asset($data->com_img) }}" alt="">
                    </div>
                @endforeach
                <div style="display: flex;  align-items:center;" class="create_com">
                    <input type="file" name="com_img" id="com_img" accept="image/*">
                </div>
            </div>
        </form>
    </main>
@endsection
@section('js')
@endsection
