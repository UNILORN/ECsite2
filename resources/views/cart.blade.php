<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <title>cart</title>
  </head>
  <body>

    <p class="cart_center">
      わたしのおんなのこ
    </p>

    <div class="navi">
      <ul>
        <li><a href="/">TOP</a></li>
        <li><a href="/long">Long</a></li>
        <li><a href="/medium">Medium</a></li>
        <li><a href="other">Other</a></li>
      </ul>
    </div>

    @if($items)
<div class="center2">
  <table class="cart_table">
    <tr class="info2">
      <td>商品名</td>
      <td>価格</td>
    </tr>
    @foreach($items as $index=>$Product)
    <tr>
      <td class="cart_td">{{$Product->name}}</td>
      <td class="cart_td">{{$Product->price}}</td>
      <td class="cart_td"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="location.href='/delete?index={{$index}}'">削除</button></td>
      <td class="cart_td"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="location.href='/delete/all?index={{$index}}'">全削除</button></td>
    </tr>
    @endforeach
  </table>
</div>
@else
<div class="cart_center">
  <p>商品は入っていません。</p>
</div>
@endif
<br>
  <div class="cart_button">
    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='/'">買い物を続ける</button>
    &nbsp;&nbsp;&nbsp;
    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='/'">購入手続きへ</button>
  </div>

</body>
</html>
