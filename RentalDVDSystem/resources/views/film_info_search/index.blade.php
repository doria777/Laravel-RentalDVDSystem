<!DOCTYPE html>
  <head>
    <title>映画情報検索画面</title>
  </head>

  <body>
    <h1>映画情報検索</h1>
      <form action="film_info_search_result" method="get">
        @csrf
        <input class="input" type="text" name="title" placeholder="映画のタイトルを入力" autocomplete="off">
        <input class="button" type="submit" value="検索">
      </form>

      <form action="customer_info_search" method="get">
        @csrf
        <input class="button" type="submit" value="顧客情報検索画面">
      </form>

  </body>
</html>