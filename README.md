# knowledge_browser
単語帳beta

PHPでエンドポイント(APIにアクセスするためのURI)を定義して、
フロントエンドから呼び出す想定をしてます

[API定義はこちら](https://github.com/acio-o9/knowledge_browser#about_APIs)

phpは7.4、Mysqlは5.7系で動いています。Laravelは7系を入れました。

```
php -v
PHP 7.4.4 (cli) (built: Mar 19 2020 22:08:42) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
```

```
mysql --version
mysql  Ver 14.14 Distrib 5.7.28, for Linux (x86_64) using  EditLine wrapper
```

```
php artisan --version
Laravel Framework 7.17.2
```

## 起動
docker-compose up -d

### 初期起動時にはこちらも実行
```
docker-compose exec app bash
cd application/service/ && composer install
```

## php
``` 
http://localhost:8081/
```
でapplication/service下のファイルを見に行きます。

DocumentRootの設定は下記ファイルに書いてるので、ディレクトリ構成に合わせて変更してください
`docker/app/apache/000-default.conf`

### composer
DockerFileでcomposerをインストールしてるので、docker内でcomposerは実行することができます。
フレームワークやライブラリなど、入れたいものをいれてください。

```
composer --version
Composer version 1.10.7 2020-06-03 10:03:56
```

## mysql
ローカルのユーザやパスワードについてはenvファイルを見てください

GUIツールなどで見る場合は下記とenvファイルのユーザで接続することができると思います。
ホスト: 127.0.0.1
ポート: 3306

# about APIs

提供するAPIを下記ファイルで定義している

- /api.yml

## swagger-editor

ymlファイル編集に利用する

```
http://localhost:8001
```

画面上部のmenuより、import yml fileを選択して編集する

// FIXME マウントして更新できるようにしたい

## swagger-ui

editor機能をなくしたもの

```
http://localhost:8002
```
