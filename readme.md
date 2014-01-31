## Laravel 4 Package with Sentry 2 - Version 2.0

[![Build Status](https://travis-ci.org/wearebase/sentry-manager-laravel-package.png?branch=master)](https://travis-ci.org/wearebase/sentry-manager-laravel-package)

This is a fork of [L4withSentry](https://github.com/rydurham/L4withSentry) to bring the project inside a package.

This is a demo of [Sentry 2](https://github.com/cartalyst/sentry) integrated with [Laravel 4](https://github.com/laravel/laravel/tree/develop) and [Bootstrap 3.0](http://getbootstrap.com).

Version 2.0 has been completely revamped using strategies suggested in *Laravel: From Apprentice to Artisan* by Taylor Otwell, *Implementing Laravel* by Chris Fidao and the Laracast videos.   Version 1.0 still exists in its original version. 

### Instructions

Before you begin, make sure you have both ```git``` and ```composer``` installed on your system. 

1. Clone the repo
2. Run ```php composer.phar update```
3. Set up your datbase configuration in ```app/config/database.php```
4. Edit ```app/config/mail.php``` to work with your mail setup.
5. Run the migrations: ```php artisan migrate```
6. Seed the Database: ```php artisan db:seed```

### Seeds
The seeds in this repo will create two groups and two user accounts.

__Groups__
* Users
* Admins

__Users__
* user@user.com  *Password: sentryuser*
* admin@admin.com *Password: sentryadmin*

### Links
* [Sentry 2.0 Documentation](https://cartalyst.com/manual/sentry)
* [Laravel 4 Documentation](http://laravel.com/docs)
* [Laravel: From Apprentice To Artisan](https://leanpub.com/laravel) by Taylor Otwell
* [Implementing Laravel](https://leanpub.com/implementinglaravel) by Chris Fidao
* [Laracasts](http://laracasts.com)

### Tests
Currently rely on the Laravel framework being installed

### Notes

* Tests are currently broken.

=======
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
