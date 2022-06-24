@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/product_edit.css') }}" />
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

        .image-build {
            display: flex;
            align-items: center;
            width: 150px;
            height: 42px;
            margin-left: 15px;
            padding-left: 50px;
        }

        .image-build input {
            width: 150px;
        }

        .image-gradation {
            display: flex;
            align-items: center;
            justify-content: center;
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
                        <div><a href="/product-manage/software">軟體</a></div>
                    </li>
                    <li>
                        <div><a href="/product-manage/parts">部品零件</a></div>
                    </li>
                    <li>
                        <div><a href="/product-manage/consumables">耗材</a></div>
                    </li>
                    <li>
                        <div class="blue"><a href="/product-manage/maintenance">維修</a></div>
                    </li>
                </ul>
            </div>

            <form action="/product-manage/maintenance/update/{{ $product->id }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="list-container">
                    <div class="field-section">
                        <div class="content">
                            <div class="field-img">
                                <p>主要圖片/影片</p>
                            </div>

                            <div class="field-radation">
                                <p>主要商品排序</p>
                            </div>

                            <div class="field-date">
                                <p>更換新圖片</p>
                            </div>

                        </div>
                    </div>

                    <div class="content-section">
                        <div class="top-section">

                            <!-- 圖片 -->
                            <div class="content-img">
                                <img src="{{ $product->primary_img ?? '' }}" alt="">
                            </div>

                            <!-- 排序 -->
                            <div class="image-gradation">
                                <select name="weights" id="">
                                    <option value="1" @if ($product->weights == 1) selected @endif
                                        @foreach ($maintenance2 as $ma2)
                                        @if ($ma2->weights == 1)
                                        hidden
                                        @endif
                                        @endforeach
                                        >1</option>
                                    <option value="2" @if ($product->weights == 2) selected @endif
                                        @foreach ($maintenance2 as $ma2)
                                        @if ($ma2->weights == 2)
                                        hidden
                                        @endif
                                        @endforeach
                                        >2</option>
                                    <option value="3" @if ($product->weights == 3) selected @endif
                                        >-</option>
                                </select>
                            </div>

                            <!-- 新增日期 -->
                            <div class="image-build">
                                <input type="file" name="product_img" accept="image/*">
                            </div>

                        </div>
                    </div>


                    <div class="field-section">
                        <div class="content">
                            <div class="field-img">
                                <p>其他圖片/影片</p>
                            </div>

                            <div class="field-radation">
                            </div>

                            <div class="field-date" style="display: flex;direction:column; ">
                                <p>刪除圖片</p>
                            </div>

                        </div>
                    </div>

                    <div class="sub-section">

                        @foreach ($imgs as $go)
                            <div class="top-section" id="sec_img{{ $go->id }}">

                                <!-- 圖片 -->
                                <div class="content-img" id="{{ $go->id }}">
                                    <img src="{{ $go->path }}" alt="">
                                </div>
                                <!-- 排序 -->
                                <div class="image-gradation">

                                </div>

                                <!-- 新增日期 -->
                                <div class="date-bulid" style="display: flex; justify-content:center; align-items:center;">
                                    <button type="button" onclick="d_sec_img({{ $go->id }})">刪除</button>
                                </div>
                            </div>
                        @endforeach


                        <div class="field-section" style="margin-top: 50px;">
                            <div class="content">
                                <div class="field-img">
                                    <p>新增其他圖片</p>

                                </div>

                                <div class="field-radation"
                                    style=" width:150px !important; display:flex; align-items:center; justify-content:center;">
                                    <input type="file" name="second_img[]" multiple accept="image/*">
                                </div>

                                <div class="field-date" style="display: flex;direction:column; ">
                                </div>

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
                                    <input @if ($product->primary == 1) checked @endif
                                        @foreach ($equipment as $e) @if ($e->primary == 1) disabled @endif
                                        @endforeach
                                    @foreach ($software as $s) @if ($s->primary == 1) disabled @endif
                                    @endforeach
                                    @foreach ($components as $cm) @if ($cm->primary == 1) disabled @endif
                                    @endforeach
                                    @foreach ($consumables as $cn) @if ($cn->primary == 1) disabled @endif
                                    @endforeach
                                    @foreach ($maintenance as $ma) @if ($ma->primary == 1) disabled @endif
                                    @endforeach

                                    value="1" type="radio"
                                    name="items" id="items1" />
                                    <label for="items1">主打商品1</label>
                                </li>
                                <li>

                                    <input @if ($product->primary == 2) checked @endif
                                        @foreach ($equipment as $e) @if ($e->primary == 2) disabled @endif
                                        @endforeach
                                    @foreach ($software as $s) @if ($s->primary == 2) disabled @endif
                                    @endforeach
                                    @foreach ($components as $cm) @if ($cm->primary == 2) disabled @endif
                                    @endforeach
                                    @foreach ($consumables as $cn) @if ($cn->primary == 2) disabled @endif
                                    @endforeach
                                    @foreach ($maintenance as $ma) @if ($ma->primary == 2) disabled @endif
                                    @endforeach

                                    value="2" type="radio"
                                    name="items" id="items2" />
                                    <label for="items2">主打商品2</label>
                                </li>
                                <li>
                                    <input @if ($product->primary == 3) checked @endif
                                        @foreach ($equipment as $e) @if ($e->primary == 3) disabled @endif
                                        @endforeach
                                    @foreach ($software as $s) @if ($s->primary == 3) disabled @endif
                                    @endforeach
                                    @foreach ($components as $cm) @if ($cm->primary == 3) disabled @endif
                                    @endforeach
                                    @foreach ($consumables as $cn) @if ($cn->primary == 3) disabled @endif
                                    @endforeach
                                    @foreach ($maintenance as $ma) @if ($ma->primary == 3) disabled @endif
                                    @endforeach
                                    value="3" type="radio"
                                    name="items" id="items3" />
                                    <label for="items3">主打商品3</label>
                                </li>
                                <li>
                                    <input @if ($product->primary == 4) checked @endif
                                        @foreach ($equipment as $e) @if ($e->primary == 4) disabled @endif
                                        @endforeach
                                    @foreach ($software as $s) @if ($s->primary == 4) disabled @endif
                                    @endforeach
                                    @foreach ($components as $cm) @if ($cm->primary == 4) disabled @endif
                                    @endforeach
                                    @foreach ($consumables as $cn) @if ($cn->primary == 4) disabled @endif
                                    @endforeach
                                    @foreach ($maintenance as $ma) @if ($ma->primary == 4) disabled @endif
                                    @endforeach

                                    value="4" type="radio"
                                    name="items" id="items4" />
                                    <label for="items4">主打商品4</label>
                                </li>
                                <li>
                                    <input @if ($product->primary == 5) checked @endif
                                        @foreach ($equipment as $e) @if ($e->primary == 5) disabled @endif
                                        @endforeach
                                    @foreach ($software as $s) @if ($s->primary == 5) disabled @endif
                                    @endforeach
                                    @foreach ($components as $cm) @if ($cm->primary == 5) disabled @endif
                                    @endforeach
                                    @foreach ($consumables as $cn) @if ($cn->primary == 5) disabled @endif
                                    @endforeach
                                    @foreach ($maintenance as $ma) @if ($ma->primary == 5) disabled @endif
                                    @endforeach
                                    value="5" type="radio"
                                    name="items" id="items5" />
                                    <label for="items5">主打商品5</label>
                                </li>


                                <li>
                                    <input @if ($product->primary == 6) checked @endif value="6" type="radio"
                                        name="items" id="items6" />
                                    <label for="items6">不是主打商品</label>
                                </li>

                            </ul>
                        </div>
                        <!-- 產品名稱 -->
                        <div class="form-input">
                            <p>產品名稱</p>
                            <input name="product_name" value="{{ $product->product_name }}" type="text" />
                        </div>
                        <!-- 產品款號 -->
                        <div class="form-input">
                            <p>產品款號</p>
                            <input name="product_model" value="{{ $product->model }}" type="text" />
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
        tabsize: 2,
        height: 120,
        disableDragAndDrop: false,
        toolbar: [
            ['color', ['color']],
            ['font', ['bold', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
        ]
    });
    $('#summernote2').summernote({
        tabsize: 2,
        disableDragAndDrop: true,
        height: 120,
        toolbar: [
            ['color', ['color']],
            ['font', ['bold', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
        ]
    });
    $('#summernote3').summernote({
        tabsize: 2,
        disableDragAndDrop: false,
        height: 120,
        toolbar: [
            ['color', ['color']],
            ['font', ['bold', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
        ]
    });
</script>

<script>
    var gotonote = document.getElementsByClassName('note-editable')

    var go = document.querySelector('.go')

    gotonote[0].setAttribute('id', 'standard');
    gotonote[1].setAttribute('id', 'feature');
    gotonote[2].setAttribute('id', 'illustrate');

    gotonote[0].setAttribute('name', 'standard');
    gotonote[1].setAttribute('name', 'feature');
    gotonote[2].setAttribute('name', 'illustrate');


    var note1 = document.getElementById('standard')
    var note2 = document.getElementById('feature')
    var note3 = document.getElementById('illustrate')

    note1.innerHTML = `{!! $product->standard !!}`
    note2.innerHTML = `{!! $product->feature !!}`
    note3.innerHTML = `{!! $product->illustrate !!}`
</script>

<script>
    function d_sec_img(id) {

        let formData = new FormData();
        // formData.append('_method', 'delete');
        formData.append('_token', '{{ csrf_token() ?? '' }}');


        fetch('/product-manage/equipment/d_sec_img/' + id, {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                let element = document.querySelector('#sec_img' + id)
                element.parentNode.removeChild(element);
            })
    }
</script>

<script>
    function c_sec_img(id) {

        let formData = new FormData();
        formData.append('_method', 'post');
        formData.append('_token', '{{ csrf_token() ?? '' }}');


        fetch('/product-manage/equipment/c_sec_img/' + id, {
            method: 'POST',
            body: formData
        })

    }
</script>
@endsection
