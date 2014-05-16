<?php

class Ticket extends Eloquent {
    /**
     * Define which fields in the ticket
     * database are fillable (avoid mass assignment)
     */
    protected $fillable = array('title', 'description', 'status', 'ticket_id', 'creator_id');

    protected $table = 'tickets';
}
