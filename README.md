# Docker Laravel Websocket リポジトリ

## 開発環境構築
**1. Gitクローン**
```sh
git clone https://github.com/fourierLab/techblog-laravel-redis-docker-websocket techblog-laravel-redis-docker-websocket

```

**2. ディレクトリの移動**
```sh
cd techblog-laravel-redis-docker-websocket
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
php artisan key:generate
php artisan migrate
```

上記のコマンドを実行したら、http://localhost にアクセスしてください。