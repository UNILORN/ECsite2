<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <title>Detail</title>
  </head>
  <body>

  <div class="title">
    <p class="menu_center">
      わたしのおんなのこ
    </p>
  </div>

    <div class="top_right">
      @if(Auth::check())
      <a href="/cart"><img height="50" src="img/cart.png"></a>&nbsp;&nbsp;&nbsp;
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='logout'">ログアウト</button>&nbsp;&nbsp;&nbsp;
        @else
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='login'">ログイン</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='register'">新規登録</button>
        @endif
    </div>

    <div class="navi">
      <ul>
        <li><a href="/">TOP</a></li>
        <li><a href="/long">Long</a></li>
        <li><a href="/medium">Medium</a></li>
        <li><a href="other">Other</a></li>
      </ul>
    </div>


    <img class="Product_pict"src="{{$Product[0]->img}}">


    <div class="menu_center">
    <h2>{{$Product[0]->name}}</h2>
    <p>￥{{$Product[0]->price}}</p>
    <form action="/cart?id={{$Product[0]->id}}" method="post">
    {{csrf_field()}}
    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='/'">TOPに戻る</button>
    &nbsp;&nbsp;
    <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name ="button" class="button special fit" value="カートに追加">
  </form>
</div>
</body>
</html>
