# マイグレーションファイルの作り方
docker内にはいる
```
docker-compose exec app bash
```

service配下で`php artisan make:migration`を実行する

```
cd application/service/
php artisan make:migration (ファイル名)
```

# migrationの実行
service配下で`php artisan migrate`を実行
