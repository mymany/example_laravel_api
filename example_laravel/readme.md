<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
___

# 開発環境
## 開発環境のセットアップ
- 開発環境の設定は、Laradocを使ってセットアップしている

## マイグレーション

- ex.) ユーザテーブルを作成する

```
php artisan make:migration create_users_table --create=users
```

- ex.) ユーザテーブルにカラムを追加する

```
php artisan make:migration add_votes_to_users_table --table=users
```

## モデルの作成

- 以下のコマンドで作成する

```
php artisan make:model Item
```