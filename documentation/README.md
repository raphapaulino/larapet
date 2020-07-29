# Quick start - How to install LaraPet?

Important Notes: 

- In all instructions below I assume that you already have the knowledge and feel comfortable with Windows, Linux, or Mac OS terminal.
- I use MariaDB or MySql database to deploy this project.
- I assume that you already have the knowledge and feel comfortable to clone GitHub repositories.

1. In your local development environment, create the database with:

    - Name: anyname_youwant
    - Collation: utf8mb4_unicode_ci

2. After clone this repo, access 'backend' folder:

    $ cd backend/

3. Install Laravel dependencies with composer:

    $ composer install

4. Create your .env file based in .env.example file with 'cp' (copy and paste) command:

    $ cp .env.example .env

5. Open your .env file, set your local database, username and password, save and close;

    DB_DATABASE=yourdatabase\
    DB_USERNAME=yourdatabaseuser\
    DB_PASSWORD=yourdatabasepassword

6. Set your application key with command:

    $ php artisan key:generate

7. Run migrations and seeders:

    $ php artisan migrate --seed

8. Start the development server on port 8000 with command:

    $ php artisan serve

9. Visit http://127.0.0.1:8000/ address in your loveable browser. 


    That's it. Enjoy! Any feedback will be appreciated.


# Third Part Official Documentations and or Repositories
LARAVEL documentation can be found on the [Laravel website](https://laravel.com/docs/frontend). 

LARAVEL UI repo can be found on the [Laravel UI GitHub](https://github.com/laravel/ui). 
Note: For now, we will use Bootstrap as UI/UX.

ELOQUENT UUID repo can be found on the [Your App Rocks](https://github.com/YourAppRocks/eloquent-uuid).

SLUGGABLE repo can be found on the [Eloquent Sluggable GitHub](https://github.com/cviebrock/eloquent-sluggable).