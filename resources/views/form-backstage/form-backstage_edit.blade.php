@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/form-backstage_edit.css')}}">
@endsection
<body>
@section('main')
<main>
    <div id="contact-id">
        <!-- 表單區塊 -->
        <div class="form-container">
          <!-- 說明文字 -->
          <div class="directions">
            <h5>
              若您有任何疑問或建議,歡迎留下您寶貴的建議,<br />
              我們將盡速與您聯擊,感謝!
            </h5>
          </div>
          <!-- 表單 -->
          <form action="" method="">
            <!-- 表單內容 -->
            <div class="form-section">
              <div class="type form-field">
                <label>查詢類型</label>
                <select disabled name="" id="">
                  <option value="">類型1</option>
                  <option value="">類型1</option>
                </select>
              </div>
              <div class="company-name form-field">
                <label>您的公司名稱/個人</label>
                <input type="text" disabled />
              </div>
              <div class="appellation form-field">
                <label for="text">職稱</label>
                <input id="text" t type="text" disabled />
              </div>
              <div class="youname form-field">
                <label>姓名</label>
                <input type="text" disabled />
              </div>
              <div class="tel-number form-field">
                <label>電話號碼</label>
                <input type="text" disabled />
              </div>
              <div class="email-address form-field">
                <label>電子郵件</label>
                <input type="text" disabled />
              </div>
              <div class="demand form-field">
                <label>需求說明</label>
                <textarea disabled name="" id="" cols="30" rows="10"></textarea>
              </div>
            </div>

          </form>
        </div>
    </div>
</main>
@endsection


