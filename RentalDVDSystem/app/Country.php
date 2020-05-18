<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $primaryKey = 'country_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
