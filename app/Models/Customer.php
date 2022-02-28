<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use \App\Traits\Attributable;

    protected $with = ['eav'];

    protected $fillable = ['first_name'];
}
