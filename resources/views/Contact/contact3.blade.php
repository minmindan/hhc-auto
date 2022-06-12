@extends('template.template')
@section('title')
Contact
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/contact3.css')}}" />
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
            <h3>感謝您的聯繫</h3>
            <p>專人會儘速與您聯繫</p>
          </div>
            <!-- 返回按鈕 -->
            <button type="submit">
              <p>返回首頁</p>
            </button>
          </div>
        </div>
      </div>
    </main>
    @endsection
