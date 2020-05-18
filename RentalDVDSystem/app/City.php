<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = 'city';

    protected $primaryKey = 'city_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
