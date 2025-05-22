# Laravel Sample Project

このリポジトリは、Laravelのサンプルプロジェクトです。

## 概要

Laravelを使ったWebアプリケーションの基本的な構造と実装例を提供します。

## 必要環境

- PHP8.3
- Composer
- Laravel11
- MariaDB Server
- Node.js & npm

## インストール方法

1. このリポジトリをクローンします

   ```
   git clone git@github.com:kuroneko52/Laravel-Sample.git
   cd Laravel-Sample
   ```

2. パッケージをインストールします

   ```
   composer install
   npm install
   ```

3. 環境ファイルを作成し、設定します

   ```
   cp .env.example .env
   ```

   `.env` ファイルを編集し、データベースなどの情報を設定してください。

4. アプリケーションキーを生成します

   ```
   php artisan key:generate
   ```

5. マイグレーションを実行します

   ```
   php artisan migrate
   ```

6. サーバーを起動します

   ```
   php artisan serve
   ```

## 使い方

ブラウザで `http://localhost:8000` にアクセスしてください。

## ライセンス

このプロジェクトは GPL-3.0 license のもとで公開されています。

---

他に追加したい情報や、特定の機能について詳しく説明したい場合は教えてください。
