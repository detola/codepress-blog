# Blog with Laravel

A simple blog 

# Feature
This software has following features:

* CRUD User
* CRUD POST
* CRUD Category
* CRUD Gallery
* Admin Area to manage all features
* Front Page for Visitors

Installation
============
* Run php   ```composer.phar install```   for developer environment to install Laravel packages

* Create ```.env file``` from ```.env.example``` and generate ```APP_KEY``` using ```php artisan key:generate```

*	Set the database connection configuration and APP_ENV according to your application environment (e.g. local, production) in ```.env``` file

*	To create a ```User```, go to the ```database\seeds\UsersTableSeeder.php``` and change the ```name```, the ```email``` and the ```password``` settings to your likings. Leave the other settings (role_id, is_active) unchanged!

*	To create the tables, run ```php artisan migrate```.

*	To seed the tables with fake data, use php artisan ```db:seed```.

*	If you want to run the migration and the seeding together, use ```php artisan migrate:refresh --seed```

* Login at ```codepress.test\login``` using your Master account credentials OR Register at ```codepress.test\register```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
