<?php

/**
 * Unauthenticated group
 * Users who have not yet signed in will be forwarded into
 * this group.
 */
Route::group(array('before' => 'guest'), function() {

    /**
     * All post submissions will be protected against
     * cross site request forgery
     */
    Route::group(array('before' => 'csrf'), function() {

        // login to the application (POST)
        Route::post('/session/create', array('as' => 'session-create', 'uses' => 'SessionController@create'));

        // create a user account (POST)
        Route::post('/account/create', array('as' => 'account-create', 'uses' => 'UserController@create'));

    });

    // return the login page (GET)
    Route::get('/session/create', function() {
        return View::make('session.create');
    });

    // return the registration page (GET)
    Route::get('/account/create', function() {
        return View::make('account.create');
    });

});

/**
 * Authenticated group
 * Users who have already been authenticated will
 * be forwarded into this group.
 */
Route::group(array('before' => 'auth'), function() {

    /**
     * All post submissions will be protected against
     * cross site request forgery
     */
    Route::group(array('before' => 'csrf'), function() {

        // create a ticket
        Route::post('/ticket/create', array('as' => 'ticket-create', 'uses' => 'TicketController@create'));

    });

    Route::get('/ticket/create', function() {
        return View::make('ticket.create');
    });

});

/**
 * Ticket routes
 */
Route::get('/status/{id}', 'TicketController@show');

/**
 * Welcome route
 */
Route::get('/', function() {
    return View::make('index');
});