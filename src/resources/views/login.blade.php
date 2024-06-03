<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<header class="header">
    <div class="header__inner">
        <div class="header__inner-logo">
            <a class="header__logo" href="/">FashionablyLate</a>
        </div>
    </div>
    <div class="header__inner-button">
        <a class="header__button" href="/register">Register</a>
    </div>
</header>
<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Login</h2>
        </div>
        <form class="login-form" action="/admin" method="post">
            @csrf
            <div class="login-form__group">
                <div class="login-form__group-title">
                    <span class="login-form__label--item">メールアドレス</span>
                </div>
                <div class="login-form__group-content">
                    <div class="login-form__input--text">
                        <input type="email" name="email" placeholder="例: test@example.com" />
                    </div>
                    <div class="login-form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="login-form__group">
                <div class="login-form__group-title">
                    <span class="login-form__label--item">パスワード</span>
                </div>
                <div class="login-form__group-content">
                    <div class="login-form__input--text">
                        <input type="password" name="password" placeholder="例: coachtech1106" />
                    </div>
                    <div class="login-form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="login-form__button">
                <button class="login-form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>