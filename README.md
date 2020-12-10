# Lost and Found Megabit API

<p align="center"><a href="https://github.com/megabitid/LostnFound_Backend" target="_blank"><img src=".docs/logo.jpg" width="400"></a></p>

<p align="center">
<a href="https://github.com/megabitid/LostnFound_Backend/actions?query=workflow%3ACD"><img src="https://github.com/megabitid/LostnFound_Backend/workflows/CD/badge.svg" alt="Continous Deployment Status"></a>
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
* Generate documentation.
  ```bash
  php artisan scribe:generate
  ```

  Go to [http://localhost:8000/docs](http://localhost:8000/docs) to view documentation.
