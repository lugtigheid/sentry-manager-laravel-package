## Laravel 4 Package with Sentry 2 - Version 2.0

This is a fork of [L4withSentry](https://github.com/rydurham/L4withSentry) to bring the project inside a package.

This is a demo of [Sentry 2](https://github.com/cartalyst/sentry) integrated with [Laravel 4](https://github.com/laravel/laravel/tree/develop) and [Bootstrap 3.0](http://getbootstrap.com).

Version 2.0 has been completely revamped using strategies suggested in *Laravel: From Apprentice to Artisan* by Taylor Otwell, *Implementing Laravel* by Chris Fidao and the Laracast videos.   Version 1.0 still exists in its original version. 

### Todo

* It's in the `base/authority` namespace, it probably needs a better name maybe `sentry-laravel-manager`
* `php artisan view:publish base/authority` works but the controllers need updating to prefix the package name or some way of telling View inside the controllers that they belong to a package
* `php artisan migrate --package="base/authority"` runs the migrations
* Setup the package on packagist


### Instructions

Before you begin, make sure you have both ```git``` and ```composer``` installed on your system. 

1. Add the repository to your `composer.json` (this is until we setup packagist)

    "repositories": [
            {
                "type": "vcs",
                "url": "git@github.com:wearebase/sentry-manager-laravel-package.git"
            }
        ],
    

2. Add `"base/authority": "dev-master"` to the `"require"` list
2. Run `composer update`
3. Set up your datbase configuration in ```app/config/database.php```
4. Edit `app/config/mail.php` to work with your mail setup.
5. Run the migrations: `php artisan migrate --package="base/authority"`
6. Seed the Database: `php artisan db:seed`

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
