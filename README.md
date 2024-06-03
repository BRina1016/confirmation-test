お問い合わせフォーム

環境構築
Docker ビルド
1 git clone : git@github.com:BRina1016/confirmation-test.git
https://github.com/BRina1016/confirmation-test.git
2 docker-compose up -d --build

Laravel 環境構築
1 docker-compose exec php bash
2 composter install
3 .exv.example ファイルから.exv を作成し、環境変数を変更
4 php artisan key:generate
5 php artisan migrate
6 php artisan db:seed

使用技術
PHP 7.4.9
Laravel 8.83.8
MySQL 15.1

URL
開発環境: http://localhost/
phpMyAdmin: http://localhost:8080/
