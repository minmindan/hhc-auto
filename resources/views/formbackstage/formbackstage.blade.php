@extends('template.backnav')
@section('title')
興和川自動化有限公司
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/form-backstage.css')}}">
<style>
    a{
        text-decoration: none;
    }
    p{
            color: black !important;
        }
</style>
@endsection
@section('main')
<main>
  <div id="page-tittle">
    <div class="tittle">
      <h2>表單回報 |</h2>
    </div>
  </div>

  <div class="content-tittle">
    <div class="type">
      <p>查詢類型：
      </p>
    </div>
    <div class="name">
      <p>姓名：</p>
    </div>
    <div class="email">
      <p>Email：</p>
    </div>
    <div class="state">
      <p>狀態：</p>
    </div>
    <div class="comment-date">
      <p>留言日期：</p>
    </div>
    <button>檢視</button>
  </div>
  @foreach ($datas as $data)
  <div id="form-report" style="background: white;">
    <div class="content">
      <div class="box">
        <div class="container">
          <div class="box1">
            <input type="text"  disabled value="@if ($data->type == 1)
            {{ '設備' }}
        @elseif ($data->type == 2)
            {{ '軟體' }}
        @elseif ($data->type == 3)
            {{ '部品零件' }}
        @elseif ($data->type == 4)
            {{ '耗材' }}
        @elseif ($data->type == 5)
            {{ '維修' }}
        @elseif ($data->type == 6)
            {{ '其他問題' }}
        @endif"/>
          </div>
          <div class="box1">
            <input type="text"  disabled value="{{ $data->name }}"/>
          </div>
          <div class="box2">
            <input type="text" disabled value="{{ $data->address }}"/>
          </div>
          <div class="box3">
            <select disabled name="state" id="">
                <option value="1" @if (($data->state ?? '') == 1) {{ 'selected' }} @endif>尚未回覆</option>
                <option value="2" @if (($data->state ?? '') == 2) {{ 'selected' }} @endif>郵件回復</option>
                <option value="3" @if (($data->state ?? '') == 3) {{ 'selected' }} @endif>電話回覆</option>
                <option value="4" @if (($data->state ?? '') == 4) {{ 'selected' }} @endif>其他回復</option>
            </select>
          </div>
          <div class="box3">
            <input type="text" disabled value="{{ $data->created_at }}"/>
          </div>
          <a style="color: black !important; border:1px solid; padding:8px;" type="submit" href="/contact/list/edit/{{$data->id}}">檢視</a>
        </div>
      </div>

    </div>
  </div>
  @endforeach
</main>
@endsection
@section('js')

@endsection
