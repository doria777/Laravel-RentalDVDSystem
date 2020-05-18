<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';

    protected $primaryKey = 'store_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
