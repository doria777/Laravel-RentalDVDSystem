<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $primaryKey = 'address_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
