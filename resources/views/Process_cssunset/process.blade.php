@extends('template.template')
@section('title')
About Us
@endsection
@section('css')

<link rel="stylesheet" href="{{./css/process.css}}">
@endsection
@section('main')
<main>

     <!-- Banner -->
  <div id="banner">
    <div class="banner-container">
      <div class="sub-section">
        <!-- 標題區塊&SCROLL -->
        <div class="tittle-en">
          <h3>PROCESS</h3>
        </div>
        <div class="tittle-ch">
          <h4>產品製作流程</h4>
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


    <!-- 進度表 -->
    <div id="process-container">
        <div class="process1">
            <!-- 左方區塊 -->
            <div class="section-l">
                <div class="step1">01</div>
                <h3>諮詢</h3>
            </div>
            <!-- 右方區塊 -->
            <div class="section-r">
                <div class="step-content">
                    <div class="sup-directions1">
                        <div class="tittle">
                            <p>方法一</p>
                        </div>
                        <div class="content">網頁聯繫表單</div>
                    </div>
                    <div class="sup-directions2">
                        <div class="tittle">
                            <p>方法二</p>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Mail 敝司</li>
                                <li>業務：mc@hhc-auto.com</li>
                                <li>設計開發：aaron@hhc-auto.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sup-directions3">
                        <p>請貴公司<span>提供詳細的需求或者圖面</span>，我們專員會馬上與您聯繫，並且進行評估</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="process2">
            <!-- 左方區塊 -->
            <div class="section-l">
                <div class="step2">02</div>
                <h3>初步評估</h3>
            </div>
            <!-- 右方區塊 -->
            <div class="section-r">
                <div class="step-content">
                    <div class="sup-directions1">
                        <p>視需求專員會進一步<span>與貴公司討論產品細項</span>
                        </p>
                    </div>
                    <div class="sup-directions2">
                        <div class="tittle">
                            <p>舉例說明</p>
                        </div>
                        <div class="content">
                            <p>索取樣品以利設備/模組開發</p>
                            <p>到客戶端產線實際了解現場狀況</p>
                        </div>
                    </div>
                    <div class="sup-directions3">
                        <p>深層了解需求後，會做廣面的評估並設計圖面</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="process3">
            <!-- 左方區塊 -->
            <div class="section-l">
                <div class="step3">03</div>
                <h3>報價</h3>
            </div>
            <!-- 右方區塊 -->
            <div class="section-r">
                <div class="step-content">
                    <div class="sup-directions1">
                        <p>待產品細項確認後</p>
                    </div>
                    <div class="sup-directions2">
                        <p>敝司將會提供一份完整<span>報價單</span></p>
                        <p>若貴公司屬於<span>客製化需求者</span>，敝司將會提供圖面供貴公司參考</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="process4">
            <!-- 左方區塊 -->
            <div class="section-l">
                <div class="step4">04</div>
                <h3>確認</h3>
            </div>
            <!-- 右方區塊 -->
            <div class="section-r">
                <div class="step-content">
                    <div class="sup-directions1">
                        <p>若貴公司滿意設計規劃者，請提供以下資料</p>
                    </div>
                    <div class="sup-directions2">
                        <div class="tittle">
                            <p>二擇一</p>
                        </div>
                        <div class="content">
                            <p>請提供貴公司的專屬訂單</p>
                            <p>回簽敝司的報價單</p>
                        </div>
                    </div>
                    <div class="sup-directions3">
                        <p>完成以上作業者，皆視同<span>簽訂採購合約</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="process5">
            <!-- 左方區塊 -->
            <div class="section-l">
                <div class="step5">05</div>
                <h3>出貨</h3>
            </div>
            <!-- 右方區塊 -->
            <div class="section-r">
                <div class="step-content">
                    <div class="sup-directions1">
                        <p>出貨前，將會先與貴公司</p>
                    </div>
                    <div class="sup-directions2">
                        <p>通知出貨日期</p>
                        <p>確認收件地址</p>
                        <p>隨貨附上發票</p>
                    </div>
                    <div class="sup-directions3">
                        <p>若貴公司在運輸上有特殊要求者，敝司將會全力配合</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 頁面連結 -->
    <div id="function-link">
        <div class="function-section">
            <div class="product-link">
                <!-- 快速連結 -->
                <div class="target-img">
                    <div class="image-box">
                        <img src="./img/範例.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="target-name">
                            <h2>PRODUCT</h2>
                            <div class="sup-icon">
                                <img src="./img/functionIcon/white_circle.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 快速連結 -->
            <div class="contact-link">
                <div class="target-img">
                    <div class="image-box">
                        <img src="./img/範例.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="target-name">
                            <h2>CONTACT</h2>
                            <div class="sup-icon">
                                <img src="./img/functionIcon/white_circle.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

