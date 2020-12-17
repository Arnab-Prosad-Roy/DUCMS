<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cms_Sliders extends Model
{
	protected $fillable = ['title', 'text',  'image', 'createdBy'];
}
