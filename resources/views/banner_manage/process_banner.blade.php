@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/process_banner.css')}}" />
<style>
    a {
        text-decoration: none;
        color: #0000ff;
    }
    a:visited{
        color:#0000ff;
    }
    p{
            color: black !important;
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
                @foreach ($process_banner as $process)
                    <!-- 卡片 -->
                    <form action="/banner-manage/process/update/{{ $process->id }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="content-card">
                            <!-- 圖片 -->
                            <div class="content-img">
                                <img src="{{ $process->img_path ?? '' }}" alt="no img" />
                            </div>

                            <!-- 說明 -->
                            <div class="directions">
                                <h2>{{ $process->tittle }}</h2>
                                <h3>{{ $process->subtittle }}</h3>
                            </div>

                            <!-- 功能按鈕 -->
                            <div class="f-button function-button{{ $process->id }}">
                                <button type="button" onclick="chimg{{ $process->id . '()' }}">更換</button>
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

        function chimg2() {
            const ch_img2 = document.querySelector('.function-button2')
            ch_img2.innerHTML = ""
            ch_img2.innerHTML += `
            <div style="display:flex; flex-direction:column;">
            <input type="file"  accept="image/png, image/jpeg" name="img_path">
            <button type="submit">儲存圖片</button>
            <button>取消</button>
            </div>
            `
        }

        function chimg3() {
            const ch_img3 = document.querySelector('.function-button3')
            ch_img3.innerHTML = ""
            ch_img3.innerHTML += `
            <div style="display:flex; flex-direction:column;">
            <input type="file"  accept="image/png, image/jpeg" name="img_path">
            <button type="submit">儲存圖片</button>
            <button>取消</button>
            </div>
            `
        }

        function chimg4() {
            const ch_img4 = document.querySelector('.function-button4')
            ch_img4.innerHTML = ""
            ch_img4.innerHTML += `
            <div style="display:flex; flex-direction:column;">
            <input type="file"  accept="image/png, image/jpeg" name="img_path">
            <button type="submit">儲存圖片</button>
            <button>取消</button>
            </div>
            `
        }

        function chimg5() {
            const ch_img5 = document.querySelector('.function-button5')
            ch_img5.innerHTML = ""
            ch_img5.innerHTML += `
            <div style="display:flex; flex-direction:column;">
            <input type="file"  accept="image/png, image/jpeg" name="img_path">
            <button type="submit">儲存圖片</button>
            <button>取消</button>
            </div>
            `
        }

        function chimg6() {
            const ch_img6 = document.querySelector('.function-button6')
            ch_img6.innerHTML = ""
            ch_img6.innerHTML += `
            <div style="display:flex; flex-direction:column;">
            <input type="file"  accept="image/png, image/jpeg" name="img_path">
            <button type="submit">儲存圖片</button>
            <button>取消</button>
            </div>
            `
        }
    </script>
@endsection
