<?php
/**
 * @todo Beware the Route to Evil!
 * @todo http://philsturgeon.co.uk/blog/2013/07/beware-the-route-to-evil
 * @todo this is a mixture of resources, response methods and closures
 * @toto it needs refactoring to use explicit routes using Controller@Method syntax
 */

/**
 * Session Routes
 */
Route::get('login', array('as' => 'login', 'uses' => 'SessionController@create'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));
Route::resource('sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));

/**
 * User Routes
 */
Route::get('register', 'UserController@create');
Route::get('users/{id}/activate/{code}', 'UserController@activate')->where('id', '[0-9]+');

Route::get(
    'resend',
    array(
        'as' => 'resendActivationForm',
        function () {
            return View::make('users.resend');
        }
    )
);

Route::post('resend', 'UserController@resend');

Route::get(
    'forgot',
    array(
        'as' => 'forgotPasswordForm',
        function () {
            return View::make('users.forgot');
        }
    )
);

Route::post('forgot', 'UserController@forgot');

/**
 * User Admin Routes
 */
Route::post('users/{id}/change', 'UserController@change');
Route::get('users/{id}/reset/{code}', 'UserController@reset')->where('id', '[0-9]+');

Route::get(
    'users/{id}/suspend',
    array(
        'as' => 'suspendUserForm',
        function ($id) {
            return View::make('users.suspend')->with('id', $id);
        }
    )
);

Route::post('users/{id}/suspend', 'UserController@suspend')->where('id', '[0-9]+');
Route::get('users/{id}/unsuspend', 'UserController@unsuspend')->where('id', '[0-9]+');
Route::get('users/{id}/ban', 'UserController@ban')->where('id', '[0-9]+');
Route::get('users/{id}/unban', 'UserController@unban')->where('id', '[0-9]+');
Route::resource('users', 'UserController');

/**
 * Group Admin Routes
 */
Route::resource('groups', 'GroupController');
