# HOW TO SET UP THE DATABASE

1) Start database (MySQL) in e.g. xampp
2) Create new empty database via phpMyAdmin (e.g. books)
3) Configure database credentials in .env (DB_DATABASE=books)
4) Migrate the database by running `php artisan migrate:fresh`
5) Add your favorite books
