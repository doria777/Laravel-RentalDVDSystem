<!DOCTYPE html>
  <head>
    <title>顧客情報検索画面</title>
  </head>

  <body>
    <h1>顧客情報検索</h1>

      <form action="customer_info_search_result" method="get">
        @csrf
        <input class="input" type="text" name="customer_name" placeholder="顧客名称を入力" autocomplete="off">
        <input class="button" type="submit" value="検索">
      </form>

      <form action="film_info_search" method="get">
        @csrf
        <input class="button" type="submit" value="映画情報検索画面">
      </form>

      <form action="dashboard" method="get">
        @csrf
        <input class="button" type="submit" value="ダッシュボード">
      </form>
  </body>
</html>