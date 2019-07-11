# Test task for NextPage



# Installation

You can also download and run this app locally.

1) Clone the repo:
```
git clone https://github.com/IfThanElse/Test-task-for-NextPage.git [DIRECTORY_NAME]
```

2) Create `.env` file from the example file:
```
php -r "file_exists('.env') || copy('.env.example', '.env');"
```

3) Setup .env variables (Mainly APP_URL and DB_DATABASE)

4) Run following commands:
```
composer install
php artisan key:generate
php artisan migrate --seed

```

Done.
