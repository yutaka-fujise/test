<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
  <title>Contact Form</title>
</head>
<body>

<header class="header">
    <h1>FashionablyLate</h1>
</header>

<main class="container">
    <h2>Contact</h2>

    <form action="{{ route('contacts.send') }}" method="post">
        @csrf

        <table class="confirm-table">

            <tr>
                <th>お名前</th>
                <td>{{ $contact['name_sei'] }} {{ $contact['name_mei'] }}</td>

                <input type="hidden" name="name_sei" value="{{ $contact['name_sei'] }}">
                <input type="hidden" name="name_mei" value="{{ $contact['name_mei'] }}">
            </tr>

            <tr>
                <th>性別</th>
                <td>{{ $contact['gender'] }}</td>

                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>{{ $contact['email'] }}</td>

                <input type="hidden" name="email" value="{{ $contact['email'] }}">
            </tr>

            <tr>
                <th>電話番号</th>
                <td>{{ implode('-', $contact['tel']) }}</td>

                <input type="hidden" name="tel[]" value="{{ $contact['tel'][0] }}">
                <input type="hidden" name="tel[]" value="{{ $contact['tel'][1] }}">
                <input type="hidden" name="tel[]" value="{{ $contact['tel'][2] }}">
            </tr>

            <tr>
                <th>住所</th>
                <td>{{ $contact['address'] }}</td>

                <input type="hidden" name="address" value="{{ $contact['address'] }}">
            </tr>

            <tr>
                <th>建物名</th>
                <td>{{ $contact['building'] }}</td>

                <input type="hidden" name="building" value="{{ $contact['building'] }}">
            </tr>

            <tr>
                <th>お問い合わせの種類</th>
                <td>{{ $contact['type'] }}</td>

                <input type="hidden" name="type" value="{{ $contact['type'] }}">
            </tr>

            <tr>
                <th>お問い合わせ内容</th>
                <td>{!! nl2br(e($contact['content'])) !!}</td>

                <input type="hidden" name="content" value="{{ $contact['content'] }}">
            </tr>

        </table>

        <div class="buttons">
            <button type="submit" class="submit-btn">送信</button>
    </form>

    <form action="{{ route('contact.back') }}" method="post">
        @csrf
        <button type="submit" class="back-btn">修正</button>
    </form>

</main>

</body>
</html>
