<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $primaryKey = 'customer_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
