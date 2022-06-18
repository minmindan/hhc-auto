@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')

<link rel="stylesheet" href="{{asset('css/contact_banner.css')}}" />
<style>
    a {
        text-decoration: none;
        color: #0000ff;
    }
    a:visited{
        color:#0000ff;
    }
</style>
@endsection

@section('main')
<main>
  <!-- 頁面標題列表 -->
  <div id="tittle-list-id">
    <div class="list-tittle">
      <h1>BANNER管理</h1>
      <ul>
        <li><a href="/banner-manage/homepage/edit">首頁</a></li>
        <li><a href="/banner-manage/aboutus/edit">關於我們</a></li>
        <li><a href="/banner-manage/product/edit">產品介紹</a></li>
        <li><a href="/banner-manage/process/edit">產品製作流程</a></li>
        <li><a href="/banner-manage/contact/edit">聯絡我們</a></li>
      </ul>
    </div>
    <div class="list-container">

        <div class="content-section">
            <div class="content-manage">
                @foreach ($contact_banner as $contact)
                    <!-- 卡片 -->
                    <form action="/banner-manage/contact/update/{{ $contact->id }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="content-card">
                            <!-- 圖片 -->
                            <div class="content-img">
                                <img src="{{ $contact->img_path ?? '' }}" alt="no img" />
                            </div>

                            <!-- 說明 -->
                            <div class="directions">
                                <h2>{{ $contact->tittle }}</h2>
                                <h3>{{ $contact->subtittle }}</h3>
                            </div>

                            <!-- 功能按鈕 -->
                            <div class="function-button{{ $contact->id }}">
                                <button type="button" onclick="chimg{{ $contact->id . '()' }}">更換</button>
                            </div>
                        </div>

                    </form>
                @endforeach
            </div>
        </div>
    </div>
  </div>
</main>
@endsection
@section('js')
    <script>
        function chimg1() {
            const ch_img1 = document.querySelector('.function-button1')
            ch_img1.innerHTML = ""
            ch_img1.innerHTML += `
            <div style="display:flex; flex-direction:column;">
            <input type="file"  accept="image/png, image/jpeg" name="img_path">
            <button type="submit">儲存圖片</button>
            <button>取消</button>
            </div>
            `
        }

    </script>
@endsection
