<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>Contact Form</title>
</head>
<body>

<header>
    <h1 class="site-title">FashionablyLate</h1>
</header>

<section class="contact-section">
    <h2 class="contact-title">Contact</h2>

    <form class="form" action="{{ route('contacts.confirm') }}" method="post">
      @csrf

        <!-- 名前 -->
        <div class="form-group">
            <label>お名前 <span class="required">※</span></label>
            <div class="name-wrapper">
                <input type="text" name="name_sei" value="{{ old('name_sei') }}" placeholder="例: 山田" class="half">
                <input type="text" name="name_mei" value="{{ old('name_mei') }}" placeholder="例: 太郎" class="half">
            </div>
            @error('name_sei')
            <p class="error">{{ $message }}</p>
            @enderror
            @error('name_mei')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <!-- 性別 -->
          <div class="form-group gender-row">
            <label class="gender-label">性別 <span class="required">※</span></label>

            <div class="gender-group">
              <label class="gender-item">
              <input type="checkbox" name="gender" value="男性" {{ old('gender') == '男性' ? 'checked' : '' }}> 男性
              </label>

            <label class="gender-item">
            <input type="checkbox" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女性
            </label>

            <label class="gender-item">
            <input type="checkbox" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}> その他
            </label>
          </div>
            @error('gender')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <!-- メール -->
        <div class="form-group">
          <label>メールアドレス<span class="required">※</span></label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
        </div>
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror

        <!-- 電話番号 -->
        <div class="form-group">
            <label>電話番号<span class="required">※</span></label>
            <div class="tel-wrapper">
                <input type="text" name="tel[]" class="tel" value="{{ old('tel.0') }}"> -
                <input type="text" name="tel[]" class="tel" value="{{ old('tel.1') }}"> -
                <input type="text" name="tel[]" class="tel" value="{{ old('tel.2') }}">
            </div>
            @error('tel')
              <p class="error">{{ $message }}</p>
            @enderror
            @error('tel.*')
              <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <!-- 住所 -->
        <div class="form-group">
            <label>住所<span class="required">※</span></label>
            <input type="text" name="address" value="{{ old('address') }}" placeholder="東京都渋谷区千代田3-3">
        </div>
            @error('address')
            <p class="error">{{ $message }}</p>
            @enderror
        

        <!-- 建物名 -->
        <div class="form-group">
            <label>建物名</label>
            <input type="text" name="building" placeholder="例: 千代田マンション101">
        </div>

        <!-- お問い合わせの種類 -->
        <div class="form-group">
            <label>お問い合わせの種類<span class="required">※</span></label>
            <select name="type">
                <option value="">選択してください</option>
                <option value="商品について" {{ old('type') == '商品について' ? 'selected' : '' }}>商品について</option>
              <option value="配送について" {{ old('type') == '配送について' ? 'selected' : '' }}>配送について</option>
              <option value="その他" {{ old('type') == 'その他' ? 'selected' : '' }}>その他</option>
            </select>
            @error('type')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <!-- 内容 -->
        <div class="form-group">
            <label>お問い合わせ内容<span class="required">※</span></label>
            <textarea name="content"{{ old('content') }} placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>
            @error('content')
            <p class="error">{{ $message }}</p>
            @enderror

        <!-- 送信ボタン -->
        <div class="form-submit">
            <button type="submit">確認画面</button>
        </div>

    </form>
</section>

</body>
</html>
