<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/long.css">
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <title>Long</title>
  </head>
  <body>

  <div class="title">
    <p class="long_center">
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

  <div class = "long_public">
    <a href="menu?id=1"><img class="long_item_pict" src="/img/1.png"></a>
    <p>￥500</p>
  </div>
  <div class = "long_public">
    <a href="menu?id=4"><img class="long_item_pict" src="/img/4.png"></a>
    <p>￥500</p>
  </div>
  <div class = "long_public">
    <a href="menu?id=6"><img class="long_item_pict" src="/img/6.png"></a>
    <p>￥500</p>
  </div>

  </body>
</html>
