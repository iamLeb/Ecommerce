# AFRICAN FOOD GENERAL PROJECT

# Installation and Setup

After cloning repository run `composer install`

Create `.env` file from `.env.example` file

Run `php artisan key:generate` to generate the APP Key

Setup your database in your config file

Run `php artisan migrate --seed` to run migrations and seed the database
or `php artisan migrate:refresh --seed` to refresh the migrations and seed

The AdminSeeder contains a default Super Admin you can use to login

# Front End Setup

Run `npm install` to install the npm dependencies

Run `npm run dev` to compile the assets or `npm run watch` to watch for changes and compile assets automatically
