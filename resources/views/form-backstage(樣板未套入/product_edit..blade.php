<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/product_edit.css" />
  </head>
  <body>
    <!-- 頁面導覽列 -->
    <nav></nav>
    <!-- 頁面內容 -->
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
              <div class="field-date">
                <p>修改日期</p>
              </div>
            </div>
          </div>
          <div class="content-section">
            <form action="">
              <!-- 圖片 -->
              <div class="content-img">
                <img src="./img/Rectangle 154.png" alt="" />
              </div>
              <!-- 產品名稱 -->
              <div class="product-name">
                <input type="text" disabled />
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
              <!-- 修改日期 -->
              <div class="date-fixed">
                <input type="text" />
              </div>
            </form>
          </div>
        </div>
        <form id="formto">
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
        </form>
      </div>
    </main>
    <!-- 頁面內容 -->
  </body>
</html>
