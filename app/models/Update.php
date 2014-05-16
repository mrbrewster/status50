<?php

class Update extends Eloquent {
    /**
     * Define which fields in the update
     * database are fillable (avoid mass assignment)
     */
    protected $fillable = array('ticket_id', 'message', 'creator_id');

    protected $table = 'updates';
}
