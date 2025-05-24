# Laravel Sample Project

このリポジトリは、Laravelのサンプルプロジェクトです。
詳しくは [LaravelRead.md](https://github.com/kuroneko52/Laravel-Sample/blob/feature_readMe/LaravelRead.md) を参照してください

## Summary

Laravelを使ったWebアプリケーションの基本的な構造と実装例を提供します。

## License

このプロジェクトは [GPL-3.0 license](https://github.com/kuroneko52/Laravel-Sample?tab=GPL-3.0-1-ov-file#readme) のもとで公開されています。

## Required Environment

- PHP8.3
- MariaDB
- Laravel11
- Composer
- Node.js & npm

## PHP Extentions
公式ドキュメント [Deployment](https://laravel.com/docs/11.x/deployment#server-requirements) のServer Requirementsを参照

## インストール方法

1. Clone this Repository

   ```
   git clone git@github.com:kuroneko52/Laravel-Sample.git
   cd Laravel-Sample
   ```

2. Install Package

   ```
   composer install
   npm install
   ```

3. Create and configure Environment Files

   ```
   cp .env.example .env
   ```

   `.env` ファイルを編集し、データベースなどの情報を設定してください。

4. Generate Application Key

   ```
   php artisan key:generate
   ```

5. Execute migration

   ```
   php artisan migrate
   ```

6. Install Laravel UI Package

   ```
   composer require laravel/ui
   php artisan ui vue --auth
   npm install
   ```
   
7. Build

   ```
   npm run dev
   ```

8. Start the server

   ```
   php artisan serve
   ```

## Treatment

ブラウザで `http://localhost:8000` and `http://127.0.0.1:8000`にアクセスしてください。

## Troubleshooting

npm コマンドが使えなくなってこんなエラーが出たら

   ```
   $ npm run build

   > build
   > vite build

   sh: 1: vite: not found
   ```

ログを見て

   ```
   $ ~/.npm/_logs/xxxxxxxx-eresolve-report.txt

   # npm resolution error report

   While resolving: undefined@undefined
   Found: vite@6.3.5
   node_modules/vite
   dev vite@"^6.0.11" from the root project

   Could not resolve dependency:
   peer vite@"^4.0.0 || ^5.0.0" from @vitejs/plugin-vue@4.6.2
   ```

@vitejs/plugin-vueのバージョンをアップするか、こんなエラーが出てたらviteのバージョンを下げて

   ```
   Upgrade @vitejs/plugin-vue

   $ npm install vite@latest @vitejs/plugin-vue@latest --save-dev
   ```

   or
   
   ```
   Downgrade vite
   
   $ npm install vite@^5.0.0 --save-dev
   ```

   node_modules/ フォルダーと package-lock.json を削除して npm install で依存解決
   ```
   rm -rf node_modules package-lock.json

   npm install
   ```
