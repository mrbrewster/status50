<?php

class TicketController extends BaseController
{
    /**
     * This class will manage the creation
     * of tickets, the fetching of tickets, only.
     */

    public function show($id)
    {
        /**
         * Return the 'make a new ticket' page
         */
        return View::make('ticket.show')->with('id', $id);
    }

    public function create()
    {
        /**
         * The user has submitted a request to create
         * a new ticket. Submit it to the ticket database,
         * if validation was successful.
         */
    }

    public function delete()
    {
        /**
         * The user has requested to delete the ticket.
         * The user should be confirmed the creator of
         * the ticket before deleting
         */
    }

    public function update()
    {
        /**
         * The user wants to update a previously created ticket.
         * The user should be the creator of the ticket
         */
    }

}