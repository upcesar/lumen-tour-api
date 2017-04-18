# Lumen PHP Framework Test API

This is a API built with Laravel Lumen, which is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax.

## Homestead virtual Machine

We recommend to use [Homestead](https://laravel.com/docs/5.4/homestead) for development environment. It comes with all necessary to start using this API (Nginx, PHP 7.0, mySQL).

## Installation (On Homestead Guest VM)

- Clone the repo using git command: `git clone git@github.com:upcesar/lumen-tour-api`.
- Install composer on the server (guest VM), typing `vagrant ssh`. For further information about downloading and installing, just go to [Composer offical website](http://www.getcomposer.org/)
- When done with Composer installation, type `composer install` and then `composer update`

## Database Installation
- Type on Host OS, `vagrant ssh`
- Type `php artisan migrate` and then `php artisan db:migrate`
- Go to shell server and execute `echo "create database databasename" | mysql -u homestead -p`. Password will be prompted.
- Go to root source folder and copy .env.example (config file) with `cp .env.example .env`.

## Framework Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
