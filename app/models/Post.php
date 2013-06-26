<?php

class Post extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
    	'author' => 'required',
    	'title' => 'required',
    	'body' => 'required'
    	);
}