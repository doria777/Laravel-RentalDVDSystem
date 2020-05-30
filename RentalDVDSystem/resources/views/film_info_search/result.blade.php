<!DOCTYPE html>
  <head>
    <title>映画情報検索結果画面</title>
  </head>

  <body>
    <h1>映画情報検索結果</h1>
      <table>
        <tr>
          <th>タイトル</th>
          <th>説明</th>
          <th>カテゴリ</th>
          <th>役者（名）</th>
          <th>役者（姓）</th>
        </tr>
        @foreach ($results as $result)
        <tr>
          <td>{{$result->title}}</td>
          <td>{{$result->description}}</td>
          <td>{{$result->name}}</td>
          <td>{{$result->first_name}}</td>
          <td>{{$result->last_name}}</td>
        </tr>
        @endforeach
      </table>

      <form action="film_info_search" method="get">
        @csrf
        <input class="button" type="submit" value="戻る">
      </form>

      <form action="customer_info_search" method="get">
        @csrf
        <input class="button" type="submit" value="顧客情報検索画面">
      </form>

    {!! $results->links() !!}
  </body>
</html>