<?php

class SessionController extends BaseController
{
    /**
     * This class will control all sessions within
     * the application, only, the creation and
     * deletion of sessions.
     */

    public function show()
    {
        /**
         * Return the login page to the user
         */
        return View::make('session.create');
    }

    public function create()
    {
        /**
         * The user has submitted the login form,
         * process and validate it, return a response
         */
    }

    public function delete()
    {
        /**
         * Destroy the session, user will be logged out
         */
    }
}