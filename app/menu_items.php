<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu_items extends Model
{
    protected $table="menu_items";

    protected $fillable=['label','link','parent','sort','class','menu','depth'];
}
