# Docker Laravel Websocket リポジトリ

## 開発環境構築
**1. Gitクローン**
```sh
git clone https://github.com/TakanoriIchikawa/docker-laravel-websocket.git docker-laravel-websocket
```

**2. ディレクトリの移動**
```sh
cd docker-laravel-websocket
```

**3. dockerコンテナのビルド**
```sh
docker compose build --no-cache
```

**4. dockerコンテナの起動**
```sh
docker compose up -d
```

**5. laravelの初期設定**
```sh
docker compose exec app bash
composer install
cp .env.example .env
php artisan:key generate
php artisan:migrate
```

**6. laravel-echo-serverの設定**

※ 最初はlaravel-echo-serverの設定が済んでいないので、エラーが発生してecho-serverのコンテナが起動できない

```sh
docker compose run echo-server laravel-echo-server init
```

設定は以下の通り
```sh
? Do you want to run this server in development mode? Yes
? Which port would you like to serve from? 6001
? Which database would you like to use to store presence channel members? redis
? Enter the host of your Laravel authentication server. http://localhost
? Will you be serving on http or https? http
? Do you want to generate a client ID/Key for HTTP API? No
? Do you want to setup cross domain access to the API? No
? What do you want this config to be saved as? laravel-echo-server.json
Configuration file saved. Run laravel-echo-server start to run server.
```