<!DOCTYPE html>
<html>
  <head>
    <title>画面遷移テスト</title>
  </head>
  <body>
    <h1>入力フォームPOSTテスト</h1>
    <div>{{$msg}}</div>
    <form action="formPost" method="POST">
      @csrf
      <div>ID：<input type="text" name="user_id"></div>
      <div>password：<input type="text" name="password"></div>
      <input type="submit" name="ログイン">
    </form>
  </body>
</html>