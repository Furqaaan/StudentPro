1) Installing the required packages
Run the following commands in terminal

```composer install```

2) The .env file is also attached here. 
Please change the DB_DATABASE,DB_USERNAME,DB_PASSWORD with your database credentials for this project to work.


>The below steps are to create tables and fill the tables with data.
If any error is occurred during this process , the local .sql database is included. 
Please use that in case of error.

3) Creating the tables
Run the following commands in terminal

```php artisan migrate```

4) Seeding
Run the following commands in terminal

```php artisan db:seed --class=TeacherSeeder```

```php artisan db:seed --class=StudentSeeder```

```php artisan db:seed --class=MarkSeeder```

5) Run the project

```php artisan serve```
