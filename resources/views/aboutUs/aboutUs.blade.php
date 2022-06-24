@extends('template.template')
@section('title')
興和川自動化有限公司
@endsection
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}" />
    <!-- swiper -->
    {{-- <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    /> --}}
@section('main')
<main>

       <!-- Banner大圖片 -->
       <div id="banner">
        <div class="banner-container">
          <div class="sub-section">
            <!-- 標題區塊&SCROLL -->
            <div class="tittle-en">
              <h3>ABOUT US</h3>
            </div>
            <div class="tittle-ch">
              <h4>關於我們</h4>
            </div>
            <!-- SCROLL示意 -->
            <div class="scroll-box">
              <div class="scroll-img">
                <img src="{{asset('image/icon/AboutUs/gray_dwon.svg')}}" alt="" />
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
                <div class="main-img-color"></div>
                <img src="{{$abus[0] -> img_path ??''}}" alt="" />
              </div>
              <!-- 頁面導覽塊 -->
              <div class="page-list">
                <ul>
                  <li><a href="#philosophy">經營理念</a></li>
                  <li><a href="#milestones">公司沿革</a></li>
                  <li><a href="#company-profile">公司簡介</a></li>
                </ul>
              </div>
               <!-- SCROLL示意 -->
            <div class="scroll-box">
              <div class="scroll-img">
                <img src="{{asset('image/icon/AboutUs/gray_dwon.svg')}}" alt="" />
              </div>
              <div class="scroll-text">
                <span>SCROLL</span>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 經營理念 -->
      <div id="philosophy">
        <div class="philosophy-container">
          <!-- 左方區塊 -->
          <div class="left-section">
            <div class="white-space">
              <h1>Company</h1>
              <h1>management</h1>
            </div>
          </div>
          <div class="right-section">
            <div class="main-container">
              <!-- 主標 -->
              <div class="tittle">
                <h3>經營理念</h3>
              </div>
              <div class="content">
                <p>
                  興和川致力於幫客戶提高生產力、提高品質，並自我保持競爭力，成為科技創新與自動化相結合為主題，是由從事科技自動化相關技術和產品的研發、生產、銷售、應用、服務等業務的企業、事業單位和個人自願組成的行業性聯盟公司。我們強調自動化不僅僅要服務於傳統的大規模製造，還要能夠服務於產品研發，服務於科技創新，服務於先進製造，我們把這樣的先進生產力的自動化作為興和川的理念，邁向科技、創新、高品質、高效率的方向服務客戶。
                </p>
                <div class="text">
                  <h6>對客戶</h6>
                  <span>深度理解客戶需求，並提供專業服務，以協助客戶優化產能</span><br />
                </div>
                <div class="text">
                  <h6>對合作夥伴</h6>
                  <span>以誠信為基礎，互惠共生為目標，協力同心提供最優質的服務給客戶</span><br />
                </div>
                <div class="text">
                  <h6>對員工</h6>
                  <span>提供舒適愉快的工作氛圍，與公司一同學習成長，共享榮耀</span><br />
                </div>
              </div>
            </div>
            <div class="subtittle-container">
              <!-- 副標 -->
              <div class="subtittle">
                <!-- icon -->
                <div class="icon">
                  <img src="{{asset('image/icon/AboutUs/blue_line.svg')}}" alt="" />
                </div>
                <!-- 內容 -->
                <div class="content">
                  <h4>追求創新</h4>
                  <span>創新、解決客戶問題是我們的目標，更是我們的企業文化。公司鼓勵員工自主提升技術力和提升團隊合作的契合度，以達成公司年度目標</span>
                </div>
              </div>
              <!-- 副標 -->
              <div class="subtittle">
                <!-- icon -->
                <div class="icon">
                  <img src="{{asset('image/icon/AboutUs/blue_line.svg')}}" alt="" />
                </div>
                <!-- 內容 -->
                <div class="content">
                  <h4>人才培育</h4>
                  <span>員工是公司的重要資產，有計畫的培育人才公司方能永續經營。專案以團體模式運作，透過作業標準化不斷提升團隊的向心力</span>
                </div>
              </div>
              <!-- 副標 -->
              <div class="subtittle">
                <!-- icon -->
                <div class="icon">
                  <img src="{{asset('image/icon/AboutUs/blue_line.svg')}}" alt="" />
                </div>
                <!-- 內容 -->
                <div class="content">
                  <h4>客戶滿意</h4>
                  <span>重視和顧客的需求，竭盡全力的達成每項專案，以客為尊、讓客戶滿意是全公司員工對自我的要求</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 經營理念圖 -->
      <div id="philosophy-img">
        <div class="philosophy-img-container">
          <div class="bg-color"></div>
          <div class="img-box">
            <div class="bg-image1">
              <img src="{{$abus[1]->img_path??''}}" alt="" />
            </div>
            <div class="bg-image2">
              <img src="{{$abus[2]->img_path??''}}" alt="" />
            </div>
          </div>
          <div class="img-box-swiper"></div>
        </div>
      </div>
      <!-- 公司沿革 -->
      <div id="milestones">
        <!-- 左方區塊 -->
        <div class="milestones-container">
          <div class="left-section">
            <div class="white-space">
              <h1>Company</h1>
              <h1>milestones</h1>
            </div>
          </div>
          <!-- 右方區塊 -->
          <div class="right-section">
            <div class="main-container">
              <div class="tittle">
                <h3>公司沿革</h3>
              </div>
              <div class="content">
                <div class="card">
                  <div class="date">4月<br />2015</div>
                  <div class="text">
                    <span>興和川自動化有限公司，於2015年創立於台灣封裝重點區域
                      -高雄，專營各式客製化封裝檢測設備、耗材和加工件</span>
                  </div>
                </div>
                <div class="card">
                  <div class="date">2017</div>
                  <div class="text">
                    興和川花費2年的時間成功取得台灣過半數的半導體合格商資格，服務範圍擴及全台
                  </div>
                </div>
                <div class="card">
                  <div class="date">2018</div>
                  <div class="text">
                    業務範圍成功地拓展到中國市場，推廣生產線高精度加工件，展現興和川客製化實力
                  </div>
                </div>
                <div class="card">
                  <div class="date">12月<br />2019</div>
                  <div class="text">
                    與封裝大廠合力開發半導體全新製程設備:
                    超音波清洗檢驗機，解決高階車用產品三大目標:
                    低汙染、低人力、高良率
                  </div>
                </div>
                <div class="card">
                  <div class="date">5月<br />2020</div>
                  <div class="text">
                    協助客戶導入IOT工業4.0大數據系統，提升客戶生產之晶片品質
                  </div>
                </div>
                <div class="card">
                  <div class="date">6月<br />2021</div>
                  <div class="text">
                    與NIKON合作開發晶圓移載量測設備:
                    AVM-3020，解決晶圓廠人員移載風險與產品良率
                  </div>
                </div>
                <div class="card">
                  <div class="date">12月<br />2021</div>
                  <div class="text">
                    在多角化經營理念下，興和川服務拓展到中古設備、機台元件買賣以及其售後服務
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 公司沿革圖 -->
      <div id="milestones-img">
        <div class="history-img-container">
          <div class="bg-color"></div>
          <div class="img-box">
            <div class="bg-image3">
              <img src="{{$abus[3]->img_path??''}}" alt="" />
            </div>
            <div class="bg-image4">
              <img src="{{$abus[4]->img_path??''}}" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- 公司簡介 -->
      <div id="company-profile">
        <div class="company-profile-container">
          <!-- 左方區塊 -->
          <div class="left-section">
            <div class="white-space">
              <h1>Company</h1>
              <h1>profile</h1>
            </div>
          </div>
          <!-- 右方區塊 -->
          <div class="right-section">
            <div class="main-container">
              <div class="tittle">
                <h3>公司簡介</h3>
              </div>
              <div class="content">
                <div class="card">
                  <div class="name-field"></div>
                  <div class="company-name">
                    <span>興和川自動化有限公司</span>
                  </div>
                </div>
                <div class="card">
                  <div class="build-field"></div>
                  <div class="build-date">104年04月15日</div>
                </div>
                <div class="card">
                  <div class="address-field"></div>
                  <div class="address">高雄市楠梓區藍昌路349巷25-7號</div>
                </div>
                <div class="card">
                  <div class="opening-field"></div>
                  <div class="opening-hours">9:00-18:00</div>
                </div>
                <div class="card">
                  <div class="tel-field"></div>
                  <div class="tel">07-3606871</div>
                </div>
                <div class="card">
                  <div class="items-field"></div>
                  <div class="service-items">
                    <ul>
                      <li>1. 機械設備製造</li>
                      <br />
                      <li>2. 自動控制設備工程</li>
                      <br />
                      <li>3. 機械批發與零售</li>
                      <br />
                      <li>4. 精密儀器批發</li>
                      <br />
                      <li>5. 軟體客製化撰寫</li>
                      <br />
                      <li>6. 電腦相關產品批發</li>
                      <br />
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 公司地圖 -->
      <div id="location-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.1494594356814!2d120.28709751541997!3d22.722685533170186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0f006df63641%3A0x2b84046184675f64!2z6IiI5ZKM5bed6Ieq5YuV5YyW5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1654151641772!5m2!1szh-TW!2stw"
          style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </main>
@endsection
@section('js')
<script src="../navbar.js"></script>
    <script>
      var img1 = document.querySelector(".bg-image1");
      var img2 = document.querySelector(".bg-image2");
      var img3 = document.querySelector(".bg-image3");
      var img4 = document.querySelector(".bg-image4");

      var windowW = window.innerWidth;

      function changeImg1() {
        var img1 = document.querySelector(".bg-image1");
        var img2 = document.querySelector(".bg-image2");

        img1.style.display="none";
        img2.style.display="block";

        setTimeout("changeImg2()",5000);

      }

      function changeImg2(){
        var img1 = document.querySelector(".bg-image1");
        var img2 = document.querySelector(".bg-image2");
        img1.style.display="block";
        img2.style.display="none";
        setTimeout("changeImg1()",5000);


      }

      function changeImg3(){
        var img3 = document.querySelector(".bg-image3");
        var img4 = document.querySelector(".bg-image4");
        img3.style.display="none";
        img4.style.display="block";
        setTimeout("changeImg4()",5000);


      }

      function changeImg4(){
        var img3 = document.querySelector(".bg-image3");
        var img4 = document.querySelector(".bg-image4");
        img3.style.display="block";
        img4.style.display="none";
        setTimeout("changeImg3()",5000);


      }


      if (windowW <= 768) {
        setTimeout("changeImg1()",5000);
        // setInterval("changeImg2()",10001);
        setTimeout("changeImg3()",5000);
        // setInterval("changeImg4()",10001);
      }
    </script>
@endsection
