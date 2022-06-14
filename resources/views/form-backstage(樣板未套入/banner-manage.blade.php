@extends('template.template')
@section('title')
    About Us
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/banner-manage.css') }}">
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
      <div class="field-sectione">
          <div class="content">
            <div class="field-img">
                <p>圖片/影片</p>
            </div>
            <div class="field-radation">
                <p>排序</p>
            </div>
            <div class="field-date">
                <p>修改日期</p>
            </div>
            <div class="field-button">
                <button></button>
                <button></button>
            </div>
          </div>
      </div>
      <div class="content-sectipn">
        <form action="">
          <!-- 圖片 -->
          <div class="content-img">
            <img src="" alt="" />
          </div>
          <!-- 排序 -->
          <div class="image-gradation">
            <select name="" id="">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
            </select>
          </div>
          <!-- 修正日期 -->
          <div class="date-fix">
            <input type="text" disabled />
          </div>
          <!-- 功能按鈕 -->
          <div class="function-button">
            <button>編輯</button>
            <button>刪除</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
