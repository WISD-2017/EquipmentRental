<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 關於 EquipmentRental

學生可以在登入後選定器材的租借日期、租借時間、歸還時間及數量，申請後要管理員核準才算是申請成功。

管理員可以在後台新增可租借的器材、審核申請、確認器材的歸還以及查看租借紀錄。


## 專案復原
自github將專案clone下來後在cmder輸入復原的四個指令

1.composer install –no-scripts

2.composer run‐script post‐root‐package‐install

3.composer run‐script post‐install‐cmd

4.composer run‐script post‐create‐project‐cmd

接著在mysql建立一個資料庫及在.env檔修改DB設定，最後在cmder輸入artisan migrate指令便可打開瀏覽器使用本系統。

## 使用者
使用者需先在http://localhost:8000/register 使用學校的email註冊，註冊完即可在http://localhost:8000/ 進行申請。

## 管理員
管理員是在http://localhost:8000/admin 進行後台管理，目前沒有設置管理員帳號。


