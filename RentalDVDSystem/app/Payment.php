<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    protected $primaryKey = 'payment_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
