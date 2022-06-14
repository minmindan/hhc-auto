@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/process_banner.css')}}" />
@endsection
@section('main')
<main>
  <!-- 頁面標題列表 -->
  <div id="tittle-list-id">
    <div class="list-tittle">
      <h1>BANNER管理</h1>
      <ul>
        <li>首頁</li>
        <li>關於我們</li>
        <li>產品介紹</li>
        <li>產品製作流程</li>
        <li>聯絡我們</li>
      </ul>
    </div>
    <div class="list-container">

      <div class="content-section">
        <form action="">
          <div class="content-manage">
            <!-- 卡片 -->
            <div class="content-card">
              <!-- 圖片 -->
              <div class="content-img">
                <img src="" alt="" />
              </div>

              <!-- 說明 -->
              <div class="directions">
                <h2>PROCESS</h2>
                <h3>Banner</h3>
              </div>
              <!-- 功能按鈕 -->
              <div class="function-button">
                <button>更換</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
