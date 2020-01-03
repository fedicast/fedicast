<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class RegistrationQueue extends Model
{
    protected $table = 'registration_queue';

    protected $fillable = ['name', 'email', 'is_supporter'];
}
