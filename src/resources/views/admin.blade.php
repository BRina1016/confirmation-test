<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
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
        <a class="header__button" href="/">logout</a>
    </div>
</header>
<main>
    <div class="admin__content">
        <div class="admin-form__heading">
            <h2>Admin</h2>
        </div>
        <form class="search-form">
            <div class="search-form__item">
                <input class="search-form__item-input" type="text" value="名前やメールアドレスを入力してください " />
                <select class="search-form__item-select">
                    <option value="">性別</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                </select>
                <select class="search-form__item-select">
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
                <input class="search-form__item-calendar" type="date" name="calendar" max="9999-12-31">
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-reset" type="submit">リセット</button>
            </div>
        </form>
        <div class="admin-table">
            <table class="admin-table__inner">
                <tr class="admin-table__row admin-table__row-header">
                    <td class="admin-table__header">
                        <span class="admin-form__item-name">お名前</span>
                        <span class="admin-form__item-gender">性別</span>
                        <span class="admin-form__item-mail">メールアドレス</span>
                        <span class="admin-form__item-detail">お問い合わせの種類</span>
                    </td>
                </tr>

                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <form class="admin-form">
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-name" type="text" name="name" value="山田 太郎">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-gender" type="text" name="gender" value="男性">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-mail" type="mail" name="mail" value="test@example.com">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-detail" type="text" name="detail" value="商品の交換について">
                        </div>
                        <div class="admin-form__button">
                            <button class="admin-form__button-submit" type="submit">詳細</button>
                        </div>
                        </form>
                    </td>
                </tr>

                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <form class="admin-form">
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-name" type="text" name="name" value="山田 太郎">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-gender" type="text" name="gender" value="男性">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-mail" type="mail" name="mail" value="test@example.com">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-detail" type="text" name="detail" value="商品の交換について">
                        </div>
                        <div class="admin-form__button">
                            <button class="admin-form__button-submit" type="submit">詳細</button>
                        </div>
                        </form>
                    </td>
                </tr>

                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <form class="admin-form">
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-name" type="text" name="name" value="山田 太郎">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-gender" type="text" name="gender" value="男性">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-mail" type="mail" name="mail" value="test@example.com">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-detail" type="text" name="detail" value="商品の交換について">
                        </div>
                        <div class="admin-form__button">
                            <button class="admin-form__button-submit" type="submit">詳細</button>
                        </div>
                        </form>
                    </td>
                </tr>

                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <form class="admin-form">
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-name" type="text" name="name" value="山田 太郎">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-gender" type="text" name="gender" value="男性">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-mail" type="mail" name="mail" value="test@example.com">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-detail" type="text" name="detail" value="商品の交換について">
                        </div>
                        <div class="admin-form__button">
                            <button class="admin-form__button-submit" type="submit">詳細</button>
                        </div>
                        </form>
                    </td>
                </tr>

                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <form class="admin-form">
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-name" type="text" name="name" value="山田 太郎">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-gender" type="text" name="gender" value="男性">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-mail" type="mail" name="mail" value="test@example.com">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-detail" type="text" name="detail" value="商品の交換について">
                        </div>
                        <div class="admin-form__button">
                            <button class="admin-form__button-submit" type="submit">詳細</button>
                        </div>
                        </form>
                    </td>
                </tr>

                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <form class="admin-form">
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-name" type="text" name="name" value="山田 太郎">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-gender" type="text" name="gender" value="男性">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-mail" type="mail" name="mail" value="test@example.com">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-detail" type="text" name="detail" value="商品の交換について">
                        </div>
                        <div class="admin-form__button">
                            <button class="admin-form__button-submit" type="submit">詳細</button>
                        </div>
                        </form>
                    </td>
                </tr>

                <tr class="admin-table__row">
                    <td class="admin-table__item">
                        <form class="admin-form">
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-name" type="text" name="name" value="山田 太郎">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-gender" type="text" name="gender" value="男性">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-mail" type="mail" name="mail" value="test@example.com">
                        </div>
                        <div class="admin-form__item">
                            <input class="admin-form__item-input admin-form__item-detail" type="text" name="detail" value="商品の交換について">
                        </div>
                        <div class="admin-form__button">
                            <button class="admin-form__button-submit" type="submit">詳細</button>
                        </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</main>
</body>
</html>