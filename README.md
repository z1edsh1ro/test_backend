# TEST BACK END

## Description

This is a backend API built using Laravel for testing the Skuberg company

## Features

- CRUD `user` data API
- CRUD `asset_wallet` data API
- CRUD `asset_exchange` data API
- CRUD `order` data API
- CRUD `markets` data API
- CRUD `p2p` data API
- CRUD `currency` data API

## ER-Diagram

![สกรีนช็อต 2025-03-28 105720](https://github.com/user-attachments/assets/afa4c814-3a61-4dab-80c2-38664854153b)

## Installation

1. move to directory test_backend:
```
cd test_backend
```
2. create database name test_backend:
3. Run the migrations database:
```
php artisan migrate
```
4. create dummy data:
```
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=CurrencySeeder
php artisan db:seed --class=MarketSeeder
php artisan db:seed --class=P2pSeeder
php artisan db:seed --class=OrderSeeder
php artisan db:seed --class=AssetWalletSeeder
php artisan db:seed --class=AssetExchangeSeeder
```
5. run the application:
```
php artisan serve
```
