# Lost and Found Megabit API

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Developer Workflow
   * [workflow cheatsheet](https://danielkummer.github.io/git-flow-cheatsheet/index.html)
   * [workflow tutorial](https://youtu.be/8fx-EaOUK2E) (without git flow. just as reference to do pull request.)
   * Do pull request, before you execute. 
     ```
     git flow feature finish [yourfeature]
     ```
     _Or you have to start over._
   * **General Workflow**
     
     * start new feature
       ```
       git flow feature start your_feature
       ```
     
     * add all to stagging
       ```
       git add .
       ```

     * Commit message. I recommend using [emoji](https://gist.github.com/parmentf/035de27d6ed1dce0b36a)
       ```
       git commit -m ":emoji_code: commit message"
       ```

     * publish your feature to repository so other can see
       ```
       git flow feature publish your_feature
       ```

     * Do pull request. Make sure you pull request to develop.
       * Wait until it gets approved. Merge button will activate if it's approved.
       * Merge yourself or merged by reviewer.
     
     * Finish your feature
       * pull new change from develop branch just in case it's updated.
         ```
         git checkout develop && git pull origin develop
         ```
       * remove your_feature branch in your repo and remote repo
         ```
         git flow feature finish your_feature
         ```

## Installation

Use the package manager [composer](https://getcomposer.org/download/) to install **Lost and Found Megabit API**. This project is using [PHP 7](https://www.php.net/downloads.php/).

```bash
composer install
```

## Usage
* Setup mysql database and its credentials in **.env** file, see **.env.example** for example configurations. You can use XAMPP or others. 

  **Note:** use **utf8_unicode_ci** for database collation.
  
* Migrate this project to new database. 
  ```bash
  php artisan migrate:fresh
  ```
* Run development server locally.
  ```bash
  php artisan serve
  ```
* The development server will run on [http://localhost:8000](http://localhost:8000)