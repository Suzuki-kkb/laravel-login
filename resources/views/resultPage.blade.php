<!DOCTYPE html>
<html>
  <head>
    <title>画面遷移テスト</title>
  </head>
  <body>
    <h1>POST結果</h1>
    <div>{{$msg}}</div>
    <div>ID：{{$user_id}}</div>
    <div>password：{{$password}}</div>
    <a href="{{ action('postTestController@inputForm')}}">login画面に戻る</a>
  </body>
</html