<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project Setup


# git clone
```
git clone https://github.com/Jacos-Monjur/Hamko.git  
```
```
composer install
```
# make .env
```
cp .env.example .env

```
# edit .env and Add KEY

OPEN_API_KEY=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

set DB_DATABASE name and DB_USERNAME name and DB_PASSWORD 

# database info

```
php artisan key:generate
```
```
php artisan migrate --seed
```
# Cache clear&config command run

```
php artisan config:cache
```
## Import POSTMAIN API
postman api json  have a root direct.so please import this json in your postman app 
change local_url and set access  Bearer token inside postman 
![Alt text](image.png)
