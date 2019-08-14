#News Website

###Requirements 
[Install xampp/php](https://www.apachefriends.org/download.html)

[Install composer](https://getcomposer.org/download/)

###Setup:

#####Initial:
- Install package:
> composer install

- setup .env:
    
  - Create new .env file from .env.example
  - Configure those lines base on local mysql:
  
   ```
    DB_CONNECTION=mysql
    DB_HOST=c-mysql
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=admin
    DB_PASSWORD=password
    ```
- setup jwt-auth
    - generate secret key:
        > php artisan jwt:secret

#####Generate:
- Application key:
> php artisan key:generate
###Migrate DB:
- Migrate database:
> php artisan migrate

- Seed data:
> php artisan db:seed

###Start:
 - Start project
 >php artisan serve
### Dev:
#####Create migrations in nested folder:
- for example: create `products` table in the `database/migrations/shop` directory

`php artisan make:migration create_products_table --path=database/migrations/shop`

#####Run migrate in nested folder:
- for example: create tables in the `database/migrations/shop` directory

`php artisan migrate --path=database/migrations/shop`

###Public
- public `images` or `files`:
    - Access to the `docker container` (`c-php`), and type :
    ```console
    php artisan storage:link
    ```
    - **Note:** if there is any problem : 
      - `rm public/storage`
      - then type again : `php artisan storage:link`

###References:
- PHP version: 7.2.17
- Laravel version: 5.8.23
- Composer version:  1.8.5 
- Laratrust (roles permission) docs: [click here](https://laratrust.santigarcor.me/docs/5.2/)
- Jwt-Auth for laravel docs: [click here](https://github.com/tymondesigns/jwt-auth/wiki)
- Database diagram : 
   [click here](https://dbdiagram.io/d)
   
- Feature list:
   [click here](https://docs.google.com/spreadsheets/d/1TFkghfz0FBN7LW4tB7_G59cla6X2Wb6snw6Ga4Je2tM/edit)
 ###Tutorials:
 - setup jwt-auth:
    - [click here](https://medium.com/@pramestyan/simple-user-authentication-api-with-laravel-and-jwt-authentication-384b4edbe76c)
 
 ###Issues:
 - jwt-auth dependence with nesbot/carbon version problem:
    - https://github.com/tymondesigns/jwt-auth/issues/1795
    
  ###Web:
  - Template is located at `/resources/template.*.zip`
  
  ### Packages:
  
  #### laravel-widgets:
  - Install : `composer require arrilot/laravel-widgets`
  - Docs: https://github.com/arrilot/laravel-widgets
  
  ### Notice:
  - when in `docker container`, if you want to run `composer something` you should turn off `debug` in your `ide` 