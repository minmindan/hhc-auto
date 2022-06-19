<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="stylesheet" href="./backaboutus.css">
  <link rel="stylesheet" href="../btn.css">
  <link rel="stylesheet" href="../css/backnav.css">
  
  <!-- swiper -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
  <nav>
    <div id="logo"><img src="../資產 3.png" alt=""></div>
    <div id="navlist">
        <div class="subnav">
            <p>前往網頁</p>
        </div>
        <div class="subnav">
            <p>修改密碼</p>
        </div>
        <div class="subnav backstagelist">
            <p>後台管理　<img src="../down_gray.svg" alt=""></p>
            <div class="list">
                <p onclick="location.href=
                'http://127.0.0.1:5501/%E6%96%B0%E5%A2%9E%E8%B3%87%E6%96%99%E5%A4%BE/topics.html';">
                
                最新消息</p>
                <img src="../gray_line.svg" alt="">
                <p onclick="location.href=
                'http://127.0.0.1:5501/%E6%96%B0%E5%A2%9E%E8%B3%87%E6%96%99%E5%A4%BE/company.html';">合作廠商</p>
                <img src="../gray_line.svg" alt="">
                <p onclick="location.href=
                'http://127.0.0.1:5501/%E6%96%B0%E5%A2%9E%E8%B3%87%E6%96%99%E5%A4%BE/milestones.html';">公司沿革</p>
                <img src="../gray_line.svg" alt="">
                <p onclick="location.href=
                'http://127.0.0.1:5501/%E6%96%B0%E5%A2%9E%E8%B3%87%E6%96%99%E5%A4%BE/porfile_edit.html';">關於我們</p>
                <img src="../gray_line.svg" alt="">
                <p onclick="location.href=
                'http://127.0.0.1:5501/banner-manage/index_banner.html';">Banner管理</p>
                <img src="../gray_line.svg" alt="">
                <p onclick="location.href=
                'http://127.0.0.1:5501/product-manage/product_equipment.html';">產品管理</p>
                <img src="../gray_line.svg" alt="">
                <p onclick="location.href=
                'http://127.0.0.1:5501/form-backstage/form-backstage.html';">表單回報</p>
            </div>
        </div>
        <div class="subnav signoutlist">
            <p>球球，您好　<img src="../down_gray.svg" alt=""></p>
            <div class="signout">
                <p>登出</p>
            </div>
        </div>
    </div>
</nav>
  <main>
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
                  <span><input type="text" value="興和川自動化有限公司"></span>
                </div>
                <div class="btnbox" style="margin: 0 0 0 120px;">
                  <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                  <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                </div>
              </div>
              <div class="card">
                <div class="build-field"></div>
                <div class="build-date"><input type="text" value="104年04月15日"></div>
                <div class="btnbox" style="margin: 0 0 0 120px;">
                  <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                  <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                </div>
              </div>
              <div class="card">
                <div class="address-field"></div>
                <div class="address"><input type="text" value="高雄市楠梓區藍昌路349巷25-7號"></div>
                <div class="btnbox" style="margin: 0 0 0 120px;">
                  <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                  <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                </div>
              </div>
              <div class="card">
                <div class="opening-field"></div>
                <div class="opening-hours"><input type="text" value="9:00-18:00"></div>
                <div class="btnbox" style="margin: 0 0 0 120px;">
                  <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                  <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                </div>
              </div>
              <div class="card">
                <div class="tel-field"></div>
                <div class="tel"><input type="text" value="07-3606871"></div>
                <div class="btnbox" style="margin: 0 0 0 120px;">
                  <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                  <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                </div>
              </div>
              <div class="card">
                <div class="items-field"></div>
                <div id="summernote">
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
                <div class="service-items">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
</body>

</html>