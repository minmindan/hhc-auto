<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/99e51d1c05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./backindex.css">
    <link rel="stylesheet" href="./font.css">
    <link rel="stylesheet" href="../btn.css">
    <link rel="stylesheet" href="../css/backnav.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            position: relative;
        }

        * {
            font-family: 'Noto Sans TC', 'sans-serif';
            box-sizing: border-box;
        }
    </style>
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
                    'http://127.0.0.1:5501/%E6%96%B0%E5%A2%9E%E8%B3%87%E6%96%99%E5%A4%BE/topics.html';">最新消息</p>
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
    <main id="main">
        <!-- COMPANY -->
        <div id="company">
            <h1 class="company_title">COMPANY</h1>
            <p>合作客戶</p>
            <div class="btnbox">
                <div class="btn-edit">編輯</div>
                <div class="btn-store">儲存</div>
                <div class="btn-cancel">取消</div>
            </div>
            <div class="com">
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/南茂.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/典範.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/力成.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/同欣.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/國祥.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/日月光.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/晶測.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/晶電.svg" alt="">
                </div>
                <div class="com_img">
                    <div class="stop">
                        <div class="stop_"></div>
                    </div>
                    <img src="./image/SVG_彩圖/矽品.svg" alt="">
                </div>
                <div class="create_com">
                    <input type="file" name="com_img" id="com_img" accept="image/*">
                    <div>
                        <span>公司名稱</span>
                        <input type="text" name="com_name" id="com_name">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>