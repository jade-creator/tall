# Simple Authenticate and Sign Up powered by Jetsteam and CRUD functionality. 

## Tech Stack

**Client:** Tailwind Alpine Livewire Laravel

**Server:** Laravel 10

## Installation

### Prerequisite

- [PHP](https://www.php.net/) _at least version 8.3
- [MySQL](https://www.mysql.com/) _at least version 8.0.3_
- [Composer](https://getcomposer.org/) _at least version 2.4.2_
- [Node.JS](https://nodejs.org/en/) version 20.11.0

## Run Locally

Clone the project

```bash
  git clone https:...
```

Go to the project directory

```bash
  cd tall
```

Copy the `.env.example` and named it `.env`.

> This contains the environment variables such as **application name**, **database connection**, and **url**.

```terminal
  cp .env.example .env
```

Install composer packages.

```terminal
  composer install
```

Install dependencies

```bash
  npm install
```

Generate application key.

```terminal
  php artisan key:generate
```

Create a symbolic link to access storage static files from public.

```terminal
  php artisan storage:link
```

Migrate `database/migrations` files and run `database/seeders` as well.

```terminal
  php artisan migrate --seed
```

## Routes

To login an existing user, go to `/login`

**Email:** test@example.com
**Password:** password
