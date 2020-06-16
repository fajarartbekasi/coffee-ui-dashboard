# Coffee UI Dashboard Laravel

=======

![version](https://img.shields.io/badge/version-1.0.1-blue.svg) ![license](
https://img.shields.io/badge/license-MIT-blue.svg) [![GitHub issues open]](https://github.com/fajarartbekasi/coffee-ui-dashboard/issues)

*Frontend version*: Coffee UI Dashboard v1.0.0.

Speed up your web development with the Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and up.

## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md

And Laravel: https://laravel.com/docs/7.x/installation

## Installation

After initializing a fresh instance of Laravel (and making all the necessary configurations), install the preset using one of the provided methods:

Laravel 5.7 & 5.8
1. `Cd` to your Laravel app
2. Type in your terminal: `composer make:auth`
3. Install this preset via `composer require fajarartbekasi/coffee-ui-dashboard`. No need to register the service provider. Laravel 5.5 & up can auto detect the package.
4. Run `php artisan preset coffee` command to install the NowUI preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
5. In your terminal run `composer dump-autoload`
6. Run `php artisan migrate --seed` to create basic users table

Laravel 6.x
1. `Cd` to your Laravel app
2. Type in your terminal: `composer require laravel/ui "^1.2"`
3. Install this preset via `composer require fajarartbekasi/coffee-ui-dashboard`. No need to register the service provider. Laravel 5.5 & up can auto detect the package.
4. Run `php artisan preset coffee` command to install the NowUI preset. This will install all the necessary assets and also the custom auth views, it will also add the auth route in `routes/web.php`
(NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in routes/web.php)
5. In your terminal run `composer dump-autoload`
6. Run `php artisan migrate --seed` to create basic users table

## Usage

1. type on youre terminal: `php artisan tinker`
2. `factory(App\User::class)->create()`
3. copy and paste email & password to youre login

Make sure to run the migrations and seeders for the above credentials to be available.