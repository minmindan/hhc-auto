@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/product_consumables.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/product_consumables.css') }}">
    <style>
          a {
            text-decoration: none;
            color: #004098;
        }

        a:visited {
            color: #004098;
        }
        .content-section .produt-star {
            display: flex;
            align-items: start;
            justify-content: flex-start;
            min-width: 93px !important;
            max-width: 93px !important;

        }

        .produt-star input {
            border: 0px;
            width: auto !important;
        }

        .image-gradation {
            min-width: 94px !important;
        }

        .produt-star p{
            width: 100%;
            font-size: 0.8rem;
            border: 1px solid #bebebe;
            color: #737373;
        }
    </style>
@endsection
@section('main')
    <main>
        <!-- 頁面標題列表 -->
        <div id="tittle-list-id">
            <div class="list-tittle">
                <h1>產品管理</h1>
                <ul>
                    <li><a href="/product-manage/equipment">設備</a></li>
                    <li><a href="/product-manage/software">軟體</a></li>
                    <li><a href="/product-manage/parts">部品零件</a></li>
                    <li><a href="/product-manage/consumables">耗材</a></li>
                    <li><a href="/product-manage/maintenance">維修</a></li>
                </ul>
            </div>
            <div class="list-container">
                <!-- 欄位名稱 -->
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
                        <div class="field-button">
                        </div>
                    </div>
                </div>
                <!-- 內容 -->
                <div class="content-section">
                    @foreach ($product as $product)
                        <form id="product_card{{ $product->id }}"
                            action="/product-manage/consumables/edit/{{ $product->id }}" method="post">
                            @csrf
                            <!-- 圖片 -->
                            <div class="content-img">
                                <img src="{{ $product->primary_img ?? '' }}" alt="" />
                            </div>
                            <!-- 產品名稱 -->
                            <div class="product-name">
                                <input value="{{ $product->product_name ?? '' }}" type="text" disabled>
                            </div>
                            <!-- 排序 -->
                            <div class="image-gradation">
                                <select name="" id="" disabled="disabled">
                                    <option value="0">-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <!-- 主打產品 -->
                            <div class="produt-star">
                        @if ($product->primary == 1)
                        <p>主打商品1</p>
                        @elseif ($product->primary == 2)
                        <p>主打商品2</p>
                         @elseif ($product->primary == 3)
                         <p>主打商品3</p>
                         @elseif ($product->primary == 4)
                         <p>主打商品4</p>
                         @elseif ($product->primary == 5)
                         <p>主打商品5</p>
                         @elseif ($product->primary == 6)
                         <p>不是主打商品</p>
                         @endif

                            </div>
                            <!-- 功能按鈕 -->
                            <div class="function-button">
                                <button>編輯</button>
                                <button id="deletebtn" onclick="delete_img({{ $product->id ?? '' }})"
                                    type="button">刪除</button>
                            </div>
                        </form>
                    @endforeach


                    <form>
                        <!-- 圖片 -->
                        <div class="add-img">
                            <a href="/product-manage/consumables/create">
                                <img src="{{ asset('image/product_create/add_gray_img.png') ?? '' }}" alt="" />
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script>
        function delete_img(id) {
            if (confirm('是否要刪除') == true) {
                let formData = new FormData();
                formData.append('_token', '{{ csrf_token() ?? '' }}');


                fetch('/product-manage/consumables/delete/' + id, {
                        method: 'POST',
                        body: formData
                    })
                    .then(function(response) {
                        let element = document.querySelector('#product_card' + id)
                        element.parentNode.removeChild(element);
                    })
            }
        }
    </script>
@endsection
