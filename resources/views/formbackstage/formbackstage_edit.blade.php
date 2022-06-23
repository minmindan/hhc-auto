@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/form-backstage_edit.css') }}">
    <style>
        a{
            text-decoration:none;
        }
        a:visited{
            color: white;
        }
    </style>
@endsection
@section('main')
    <div id="contact-id">

        <!-- 表單區塊 -->
        <div class="form-container">
            <!-- 說明文字 -->
            <div class="directions">
                <h5>
                    若您有任何疑問或建議,歡迎留下您寶貴的建議,<br />
                    我們將盡速與您聯擊,感謝!
                </h5>
            </div>
            <!-- 表單 -->
            <form action="/contact/list/update/{{$data->id}}" method="POST">
                <!-- 表單內容 -->
                @csrf
                <div class="form-section">
                    <div class="type form-field">
                        <label>查詢類型</label>
                        <select disabled name="type" id="">
                            <option value="1" @if (($data['type'] ?? '') == 1) {{ 'selected' }} @endif>設備</option>
                            <option value="2" @if (($data['type'] ?? '') == 2) {{ 'selected' }} @endif>軟體</option>
                            <option value="3" @if (($data['type'] ?? '') == 3) {{ 'selected' }} @endif>部品零件
                            </option>
                            <option value="4" @if (($data['type'] ?? '') == 4) {{ 'selected' }} @endif>耗材</option>
                            <option value="5" @if (($data['type'] ?? '') == 5) {{ 'selected' }} @endif>維修</option>
                            <option value="6" @if (($data['type'] ?? '') == 6) {{ 'selected' }} @endif>其他</option>
                        </select>
                    </div>
                    <div class="company-name form-field">
                        <label>您的公司名稱/個人</label>
                        <input type="text" disabled value="{{ $data->company }}" />
                    </div>
                    <div class="appellation form-field">
                        <label for="text">職稱</label>
                        <input id="text" t type="text" disabled value="{{ $data->title }}" />
                    </div>
                    <div class="youname form-field">
                        <label>姓名</label>
                        <input type="text" disabled value="{{ $data->name }}" />
                    </div>
                    <div class="tel-number form-field">
                        <label>電話號碼</label>
                        <input type="text" disabled value="{{ $data->phone }}" />
                    </div>
                    <div class="email-address form-field">
                        <label>電子郵件</label>
                        <input type="text" disabled value="{{ $data->address }}">
                    </div>
                    <div class="demand form-field">
                        <label>需求說明</label>
                        <textarea disabled name="" id="" cols="30" rows="10">{{ $data->demand }}</textarea>
                    </div>
                    <div class="state form-field">
                        <label>處理狀態</label>
                        <select name="state" id="">
                            <option value="1" @if (($data->state ?? '') == 1) {{ 'selected' }} @endif>尚未回覆</option>
                            <option value="2" @if (($data->state ?? '') == 2) {{ 'selected' }} @endif>郵件回復</option>
                            <option value="3" @if (($data->state ?? '') == 3) {{ 'selected' }} @endif>電話回覆</option>
                            <option value="4" @if (($data->state ?? '') == 4) {{ 'selected' }} @endif>其他回復</option>
                        </select>
                    </div>
                    <div class="remark form-field">
                        <label>備註</label>
                        <textarea name="remark" id="" cols="30" rows="10">{{ $data->remark ?? '' }}</textarea>
                    </div>
                    <div class="button form-field">
                        <button type="submit"
                            style="font-size:15px ;margin:0 20px 0 auto;
              border-radius: 15px; background-color:#004098; color:white; border:1px solid #004098; height:30px; width:150px;">儲存</button>
                        <a type="submit" href="/contact/list"
                        style="display:flex;align-items: center;
                        justify-content: center; font-size:15px ;margin:0 20px 0 auto;
          border-radius: 15px; background-color:#004098; color:white !important; border:1px solid #004098; height:30px; width:150px;">返回</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
