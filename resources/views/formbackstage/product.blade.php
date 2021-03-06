@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/product.css')}}" />
@endsection
@section('main')
<main>
  <!-- 頁面標題列表 -->
  <div id="tittle-list-id">
    <div class="list-tittle">
      <h1>產品管理</h1>
      <ul>
        <li>設備</li>
        <li>軟體</li>
        <li>部品零件</li>
        <li>耗材</li>
        <li>維修</li>
      </ul>
    </div>
    <div class="list-container">
        <!-- 欄位名稱 -->
      <div class="field-section">
          <div class="content">
            <div class="field-img">
                <p>圖片/影片</p>
            </div>
            <div class="field-name">
                <p>產品名稱</p>
            </div>
            <div class="field-radation">
                <p>排序</p>
            </div>
            <div class="field-star">
                <p>主打產品</p>
            </div>
            <div class="field-button">
                <button></button>
                <button></button>
            </div>
          </div>
      </div>
      <!-- 內容 -->
      <div class="content-section">
        <form action="">
          <!-- 圖片 -->
          <div class="content-img">
            <img src="./img/Rectangle 154.png" alt="" />
          </div>
          <!-- 產品名稱 -->
          <div class="product-name">
              <input type="text" disabled>
          </div>
          <!-- 排序 -->
          <div class="image-gradation">
            <select name="" id="">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
            </select>
          </div>
          <!-- 主打產品 -->
          <div class="produt-star">
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
