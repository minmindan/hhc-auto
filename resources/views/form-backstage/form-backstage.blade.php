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
  <div id="form-report">
    <div class="content">
      <div class="content-tittle">
        <div class="type">
          <p>查詢類型</p>
        </div>
        <div class="name">
          <p>姓名</p>
        </div>
        <div class="email">
          <p>Email</p>
        </div>
        <div class="state">
          <p>狀態</p>
        </div>
        <div class="comment-date">
          <p>留言日期</p>
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
          <button type="submit">檢視</button>
        </div>
      </div>

    </div>
  </div>
</main>
@endsection

