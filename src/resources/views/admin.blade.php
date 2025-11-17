<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <title>Contact Form</title>
</head>

<body>

<header class="header">
  <h1 class="site-title">FashionablyLate</h1>
  <button class="logout-btn">logout</button>
</header>

<main class="container">
  <h2 class="admin-title">Admin</h2>

  <!-- 検索フォーム -->
  <form class="search-area">
      <input type="text" class="search-input" placeholder="名前やメールアドレスを入力してください">

      <select class="select-box">
        <option value="">性別</option>
        <option value="男性">男性</option>
        <option value="女性">女性</option>
        <option value="その他">その他</option>
      </select>

      <select class="select-box">
        <option value="">お問い合わせの種類</option>
        <option value="商品について">商品について</option>
        <option value="配送について">配送について</option>
        <option value="その他">その他</option>
      </select>

      <input type="date" class="date-input">

      <button class="search-btn">検索</button>
      <button type="reset" class="reset-btn">リセット</button>
  </form>

  <button class="export-btn">エクスポート</button>

  <!-- テーブル -->
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>性別</th>
        <th>メール</th>
        <th>電話番号</th>
        <th>住所</th>
        <th>建物名</th>
        <th>種類</th>
        <th>内容</th>
        <th>登録日</th>
    </tr>

    @foreach($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name_sei }} {{ $contact->name_mei }}</td>
        <td>{{ $contact->gender }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->tel }}</td>
        <td>{{ $contact->address }}</td>
        <td>{{ $contact->building }}</td>
        <td>{{ $contact->type }}</td>
        <td>{{ $contact->content }}</td>
        <td>{{ $contact->created_at }}</td>
    </tr>
    @endforeach
</table>

  <!-- ページネーション -->
  <div class="pagination">
    <span class="page active">1</span>
    <span class="page">2</span>
    <span class="page">3</span>
    <span class="page">4</span>
    <span class="page">5</span>
  </div>

</main>

</body>
</html>
