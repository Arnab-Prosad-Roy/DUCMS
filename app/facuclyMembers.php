<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facuclyMembers extends Model
{
    protected $fillable = ['name', 'designation', 'phone', 'email', 'createdBy'];
}
