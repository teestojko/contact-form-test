# お問い合わせフォーム

## 環境構築

1 git clone git@github.com:teestojko/contact-form-test.git

2 docker compose up -d --build

3 docker compose exec php bash

4 composer install

5 cp .env.example .env



- 下記のように変更してください

DB_CONNECTION=mysql

DB_HOST=mysql

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass



6 php artisan key:generate

7 php artisan migrate

8 php artisan db:seed

## 使用技術

・PHP 8.1

・Laravel 8.0

・MySQL 8.0

## URL

・開発環境：http://localhost/

・phpMyAdmin：http://localhost:8080/


