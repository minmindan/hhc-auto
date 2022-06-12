@extends('template.template')
@section('title')
Contact
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/contact1.css')}}" />
@endsection
@section('main')
    <main>
      <!-- Banner -->
      <div id="banner">
        <div class="banner-container">
          <div class="sub-section">
            <!-- 標題區塊&SCROLL -->
            <div class="tittle-en">
              <h3>CONTACT</h3>
            </div>
            <div class="tittle-ch">
              <h4>聯絡我們</h4>
            </div>
            <!-- SCROLL示意 -->
            <div class="scroll-box">
              <div class="scroll-img">
                <img src="./img/functionIcon/gray_dwon.svg" alt="" />
              </div>
              <div class="scroll-text">
                <span>SCROLL</span>
              </div>
            </div>
            <!-- 灰色色塊 -->
            <div class="sup-bg">
              <div class="color-block"></div>
            </div>
          </div>
          <!-- 公司主圖 -->
          <div class="main-section">
            <div class="banner-img">
              <div class="img">
                <img src="./img/範例.jpg" alt="" />
                <div class="main-img-color"></div>
              </div>
              <!-- 頁面導覽塊 -->
              <div class="progress-bar">
                <ul>
                  <li>經營理念</li>
                  <li>公司沿革</li>
                  <li>公司簡介</li>
                </ul>
              </div>
              <!-- banner直版進度條 -->
              <div class="progress-bar-l">
                <div class="progress-step1">INPUT</div>
                <div class="progress-step2">CONFIRM</div>
                <div class="progress-step3">COMPLATE</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 聯絡表單區塊 -->
      <div id="contact-id">
        <!-- 直版表單進度條 -->
        <div class="progress-bar-l">
          <div class="progress-step1">INPUT</div>
          <div class="progress-step2">CONFIRM</div>
          <div class="progress-step3">COMPLATE</div>
        </div>
        <!-- 橫版表單進度條 -->
        <div class="progress-bar-t">
          <div class="progress-step1">INPUT</div>
          <div class="line"></div>
          <div class="progress-step2">CONFIRM</div>
          <div class="line"></div>
          <div class="progress-step3">COMPLATE</div>
        </div>

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
          <form action="/contact2" method="post">
            @csrf
            <!-- 表單內容 -->
            <div class="form-section">
              <div class="type form-field">
                <label>查詢類型</label>
                <select name="type" id="">
                  <option value="1">類型1</option>
                  <option value="2">類型1</option>
                </select>
              </div>
              <div class="company-name form-field">
                <label>您的公司名稱/個人</label>
                <input name="company" type="text" />
              </div>
              <div class="appellation form-field">
                <label for="text">職稱</label>
                <input id="text" name="appellation" type="text" />
              </div>
              <div class="youname form-field">
                <label>姓名</label>
                <input name="name" type="text" />
              </div>
              <div class="tel-number form-field">
                <label>電話號碼</label>
                <input name="tel" type="text" />
              </div>
              <div class="email-address form-field">
                <label>電子郵件</label>
                <input name="email" type="text" />
              </div>
              <div class="demand form-field">
                <label>需求說明</label>
                <textarea name="demand" id="" cols="30" rows="10"></textarea>
              </div>
            </div>
            <!-- 隱私權政策 -->
            <div class="privacy-policy">
              <input id="privacy-policy" name="privacy" type="checkbox" />
              <label for="privacy-policy">隱私權政策</label>
            </div>
            <!-- 表單按鈕 -->
            <button type="submit">
              <p>確認送出</p>
            </button>
          </form>
        </div>
      </div>
    </main>
    @endsection

