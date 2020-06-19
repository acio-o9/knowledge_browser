# knowledge_browser
単語帳beta

PHPでエンドポイント(APIにアクセスするためのURI)を定義して、
フロントエンドから呼び出す想定をしてます

phpは7.4、Mysqlは5.7系で動いています

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

## 起動
docker-compose up -d

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

