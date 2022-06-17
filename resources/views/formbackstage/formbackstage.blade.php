@extends('template.backnav')
@section('title')
    About Us
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/form-backstage.css.map')}}">
@endsection
@section('main')
<main>
  <div id="page-tittle">
    <div class="tittle">
      <h2>表單回報 |</h2>
    </div>
  </div>
  @foreach ($datas as $data)
  <div id="form-report">
    <div class="content">
      <div class="content-tittle">
        <div class="type">
          <p>查詢類型：
            @if ($data->type == 1)
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
        @endif
          </p>
        </div>
        <div class="name">
          <p>姓名：{{ $data->name }}</p>
        </div>
        <div class="email">
          <p>Email：{{ $data->address }}</p>
        </div>
        <div class="state">
          <p>狀態：{{ $data->state }}</p>
        </div>
        <div class="comment-date">
          <p>留言日期：{{ $data->created_at }}</p>
        </div>
        <button>檢視</button>
      </div>
      <div class="box">
        <div class="container">
          <div class="box1">
            <input type="text"  disabled />
          </div>
          <div class="box1">
            <input type="text"  disabled />
          </div>
          <div class="box2">
            <input type="text" disabled />
          </div>
          <div class="box3">
            <select name="" id="" disabled>
              <option value="">尚未回覆</option>
              <option value="">已電子郵件聯絡</option>
              <option value="">已電話聯繫</option>
            </select>
          </div>
          <div class="box3">
            <input type="text" disabled />
          </div>
          <button type="submit" href="/contact/list/edit{{$data->id}}">檢視</button>
        </div>
      </div>

    </div>
  </div>
  @endforeach
</main>
@endsection
@section('js')

@endsection
