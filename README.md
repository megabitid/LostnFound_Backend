# Lost and Found Megabit API

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Installation

Use the package manager [composer](https://getcomposer.org/download/) to install **Lost and Found Megabit API**. This project is using [PHP 7](https://www.php.net/downloads.php/).

```bash
composer update && composer install
```

## Usage
* Setup mysql database and its credentials in **.env** file, see **.env.example** for example configurations. You can use XAMPP or others. 

  **Note:** use **utf8_unicode_ci** for database collation.
  
* Migrate this project to new database. 
  ```bash
  php artisan migrate:fresh && php artisan key:generate && php artisan jwt:secret -f && php artisan config:cache
  ```
* Run development server locally.
  ```bash
  php artisan serve
  ```
* The development server will run on [http://localhost:8000](http://localhost:8000)
