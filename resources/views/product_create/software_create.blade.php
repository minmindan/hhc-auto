@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/product_create.css') }}" />
    <style>
        a {
            text-decoration: none;
            color: #004098;
        }

        a:visited {
            color: #004098;
        }

        .note-editable {
            padding-left: 26px !important;
        }

        .note-editor {
            width: 70% !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('main')
    <main>
        <!-- 頁面標題列表 -->
        <div id="tittle-list-id">
            <div class="list-tittle">
                <h1>產品管理</h1>
                <ul>
                    <li>
                        <div><a href="/product-manage/equipment">設備</a></div>
                    </li>
                    <li>
                        <div class="blue"><a href="/product-manage/software">軟體</a></div>
                    </li>
                    <li>
                        <div><a href="/product-manage/parts">部品零件</a></div>
                    </li>
                    <li>
                        <div><a href="/product-manage/consumables">耗材</a></div>
                    </li>
                    <li>
                        <div><a href="/product-manage/maintenance">維修</a></div>
                    </li>
                </ul>
            </div>
            <form action="/product-manage/software/store" method="post">
                @csrf
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
                                <p>新增日期</p>
                            </div>

                            <div class="field-btn"></div>
                        </div>
                    </div>
                    <div class="content-section">
                        <div class="top-section">
                            <!-- 圖片 -->
                            <div class="content-img">
                                <img src="./img/++.png" alt="" />
                            </div>

                            <!-- 排序 -->
                            <div class="image-gradation">
                                <select name="gradation" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">-</option>
                                </select>
                            </div>

                            <!-- 新增日期 -->
                            <div class="date-bulid">
                                <input type="text" disabled placeholder="此處預設值為 年/月/日 " />
                            </div>
                            <!-- 新增按鈕 -->
                            <div class="bulid-btn">
                                <button>新增</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bottom-section">
                    <div class="formto">
                        <div class="form-input star-items">
                            <p>主打商品</p>
                            <ul>
                                <li>
                                    <input type="radio" name="star" id="items1" value="1" />
                                    <label for="items1">主打商品1</label>
                                </li>
                                <li>
                                    <input type="radio" name="star" id="items2" value="2"/>
                                    <label for="items2">主打商品2</label>
                                </li>
                                <li>
                                    <input type="radio" name="star" id="items3" value="3"/>
                                    <label for="items3">主打商品3</label>
                                </li>
                                <li>
                                    <input type="radio" name="star" id="items4" value="4"/>
                                    <label for="items4">主打商品4</label>
                                </li>
                                <li>
                                    <input type="radio" name="star" id="items5" value="5"/>
                                    <label for="items5">主打商品5</label>
                                </li>
                                <li>
                                    <input type="radio" name="star" id="items6" value="6"/>
                                    <label for="items6">不是主打商品</label>
                                </li>
                            </ul>
                        </div>
                        <!-- 產品名稱 -->
                        <div class="form-input">
                            <p>產品名稱</p>
                            <input name="prduct_name" type="text" />
                        </div>
                        <!-- 產品款號 -->
                        <div class="form-input">
                            <p>產品款號</p>
                            <input name="product_type" type="text" />
                        </div>
                        <!-- 產品規格 -->
                        <div class="form-input">
                            <p>產品規格</p>
                            <textarea id="summernote1" name="standard"></textarea>
                        </div>
                        <!-- 產品特色 -->
                        <div class="form-input">
                            <p>產品特色</p>
                            <textarea id="summernote2" name="feature"></textarea>
                        </div>
                        <!-- 產品說明 -->
                        <div class="form-input">
                            <p>產品說明</p>
                            <textarea id="summernote3" name="illustrate"></textarea>
                        </div>
                        <!-- 上傳按鈕 -->
                        <div class="btn">
                            <button type="submit">儲存</button>
                            <button>取消</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
@section('js')
    <script>
        $('#summernote1').summernote({
            placeholder: '　請輸入文字.....',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
            ]
        });
        $('#summernote2').summernote({
            placeholder: '　請輸入文字.....',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
            ]
        });
        $('#summernote3').summernote({
            placeholder: '　如果沒有圖片，會顯示此欄位內容',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
            ]
        });
    </script>
@endsection
