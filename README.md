# electronic-client-dossier

Electronic Client Dossier (ECD) is a Laravel application made to keep track of your clients in various ways.

## Features

ECD has the following features:

- Out-of-the-box support for English and Dutch, with the possibility of adding more
- Admin and user roles
- Manage registered users and add new users (admin only)
- Profile management
- Manage clients and related contact persons
- Create and manage dated reports on clients

ECD makes use of a dashboard to access all available features.
To access the dashboard, the admin user has to create an account for you (regular registration is not possible).

## Requirements

In order to start development, you need the following software.

- [PHP](https://www.php.net) 8.1 or 8.2
- [Composer](https://getcomposer.org) 2.5.8 or higher
- [Node.js](https://nodejs.org/en) 18.16.1 or higher

The use of phpMyAdmin and MySQL for the database is recommended but not required for this application.

## Recommended IDE Setup

It is highly recommended to use [Visual Studio Code](https://code.visualstudio.com) when developing this application.

### Extensions

The following VSCode extensions are highly recommended:

- [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
- [Laravel Blade Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)
- [Laravel Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel5-snippets)

## Git Rules

In order to keep a manageable repository, the following rules must be applied:

- Create a new branch for every new feature
- Never push to the `main` or `develop` branch directly, make a pull request instead
- Always work and merge from a feature branch to `develop`
- Only the `develop` branch may be merged to the `main` branch
- Keep commit messages short but descriptive

### Branch Naming

A git branch should start with a category. Pick one of these: `feature`, `bugfix`, `hotfix` or `test`.

- `feature` is for adding, refactoring or removing a feature
- `bugfix` is for fixing a bug
- `hotfix` is for changing code with a temporary solution and/or without following the usual process (usually because of an emergency)
- `test` is for experimenting outside an issue/ticket

After the category, there should be a `/` followed by the reference of the issue/ticket you are working on. If there's no reference, just add `no-ref`.
After the reference, there should be another `/` followed by a description that sums up the purpose of this specific branch using kebab case.

Below are a few examples:

- `feature/issue-42/create-new-button-component`
- `bugfix/issue-342/button-overlap-form-on-mobile`
- `hotfix/no-ref/registration-form-not-working`
- `test/no-ref/refactor-components-with-atomic-design`

## Documentation

Useful documentation and links for the project:

- [Laravel Documentation](https://laravel.com/docs/10.x)
- [Laravel Guidelines](https://xqsit.github.io/laravel-coding-guidelines)
- [PSR-2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
- [PSR-4 Autoloader Guide](https://www.php-fig.org/psr/psr-4)

## Commands

The following tables contain useful Artisan commands for use inside the project:

### General

| Command               | Options                 | Description                                                                                 |
|-----------------------|-------------------------|---------------------------------------------------------------------------------------------|
| `php artisan serve`   | None                    | Start Laravel local development server.                                                     |
| `php artisan about`   | `--only=<section_name>` | A quick overview of the application's configuration. Use `--only` to show just one section. |
| `php artisan test`    | None                    | Run feature and unit tests.                                                                 |
| `php artisan inspire` | None                    | Get inspired.                                                                               |

### Database

| Command                             | Options                 | Description                                                                                                             |
|-------------------------------------|-------------------------|-------------------------------------------------------------------------------------------------------------------------|
| `php artisan db:show`               | `--counts`              | A quick overview of the database and its associated tables. Use `--counts` to check the number of rows.                 |
| `php artisan db:table <table_name>` | None                    | A general overview of the given database table.                                                                         |
| `php artisan migrate`               | None                    | Run the database migrations.                                                                                            |
| `php artisan migrate:status`        | None                    | Check which migrations have run thus far.                                                                               |
| `php artisan migrate:rollback`      | None                    | Roll back latest migration operation.                                                                                   |
| `php artisan migrate:reset`         | None                    | Roll back all migrations.                                                                                               |
| `php artisan migrate:refresh`       | `--seed`                | Roll back and run all migrations. Use `--seed` to also seed the database.                                               |
| `php artisan migrate:fresh`         | `--seed`                | Drop all tables and run all migrations. Use `--seed` to also seed the database.                                         |
| `php artisan db:seed`               | `--class=<seeder_name>` | Seed the database using the `Database\Seeders\DatabaseSeeder` class. Use `--class` to specify a specific class to seed. |

### Make

| Command                                         | Options | Description                                         |
|-------------------------------------------------|---------|-----------------------------------------------------|
| `php artisan make:migration <table_name>`       | None    | Generate a database migration using the given name. |
| `php artisan make:seeder <seeder_name>`         | None    | Generate a database seeder using the given name.    |
| `php artisan make:model <model_name>`           | None    | Generate Eloquent model using the given name.       |
| `php artisan make:controller <controller_name>` | None    | Generate controller using the given name.           |

### Pint

| Command                     | Options               | Description                                                                                     |
|-----------------------------|-----------------------|-------------------------------------------------------------------------------------------------|
| `./vendor/bin/pint`         | `directory_file_path` | Instruct Pint to fix code style issues. You may also run Pint on specific files or directories. |
| `./vendor/bin/pint --test`  | None                  | Instruct Pint to only inspect code style issues.                                                |
| `./vendor/bin/pint --dirty` | None                  | Instruct Pint to only fix uncommitted code style issues.                                        |

## Installation

In order to start development, the following steps need to be followed:

1. Run `composer install` to install all necessary composer modules
2. Run `npm install` to install all necessary npm modules
3. Duplicate the `.env.example` file and rename the file to `.env`
4. Configure the `.env` file for local development

## Deployment

Before deployment, you should consult the deployment section of the Laravel documentation.
However, here is a short step-by-step guide one how to deploy Laravel:

1. Copy the project files from the repository to the location where the application will run from
2. Duplicate the `.env.example` file and rename the file to `.env`
3. Configure the `.env` file for production
4. Run the `composer install --optimize-autoloader --no-dev` command to optimize autoloader and install all necessary modules
5. Run the `php artisan config:cache` command to combine all the Laravel configuration files into a single, cached file
6. Run the `php artisan event:cache` command to cache event mappings when utilizing events
7. Run the `php artisan route:cache` command to reduce all of your route registrations into a single method call within a cached file
8. Run the `php artisan view:cache` command to precompile all Blade views, so they are not compiled on demand

## Debugging

Laravel features multiple ways to debug the application.

### Enable Debug Mode

In the `.env` file there is an option called `debug` that can be enabled using `true` or `false`.
Enabling this option for local development can be quite useful and is recommended.

### Dump Die

You can use `dd()` in order to output a given variable and stop further execution of the code.

```php
$variable = "Hello, World!";
dd($variable);
```

Alternatively you can use `dump()` which does the same but without stopping further execution of the code.

```php
$variable = "Hello, World!";
dump($variable);
```

### Logging

Sometimes using dump die won't work. In these cases you could use the build in Laravel logger.

```php
use Illuminate\Support\Facades\Log;

Log::info($variable);
```

Please keep in mind that there are multiple different logging levels.
For more information please consult the logging section of the Laravel documentation.
