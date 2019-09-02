#  利用方法

- 参考https://qiita.com/ucan-lab/items/17c806973e69792ada99
- 参考：http://vdeep.net/laravel-git-clone

```
$ git clone https://github.com/toitoi104/portfolio.git
$ cd portfolio
$ cp .env.example .env

$ docker-compose build
$ docker-compose up -d

// dockerのappコンテナに入る
$ docker-compose exec app ash
$ composer install (or composer update)
$ php artisan key:generate
$ php artisan migrate
$ composer dump-autoload
```