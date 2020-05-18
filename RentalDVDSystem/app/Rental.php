<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rental';

    protected $primaryKey = 'rental_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
