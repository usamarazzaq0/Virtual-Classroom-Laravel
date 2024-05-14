<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## APIs Doc

[Postman Collection (public) - click here to redirect](https://www.postman.com/abdullahkhanwork/workspace/class-room-apis)

## Requirements To Run This Project

- `composer install`
- `sudo chmod -R 7777 storage` to fix permissions
- `php artisan key:generate`
- `php artisan storage:link`
- `php artisan optimize:clear`
- `php artisan migrate:fresh --seed`
- `php artisan passport:install`
- `php artisan serve`

## Accounts Available

###### Admin Account

- **email:** admin@gmail.com
- **password:** password

###### Teacher Account

- **email:** teacher@gmail.com
- **password:** password

###### Student Account

- **email:** student@gmail.com
- **password:** password


## Laravel IDE Helper Generator

###### Usage

- `php artisan ide-helper:generate` - [PHPDoc generation for Laravel Facades ](#automatic-phpdoc-generation-for-laravel-facades)
- `php artisan ide-helper:models` - [PHPDocs for models](#automatic-PHPDocs-for-models)
- `php artisan ide-helper:meta` - [PhpStorm Meta file](#phpstorm-meta-for-container-instances)


## Docker

###### Usage

- `docker exec -it classroom-dev-app bash`
