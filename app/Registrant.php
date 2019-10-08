<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registrant extends Model
{
    use SoftDeletes;
    protected $table = 'registrants';
    protected $fillable = ['name', 'email', 'phone', 'company', 'created_at', 'updated_at', 'verify_code', 'file', 'status', 'register_code'];
    protected $dates = ['created_at', 'updated_at'];
}
