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
