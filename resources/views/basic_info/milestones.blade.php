@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/backaboutus.css')}}" />
<link rel="stylesheet" href="{{asset('css/btn_new.css')}}">
@endsection
@section('main')
<main>
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
                        @foreach ($datas as $data)
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">{{$data->month}}<br />{{$data->years}}</div>
                            <div class="text">
                                <span>{{$data->content}}</span>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">4月<br />2015</div>
                            <div class="text">
                                <span>興和川自動化有限公司，於2015年創立於台灣封裝重點區域
                                    -高雄，專營各式客製化封裝檢測設備、耗材和加工件</span>
                            </div>
                        </div>
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">2017</div>
                            <div class="text">
                                興和川花費2年的時間成功取得台灣過半數的半導體合格商資格，服務範圍擴及全台
                            </div>
                        </div>
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">2018</div>
                            <div class="text">
                                業務範圍成功地拓展到中國市場，推廣生產線高精度加工件，展現興和川客製化實力
                            </div>
                        </div>
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">12月<br />2019</div>
                            <div class="text">
                                與封裝大廠合力開發半導體全新製程設備:
                                超音波清洗檢驗機，解決高階車用產品三大目標:
                                低汙染、低人力、高良率
                            </div>
                        </div>
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">5月<br />2020</div>
                            <div class="text">
                                協助客戶導入IOT工業4.0大數據系統，提升客戶生產之晶片品質
                            </div>
                        </div>
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">6月<br />2021</div>
                            <div class="text">
                                與NIKON合作開發晶圓移載量測設備:
                                AVM-3020，解決晶圓廠人員移載風險與產品良率
                            </div>
                        </div>
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">編輯</div>
                                <div class="btn-delete" style="margin:  0 20px 0 0;">刪除</div>
                            </div>
                            <div class="date">12月<br />2021</div>
                            <div class="text">
                                在多角化經營理念下，興和川服務拓展到中古設備、機台元件買賣以及其售後服務
                            </div>
                        </div>
                        <div class="card" style="position: relative;">
                            <div class="btnbox" style="margin: 0 0 0 60px; position: absolute; left: 100%;">
                                <div class="btn-check" style="margin:  0 10px 0 0;">新增</div>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
