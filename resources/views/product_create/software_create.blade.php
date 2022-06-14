@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/product_create.css') }}" />
    <style>
        a {
            text-decoration: none;
            color: #0000ff;
        }

        a:visited {
            color: #0000ff;
        }
    </style>
@endsection
@section('main')
  <main>
    <!-- 頁面標題列表 -->
    <div id="tittle-list-id">
      <div class="list-tittle">
        <h1>產品管理</h1>
        <ul>
            <li><div><a href="/product-manage/equipment">設備</a></div></li>
            <li><div class="blue"><a href="/product-manage/software">軟體</a></div></li>
            <li><div><a href="/product-manage/parts">部品零件</a></div></li>
            <li><div><a href="/product-manage/consumables">耗材</a></div></li>
            <li><div><a href="/product-manage/maintenance">維修</a></div></li>
        </ul>
      </div>
      <div class="list-container">
        <div class="field-section">
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

            <div class="field-btn"></div>
          </div>
        </div>
        <div class="content-section">
          <form action="">
            <!-- 圖片 -->
            <div class="content-img">
              <img src="./img/++.png" alt="" />
            </div>

            <!-- 排序 -->
            <div class="image-gradation">
              <select name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
              </select>
            </div>

            <!-- 新增日期 -->
            <div class="date-bulid">
              <input type="text" disabled />
            </div>
            <!-- 新增按鈕 -->
            <div class="bulid-btn">
              <button>新增</button>
            </div>
          </form>
        </div>
      </div>
      <form>
        <div id="formto">
          <div class="form-input star-items">
            <p>主打商品</p>
            <ul>
              <li>
                <input type="radio" name="items" id="items1" />
                <label for="items1">主打商品1</label>
              </li>
              <li>
                <input type="radio" name="items" id="items2" />
                <label for="items2">主打商品2</label>
              </li>
              <li>
                <input type="radio" name="items" id="items3" />
                <label for="items3">主打商品3</label>
              </li>
              <li>
                <input type="radio" name="items" id="items4" />
                <label for="items4">主打商品4</label>
              </li>
              <li>
                <input type="radio" name="items" id="items5" />
                <label for="items5">主打商品5</label>
              </li>
              <li>
                <input type="radio" name="items" id="items6" />
                <label for="items6">不是主打商品</label>
              </li>
            </ul>
          </div>
          <!-- 產品名稱 -->
          <div class="form-input">
            <p>產品名稱</p>
            <input type="text" />
          </div>
          <!-- 產品款號 -->
          <div class="form-input">
            <p>產品款號</p>
            <input type="text" />
          </div>
          <!-- 產品規格 -->
          <div class="form-input">
            <p>產品規格</p>
            <input type="text" />
          </div>
          <!-- 產品特色 -->
          <div class="form-input">
            <p>產品特色</p>
            <input type="text" />
          </div>
          <!-- 產品說明 -->
          <div class="form-input">
            <p>產品說明</p>
            <input type="text" />
          </div>
          <!-- 上傳按鈕 -->
          <div class="btn">
            <button>儲存</button>
            <button>取消</button>
          </div>
        </div>
      </form>
    </div>
  </main>
  @endsection
