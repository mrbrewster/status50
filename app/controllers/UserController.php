<?php

class UserController extends BaseController
{
    /**
     * This class will deal with all user operations, including
     * the creation and deletion of accounts, the activation
     * of the accounts, explicitly.
     */

    public function show()
    {
        /**
         * Return the 'make a new account' page
         */
        return View::make('');
    }

    public function create()
    {
        /**
         * The user has submitted the registration form,
         * validate the input and send activation email.
         * If validation is successful, create a new
         * record in the database (which, is 'users')
         */
    }

    public function activate()
    {
        /**
         * The user has clicked the account activation
         * link within the sent email from 'postCreate',
         * validate the token within the 'users' database,
         * log the user in using Auth::login if the
         * account was successfully activated and
         * return the user to the dashboard. If activation
         * was not successful, return the user to 'account/create'
         * with an error
         */
    }

}