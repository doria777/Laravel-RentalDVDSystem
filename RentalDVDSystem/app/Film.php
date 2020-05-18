<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';

    protected $primaryKey = 'film_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
