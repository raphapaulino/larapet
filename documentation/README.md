# Quick start - How to install LaraPet?
1. In your local develop environment creates database with:

    - Name: Any
    - Collation: utf8mb4_unicode_ci

2. After clone this repo, access 'backend' folder:

    $ cd backend/

3. Install Laravel dependencies with composer:

    $ composer install

4. Creates .env file based in .env-example:

    $ cp .env-example .env

5. In .env file set your local database, username and password, save and close;

    DB_DATABASE=yourdatabase\
    DB_USERNAME=yourdatabaseuser\
    DB_PASSWORD=yourdatabasepassword

6. Run migrations and seeders:

    $ php artisan migrate --seed

7. Start the development server on port 8000 with artisan:

    $ php artisan serve

8. Visit http://127.0.0.1:8000/ address. 


    That's it. Enjoy! Any feedback will be appreciated.


# Third Part Official Documentations and or Repositories
LARAVEL documentation can be found on the [Laravel website](https://laravel.com/docs/frontend). 

LARAVEL UI repo can be found on the [Laravel UI GitHub](https://github.com/laravel/ui). 
Note: For now, we will use Bootstrap as UI/UX.

ELOQUENT UUID repo can be found on the [Your App Rocks](https://github.com/YourAppRocks/eloquent-uuid).