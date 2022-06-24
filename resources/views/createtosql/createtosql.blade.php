<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 公司資料 -->
    <div id="company">
    <form method="post" action="/weneedtoaddmoreinfonmation/cminfo">
        @csrf
        <div class="company_name">
            <p>company_name</p>
            <input type="text" name="company_name" id="">
        </div>
        <div class="found">
            <p>found</p>
            <input type="text" name="found" id="">
        </div>
        <div class="address">
            <p>address</p>
            <input type="text" name="address" id="">
        </div>
        <div class="opening">
            <p>opening</p>
            <input type="text" name="opening" id="">
        </div>
        <div class="phone">
            <p>phone</p>
            <input type="text" name="phone" id="">
        </div>
        <div class="serve">
            <p>serve</p>
            <input type="text" name="serve" id="">
        </div>
        <button type="submit">新增</button>
    </form>
</div>

    <!-- 新增首頁BANNER頁面 -->
<div id="banner1">
    <form method="post" action="/weneedtoaddmoreinfonmation/index_b">
        @csrf
        <div class="img_path">
            <p>img_path</p>
            <input type="text" name="img_path" id="">
        </div>
        <div class="tittle">
            <p>tittle</p>
            <input type="text" name="tittle" id="">
        </div>
        <div class="subtittle">
            <p>subtittle</p>
            <input type="text" name="subtittle" id="">
        </div>
        <button type="submit">新增</button>
    </form>
</div>
        <!-- 新增關於我們BANNER頁面 -->
<div id="banner2">
        <form method="post" action="/weneedtoaddmoreinfonmation/abus_b">
            @csrf
            <div class="img_path">
                <p>img_path</p>
                <input type="text" name="img_path" id="">
            </div>
            <div class="tittle">
                <p>tittle</p>
                <input type="text" name="tittle" id="">
            </div>
            <div class="subtittle">
                <p>subtittle</p>
                <input type="text" name="subtittle" id="">
            </div>
            <button type="submit">新增</button>
        </form>
</div>
    <!-- 新增聯繫我們BANNER頁面 -->
<div id="banner3">
    <form method="post" action="/weneedtoaddmoreinfonmation/cont_b">
        @csrf
        <div class="img_path">
            <p>img_path</p>
            <input type="text" name="img_path" id="">
        </div>
        <div class="tittle">
            <p>tittle</p>
            <input type="text" name="tittle" id="">
        </div>
        <div class="subtittle">
            <p>subtittle</p>
            <input type="text" name="subtittle" id="">
        </div>
        <button type="submit">新增</button>
    </form>
</div>
    <!-- 新增製程BANNER頁面 -->
<div id="banner4">
    <form method="post" action="/weneedtoaddmoreinfonmation/poces_b">
        @csrf
        <div class="img_path">
            <p>img_path</p>
            <input type="text" name="img_path" id="">
        </div>
        <div class="tittle">
            <p>tittle</p>
            <input type="text" name="tittle" id="">
        </div>
        <div class="subtittle">
            <p>subtittle</p>
            <input type="text" name="subtittle" id="">
        </div>
        <button type="submit">新增</button>
    </form>
</div>
    <!-- 新增商品BANNER頁面 -->
<div id="banner5">
    <form method="post" action="/weneedtoaddmoreinfonmation/product_b">
        @csrf
        <div class="img_path">
            <p>img_path</p>
            <input type="text" name="img_path" id="">
        </div>
        <div class="tittle">
            <p>tittle</p>
            <input type="text" name="tittle" id="">
        </div>
        <div class="subtittle">
            <p>subtittle</p>
            <input type="text" name="subtittle" id="">
        </div>
        <button type="submit">新增</button>
    </form>
</div>


</body>

</html>
