<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';

    protected $primaryKey = 'actor_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
