# WordPress Site called GlobalStandard <!-- omit in toc -->
**目次**
- [概要](#概要)
  - [サイトビュー](#サイトビュー)
- [閲覧方法](#閲覧方法)
  - [Docker Compose](#docker-compose)
  - [サイトへのアクセス](#サイトへのアクセス)
  - [WordPress管理画面へのアクセス](#wordpress管理画面へのアクセス)

# 概要
独学の過程で作成したコーポレートサイト<br>
**※ このサイトは架空のサイトであり、一般公開もされていません。**

## サイトビュー
![This is a site image](/image.png)

# 閲覧方法
ローカル環境でサイト閲覧を可能にする方法<br>
※ 推奨ブラウザ：**Google Chrome, Microsoft Edge**

## Docker Compose
ファイル「docker-compose.yml」が存在するディレクトリ上で以下のコードを実行
```
$ docker compose up --build up
```

## サイトへのアクセス
ブラウザ上で下記URLを使用<br>
```
http://localhost:10090
```

## WordPress管理画面へのアクセス
ブラウザ上で下記URLを使用<br>
```
http://localhost:10090/wp-admin
```

※ ログイン画面上でのユーザー名・パスワード（非公開サイトであるため簡易的に設定）

- ユーザー名：user
- パスワード：user