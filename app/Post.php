<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name 
    protected $table = 'posts';
    //Primary key
    public $primarykey = 'item_id';
    //Timestamps
    public $timestamps = true;
}
