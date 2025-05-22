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

6. Build

   ```
   npm run dev
   ```

7. Start the server

   ```
   php artisan serve
   ```

## Treatment

ブラウザで `http://localhost:8000` and `http://127.0.0.1:8000`にアクセスしてください。
