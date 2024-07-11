# Laravel Jetstream Project

This project is a Laravel-based system that utilizes Jetstream for authentication and includes two-step authentication, user roles, Bootstrap with Blade templates, and is built using Laravel Mix instead of Vite. Below are the details of the setup and the steps to recreate the project.

## Features
1. Laravel with Jetstream
2. Two-step authentication
3. User roles (root, admin, user)
4. Bootstrap and Blade templates
5. Laravel Mix for asset compilation


## Setup and Installation

### 1. Clone the Repository
First, clone the project repository from GitHub:
```bash
git clone https://github.com/al-saloul/laravel-jetstream.git
cd laravel-jetstream

composer install

php artisan migrate:fresh --seed

npm install

npm run dev
```

### 2. Copy the .env File

Next, copy the .env file from the example file provided:

```
bash
cp .env.example .env
```

### 3. Create the Database
Create a new database named laravel_jetstream in your database server. You can use a tool like phpMyAdmin or the command line:

```bash
CREATE DATABASE laravel_jetstream;
```

### 5. Serve the Application
Finally, start the Laravel development server:

```bash
php artisan serve
```

The application will be running at:

``` bash
http://127.0.0.1:8000
```

