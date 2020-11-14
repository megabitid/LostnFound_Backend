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
   * [git flow vs git command comparison alternative](https://gist.github.com/JamesMGreene/cdd0ac49f90c987e45ac)
   * [workflow tutorial](https://youtu.be/8fx-EaOUK2E) (without git flow. just as reference to do pull request.)
   * **General Workflow**
     * clone repository
       ```
       git clone https://github.com/megabitid/LostnFound_Backend.git
       ```
     * init git flow
       ```
       git flow init
       ```
       * set production branch name to : **master**
       * leave all option as default (press enter)
     
     * pull other people feature
       ```
       git pull feature\feature_name
       git checkout feature\feature_name
       ```
     
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

     * publish your feature update to this remote repository so others can see.
       ```
       git flow feature publish your_feature
       ```

     * If you decided that your feature completed, **do pull request**. Make sure you pull request into develop branch.
       * Wait until it gets approved. Merge button will activate if it's approved.
       * Merge by yourself or merged by reviewer. You can use merge button or command bellow to merge.
     
     * Finish your feature
       * pull new change from develop branch just in case it's updated.
         ```
         git checkout develop && git pull origin develop
         ```
       * Because of _git flow feature finish_ does not push immediately, we use command bellow.
       * merge your_feature branch
         ```
         git merge --no-ff feature/your_feature
         ```
       * push your merge to develop
         ```
         git push origin develop
         ```
       * delete feature branch in your local and remote
         ```
         git branch -d feature/your_feature && git push origin :feature/your_feature
         ```

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
