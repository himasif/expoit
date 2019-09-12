<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    protected $table = 'registrants';
    protected $fillable = ['name', 'email', 'phone', 'company', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
}
